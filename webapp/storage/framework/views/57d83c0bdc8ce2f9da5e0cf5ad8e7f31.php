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
                <form action="home">
                    <h2>Sign In</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <input type="email" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <input type="password" required>
                        <label>Password</label>
                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">Remember Me</label>
                        <a href="#">Forget Password</a>
                    </div>
                    <button class="btn">Login</button>
                    <div class="create-account">
                        <p>Create A New Account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>

            <div class="form-box register">
                <form action="dataInsert" method="post" enctype="multipart/form-data">
                    <?php echo csrf_field(); ?>
                    <h2>Sign Up</h2>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-user'></i></span>
                        <label for="username" class="control-label"></label>
                        <input type="text" name="username" class="form-control" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-envelope'></i></span>
                        <label for="email" class="control-label"></label>
                        <input type="text" name="email" class="form-control" required>
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class='bx bxs-lock-alt'></i></span>
                        <label for="password" class="control-label"></label>
                        <input type="password" name="password" class="form-control" required>
                        <label>Password</label>

                    </div>
                    <div class="remember-password">
                        <label for=""><input type="checkbox">I agree with this statment</label>
                    </div>
                    <button class="btn">Create Account</button>
                    <div class="create-account">
                        <p>Already Have An Account? <a href="#" class="login-link">Sign In</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/login.js"></script>
</body>

</html>
<?php /**PATH D:\Kumpulan Tugas\Semester 5\PPW\PROYEK\DWAB-app\resources\views/login.blade.php ENDPATH**/ ?>