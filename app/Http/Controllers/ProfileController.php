<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Services\FbrApiService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    private $fbrApiService;

    public function __construct(FbrApiService $fbrApiService)
    {
        $this->fbrApiService = $fbrApiService;
    }

    /**
     * Get FBR API service with user context
     */
    private function getFbrApiService()
    {
        $user = Auth::user();
        return $this->fbrApiService->setUser($user);
    }

    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        $user = $request->user();
        $provinces = [];

        // Load provinces from FBR API if user has access token
        if ($user->fbr_access_token) {
            try {
                $provincesResult = $this->getFbrApiService()->getProvinceCodes($user->fbr_access_token);
                if ($provincesResult['success']) {
                    $provinces = $provincesResult['data'] ?? [];
                }
            } catch (\Exception $e) {
                // Silently handle error - provinces will be loaded via JavaScript if needed
            }
        }

        return view('profile.edit', [
            'user' => $user,
            'provinces' => $provinces,
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        // Update session with latest user information
        $user = $request->user();
        $request->session()->put('user_info', [
            'id' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
            'is_admin' => $user->is_admin,
            'role' => $user->role,
            'fbr_access_token' => $user->fbr_access_token,
            'cinc_ntn' => $user->cinc_ntn,
            'address' => $user->address,
            'business_name' => $user->business_name,
            'province' => $user->province,
            'has_fbi_token' => !empty($user->fbr_access_token),
        ]);

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
