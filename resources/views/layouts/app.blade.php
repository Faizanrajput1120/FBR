@php
    $user = auth()->user();
@endphp

@if ($user)
    @if ($user->is_admin == 1)
        @include('layouts.condition') {{-- Admin layout --}}
    @elseif ($user->is_admin == 3)
         @include('layouts.condition') {{-- Admin layout --}}
    @endif
@endif