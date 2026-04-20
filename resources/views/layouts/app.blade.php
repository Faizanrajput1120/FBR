<!-- condition.blade.php -->

@if (auth()->check() && auth()->user()->is_admin == 1)
    @include('layouts.condition') <!-- Admin layout -->
@elseif (auth()->check() && auth()->user()->is_admin == 3)
    @include('layouts.user_layout') <!-- User layout -->
@endif
