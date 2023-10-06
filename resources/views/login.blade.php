<div>
    <div>
        Login
    </div>

    <div>
        <form method="POST" action="{{ route('login') }}">
            @csrf

<div>
    <label for="email">E-Mail Address</label>
    <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    @error('email')
        <strong>{{ $message }}</strong>
    @enderror
</div>

<div>
    <label for="password">Password</label>
    <input id="password" type="password" name="password" required autocomplete="current-password">
    @error('password')
        <strong>{{ $message }}</strong>
    @enderror
</div>


            <div>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="remember">Remember Me</label>
            </div>

            <div>
                <button type="submit">Login</button>

                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot Your Password?</a>
                @endif
            </div>
        </form>
    </div>
</div>
