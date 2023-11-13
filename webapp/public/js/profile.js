// Temukan elemen gambar berdasarkan id
var profileImage = document.getElementById("profileImage");

// Tambahkan event click ke gambar
profileImage.onclick = function() {
  // Arahkan pengguna ke halaman "profile.blade.php"
  window.location.href = "profile";
};
