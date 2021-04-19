@if (Route::has('login'))
        @auth

        @else
            {{ route('login') }}
        @endauth
@endif

