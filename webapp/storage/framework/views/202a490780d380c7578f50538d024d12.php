<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="bg/favicon.ico" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Sharp:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="css/subcategory.css">
    <title>DWAB | Comunities</title>
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
                <a href="#">
                    <span class="material-symbols-sharp">add_circle</span>
                    <h3>Add New Community</h3>
                </a>
            </div>
        </aside>

        <main>
            <h1>Communities</h1>
            <!-- MAIN -->
            <div class="recent-payment">
                <table>
                    <td class="image-cell">
                        <img src="image/fuji.jpeg" alt="Foto Group">
                    </td>
                    <td class="description-cell">
                        <p><strong>Ke Jepang Yuk</strong></p>
                        <h2> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Laboriosam officiis inventore quae incidunt ea placeat consectetur vero libero velit cum eligendi voluptatibus, earum dicta accusamus ab non voluptatum excepturi architecto quis, quasi autem perspiciatis porro sapiente. Facilis voluptatum aspernatur in doloremque pariatur! </h2>
                        <button class="join-button">Join Group</button>
                    </td>
                    <table>
                    <td class="image-cell">
                        <img src="image/culinary2.jpeg" alt="Foto Group">
                    </td>
                    <td class="description-cell">
                        <p><strong>Kulineran Balige</strong></p>
                        <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore officiis laboriosam assumenda culpa ad quae quod porro soluta sapiente necessitatibus voluptatem similique adipisci aperiam aspernatur, fuga odio non repellendus blanditiis, eos ipsum cupiditate dicta distinctio dolores? Explicabo blanditiis nihil soluta. </h2>
                        <button class="join-button">Join Group</button>
                    </td>
                    </table>
                    <table>
                    <td class="image-cell">
                        <img src="image/camera.jpeg" alt="Foto Group">
                    </td>
                    <td class="description-cell">
                        <p><strong>Photography Sumut</strong></p>
                        <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit doloribus exercitationem, veritatis, commodi odio est explicabo quia nisi excepturi error assumenda, facilis id. Blanditiis, aliquam deleniti nulla natus sunt, officiis ipsa, sapiente dolores est quam sed hic tenetur laborum. Consequatur temporibus doloremque tempora at! Voluptas, obcaecati accusantium porro cumque dolor rerum corporis commodi impedit aliquam magnam quo velit, sapiente eos. </h2>
                        <button class="join-button">Join Group</button>
                    </td>
                    </table>
                    <table>
                    <td class="image-cell">
                        <img src="image/sports2.jpeg" alt="Foto Group">
                    </td>
                    <td class="description-cell">
                        <p><strong>Basket Laguboti</strong></p>
                        <h2> Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus obcaecati harum quia aliquid perspiciatis at minima voluptas voluptate quam quaerat fuga consequatur debitis nisi non, enim odit iure cupiditate. Similique iure architecto cum nemo esse? </h2>
                        <button class="join-button">Join Group</button>
                    </td>
                    </table>

                    <a href="#"> Show All</a>
            </div>

        </main>

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
                <div class="profile">
                    <div class="info">
                        <p>Haii <b>Weny</b></p>
                        <small class="text-muted">User</small>
                    </div>
                    <div class="profile-photo">
                        <img src="image/weny.jpg" id="profileImage">
                    </div>
                </div>
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
<?php /**PATH D:\Kumpulan Tugas\Semester 5\PPW\PROYEK\DWAB-app\resources\views/subcategory.blade.php ENDPATH**/ ?>