const sideMenu = document.querySelector("aside");
const menuBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menuBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})

closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})

themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active')
})

document.getElementById('profileImage').addEventListener('click', function() {
    window.location.href = 'profile';
});

document.getElementById('kresensiaImage').addEventListener('click', function() {
    window.location.href = 'kresensia';
});

document.getElementById('GloryImage').addEventListener('click', function() {
    window.location.href = 'glorya';
});

document.getElementById('DebyImage').addEventListener('click', function() {
    window.location.href = 'deby';
});

const addFriendButton = document.getElementById('friend-button');
    const friendNotification = document.getElementById('friend-notification');

    addFriendButton.addEventListener('click', function () {
        // Mengubah teks tombol
        addFriendButton.textContent = 'Permintaan Terkirim';

        // Menampilkan pemberitahuan
        friendNotification.textContent = 'Permintaan pertemanan telah terkirim.';
    });
