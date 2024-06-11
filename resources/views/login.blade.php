<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Netflix</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
            crossorigin="anonymous">
        <link rel="stylesheet" href="styleLog.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

    </head>
    <body>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
            crossorigin="anonymous"></script>

        @include('partials.navbar')

        <div class="container mt-5" id="container">
            <div class="form-container sign-up">
                <form method="POST" action="/register">
                    @csrf
                    <h1>Create Account</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>or use your email for registeration</span>
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Address" name="address">
                    <input type="text" placeholder="Phone Number" name="phone_number">
                    <input type="email" placeholder="Email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" name="email">
                    <input type="password" placeholder="Password" name="password">
                    <!-- eror -->
                    <button type="submit" id="login">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in">
                <form method="POST" action="/login">
                    @csrf
                    <h1>Sign In</h1>
                    <div class="social-icons">
                        <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                        <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                    </div>
                    <span>or login with your account</span>
                    <input type="username" placeholder="Username" name="username">
                    <input type="password" placeholder="Password" name="password">
                    <a href="#">Forget Your Password?</a>
                    <button>Sign In</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                        <h1>Welcome Back!</h1>
                        <p>Login with existing account</p>
                        <!-- contoh animasi -->

                        <button class="hidden" id="pindah">Sign In</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                        <h1>Please Welcome !</h1>
                        <p>Register your account to access all features </p>
                        <button class="hidden" id="register">Sign Up</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="img-container">
            <div class="bg-image"
                style="background-image: url('../Dune.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('../Dunkirk.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('../PeakyBlinders.jpeg');"></div>
            <div class="bg-image"
                style="background-image: url('../endgame.jpeg');"></div>
        </div>

    </body>
    <script src="../script.js"></script>
</html>
