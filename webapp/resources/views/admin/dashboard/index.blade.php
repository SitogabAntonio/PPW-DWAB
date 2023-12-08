<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="bg/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <title>DWAB | Home</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <script src="js/home.js"></script>
</head>

<body>
    <!-- Header section -->
    <header>
    <ul class="navlist">
            <li> <a href="#review">Service & Support</a></li>


            <div class="profile">
            <img src="{{ asset('image/weny.jpg') }}" alt="Profile Image" onclick="window.location.href = 'profile'">

        </div>
        </ul>

    <ul class="navbar-nav ms-auto"> <!-- Tambahkan class "ms-auto" di sini -->
        <!-- Authentication Links -->
        @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="profile" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>

                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>
</header>

    <!-- Home section -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>DWAB</h1>
            <h2>MEET YOUR FRIEND, FIND YOUR TRIBE</h2>
            <h3>Discover the magic of music in our vibrant community. Join us to share your passion, create harmonious
                melodies, and make lasting musical connections!</h3>
            <a href="{{ route('subcategory.index') }}" class="btn"> FIND YOUR COMMUNITIES </a>
        </div>

        <div class="home-img">
            <img src="{{ asset('image/comunity.png') }}" alt="Community Image">
        </div>
    </section>

    <!-- Footer section -->
    <footer>
        <ul class="footlist">
            <li><a href="#followers">Proactive Monitoring</a></li>
            <li><a href="#recent">Active 24 Hours</a></li>
            <li><a href="#security">Security Guaranteed</a></li>
        </ul>
    </footer>

    <script src="js/scroll.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</body>

</html>
