<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="bg/favicon.ico" type="image/x-icon">
    <title>DWAB | Login</title>
    <link rel="stylesheet" href="css/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
</head>

<body>
    <!-- LOGIN FORM CREATION -->
    <h2 class="logo"><img src="image/putih-transparan.png"></h2>
    <div class="background"></div>
    <div class="container">
        <div class="item">
            <br>
            <br>
            <div class="text-item">
                <h2>Meet Your Friends,</h2><br>
                <h2>Find Your Tribe</h2>
                <br>
                <p>Uncover a world of like-minded individuals at IT Del who share your interests and passions. Join our
                    community today to forge lasting connections and embark on a journey of shared experiences and
                    personal growth.
                </p>
                <div class="social-icon">
                    <a href="#"><i class='bx bxl-facebook'></i></a>
                    <a href="#"><i class='bx bxl-youtube'></i></a>
                    <a href="#"><i class='bx bxl-instagram'></i></a>
                </div>
            </div>
        </div>
        <div class="login-section">
            <div class="form-box login">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label>Email</label>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        <label>Password</label>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row mb-3">
                        <div class="col-md-6 offset-md-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-8 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button>

                            @if (Route::has('password.request'))
                                <a href="{{ route('password.request') }}" class="forgot-password-link">
                                    Forgot Your Password?
                                </a>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>
