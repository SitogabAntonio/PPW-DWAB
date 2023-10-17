<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>

    <!-- ===== ===== Custom Css ===== ===== -->
    <link rel="stylesheet" href="css/profile.css">

    <!-- ===== ===== Remix Font Icons Cdn ===== ===== -->
    <link rel="stylesheet" href="fonts/remixicon.css">
</head>

<body>
    <!-- ===== ===== Body Main-Background ===== ===== -->
    <span class="main_bg"></span>


    <!-- ===== ===== Main-Container ===== ===== -->
    <div class="container">

        <!-- ===== ===== User Main-Profile ===== ===== -->
        <section class="userProfile card" id='profile'>
            <div class="profile">
                <figure><img src="image/weny.jpg" alt="profile" width="250px" height="250px"></figure>
                <button class="edit-button">Edit Profile</button>
            </div>
        </section>


        <!-- ===== ===== User Details Sections ===== ===== -->
        <section class="userDetails card">
            <div class="userName">
                <h1 class="name">Weny J Sitinjak</h1>
                <div class="map">
                    <i class="ri-map-pin-fill ri"></i>
                    <span> Indonesia, IDN</span>
                </div>
                <p>Mahasiswa</p>
            </div>

            <div class="rank">
        </section>


        <!-- ===== ===== Timeline & About Sections ===== ===== -->
        <section class="timeline_about card">
            <div class="tabs">
                <ul>
                    <li class="about active">
                        <i class="ri-user-3-fill ri"></i>
                        <span>About</span>
                    </li>
                </ul>
            </div>

            <div class="contact_Info">
                <h1 class="heading">Contact Information</h1>
                <br>
                <ul>
                    <li class="phone">
                        <h1 class="label">Phone:</h1>
                        <span class="info">+62-822-1234-4321</span>
                    </li>
                    <br>
                    <li class="address">
                        <h1 class="label">Address:</h1>
                        <span class="info">S34 E 65th Street <br> New York, NY 10651-78 156-187-60</span>
                    </li>
                </ul>
            </div>

            <div class="basic_info">
                <h1 class="heading">Basic Information</h1>
                <ul>
                    <li class="birthday">
                        <h1 class="label">Birthday:</h1>
                        <span class="info">Dec 25, 2000</span>
                    </li>

                    <li class="sex">
                        <h1 class="label">Gender:</h1>
                        <span class="info">Male</span>
                    </li>
                </ul>
            </div>
        </section>
    </div>

</body>

</html>
