    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="icon" href="bg/favicon.ico" type="image/x-icon">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="stylesheet" href="css/subcategory.css">
        <title>DWAB | Communities</title>
    </head>

    <body>
        <div class="container">
            <!-- SIDEBAR-->
            <aside>
                <div class="top">
                    <div class="close" id="close-btn">
                        <span class="material-symbols-sharp">close</span>
                    </div>
                </div>
                <div class="sidebar">
                <h1>Categories</h1>
                    <a href="#" class="active">
                        <span class="material-symbols-sharp">sports_basketball</span>
                        <h3>Sports</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-sharp">headphones</span>
                        <h3>Music</h3>
                    </a>

                    <a href="#">
                        <span class="material-symbols-sharp">restaurant_menu</span>
                        <h3>Culinary</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-sharp">hiking</span>
                        <h3>Travelling</h3>
                    </a>
                    <a href="#">
                        <span class="material-symbols-sharp">photo_camera</span>
                        <h3>Photography</h3>
                    </a>
                    <a href="{{ url('admin/post/create') }}">
                        <span class="material-symbols-sharp">add_circle</span>
                        <h3>Add New Community</h3>
                    </a>
                </div>
            </aside>

            <!-- MAIN CONTENT -->
            <main>
                <h1>Communities</h1>
                <!-- COMMUNITY LIST -->
                <div class="recent-payment">
                    @foreach($post as $post)
                    <table>
                        <td class="image-cell">
                            <img src="{{ url('uploads/post/' . $post->image) }}" alt="Community Image">
                        </td>
                        <td class="description-cell">
                            <p><strong>{{ $post->title }}</strong></p>
                            <h2>{{ substr($post->Description, 0, 200) }}</h2>
                            <a href="{{ url('post/' . $post->slug) }}" class="join-button" style="color: white;">Join Group</a>
                        </td>
                    </table>
                    @endforeach
                    <a href="#"> Show All</a>
                </div>
            </main>

            <!-- RIGHT SECTION -->
            <!-- RIGHT-->
            <div class="right">
                <div class="top">
                    <button id="menu-btn">
                        <span class="material-symbols-sharp">list</span>
                    </button>
                    <div class="theme-toggler">
                        <span class="material-symbols-sharp active">light_mode</span>
                        <span class="material-symbols-sharp">nightlight</span>
                    </div>
                    <div class="profile" onclick="redirectToProfile()">
                        <div class="info">
                            <p>Haii <b>{{ Auth::user()->name }}</b></p>
                            <small class="text-muted">User</small>
                        </div>
                        <div class="profile" onclick="redirectToProfile()">
                            <img src="{{ asset('uploads/profile_path/' . auth()->user()->profile_path) }}" alt="Profile Image">
                        </div>
                    </div>

                    <script>
                        function redirectToProfile() {
                            // Redirect ke halaman edit profile atau lakukan aksi sesuai kebutuhan
                            window.location.href = "{{ route('profile.edit', auth()->user()) }}";
                        }
                    </script>

                </div>
                <div class="recent-updates">
                    <h2>Friends May You Know</h2>
                    <div class="updates">
                        <div class="update">

                            <div class="profile-photo">
                                <img src="image/glory.jpg" id="GloryImage">
                            </div>
                            <div class="message">
                                <p><b>Glorya</b></p>
                                <small class="text-muted">2 Mutual Friends</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo">
                                <img src="image/kresensia.jpg" id="kresensiaImage">
                            </div>
                            <div class="message">
                            <p><b>Kresensia</b></p>
                                <small class="text-muted">2 Mutual Friends</small>
                            </div>
                        </div>
                        <div class="update">
                            <div class="profile-photo" id="DebyImage">
                                <img src="image/deby.jpg">
                            </div>
                            <div class="message">
                            <p><b>Deby</b></p>
                                <small class="text-muted">2 Mutual Friends</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/subcategory.js"></script>
    </body>

    </html>
