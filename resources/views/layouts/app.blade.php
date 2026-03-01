<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strawberry SMP</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">
    <link rel="shortcut icon" href="{{  asset('images/logo.png') }}" type="image/png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>


    <nav class="navbar">
        <div class="nav-logo">
            <div class="nav-circle">
                <img src="{{ asset('images/logo.png') }}" alt="Strawberry Logo"/>
            </div>
        </div>

      
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/rules">Rules</a>
            <a href="/members">Members</a>
            <a href="/reminders">Reminders</a>
        </div>

     
        <button class="nav-hamburger" aria-label="Open menu">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <div class="nav-drawer">
        <button class="nav-drawer-close" aria-label="Close menu">✕</button>
        <a href="/">Home</a>
        <a href="/rules">Rules</a>
        <a href="/members">Members</a>
        <a href="/reminders">Reminders</a>
    </div>

    <div class="nav-overlay"></div>

    <!-- Page Content -->
    <main>
        @yield('content')
        @yield('highlight')
        @yield('culture')
        @yield('history')
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-left">
            <span class="footer-logo">STRAWBERRY</span>
        </div>
        <div class="footer-center">
            <div class="footer-links">
                <a href="/rules">Rules</a>
                <a href="/members">Members</a>
                <a href="/reminders">Reminders</a>
            </div>
        </div>
        <div class="footer-right">
            <div class="footer-circle">
               <a href="https://www.facebook.com/strawberrysmpmc"> <i class="fab fa-facebook-f"></i></a>    
            </div>
        </div>
    </footer>

</body>
</html>