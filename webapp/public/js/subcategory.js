const btns = [
    { id: 1, name: "ALL" },
    { id: 2, name: "SPORT" },
    { id: 3, name: "MUSIC" },
    { id: 4, name: "PHOTOGRAPHY" },
    { id: 5, name: "CULINARY" },
    { id: 6, name: "TRAVEL" },
];


const community = [
    {
        id: 6,
        image: "image/adventure.jpeg",
        title: "Hiking Sumut",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptas voluptatum odit voluptatibus illum temporibus ipsam, provident earum perferendis quam. Neque consectetur amet non maiores?",
        category: "TRAVEL",
    },
    {
        id: 3,
        image: "image/music.jpeg",
        title: "Nge Jam kuy",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptas voluptatum odit voluptatibus illum temporibus ipsam, provident earum perferendis quam. Neque consectetur amet non maiores?",
        category: "MUSIC",
    },
    {
        id: 2,
        image: "image/sports.jpeg",
        title: "Olahraga Kuy",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptas voluptatum odit voluptatibus illum temporibus ipsam, provident earum perferendis quam. Neque consectetur amet non maiores?",
        category: "SPORTS",
    },
    {
        id: 5,
        image: "image/culinary.jpeg",
        title: "Makan Yuk",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptas voluptatum odit voluptatibus illum temporibus ipsam, provident earum perferendis quam. Neque consectetur amet non maiores?",
        category: "CULINARY",
    },
    {
        id: 4,
        image: "image/lens.jpeg",
        title: "Lens Sumut",
        description:
            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis voluptas voluptatum odit voluptatibus illum temporibus ipsam, provident earum perferendis quam. Neque consectetur amet non maiores?",
        category: "TRAVEL",
    },
];

const btnsContainer = document.getElementById("btns");
const communityContainer = document.getElementById("root");

// Buat tombol-tombol kategori dan tambahkan ke btnsContainer
btns.forEach(btn => {
    const buttonElement = document.createElement("button");
    buttonElement.classList.add('fill-p');
    buttonElement.textContent = btn.name;
    buttonElement.onclick = () => filterItems(btn.id);
    btnsContainer.appendChild(buttonElement);
});

// Inisialisasi tampilan dengan menampilkan semua item komunitas
displayItem(community);

// Fungsi untuk memfilter item komunitas berdasarkan kategori
function filterItems(categoryId) {
    if (categoryId === 1) {
        displayItem(community); // Menampilkan semua item jika kategori "ALL" dipilih
    } else {
        const filteredItems = community.filter(item => item.id === categoryId);
        displayItem(filteredItems);
    }
}

// Fungsi untuk menampilkan item komunitas pada halaman
function displayItem(items) {
    communityContainer.innerHTML = '';

    items.forEach(item => {
        const itemElement = document.createElement("div");
        itemElement.classList.add('box');

        const itemContent = `
            <h3>${item.title}</h3>
            <div class='img-box'>
                <img class='images' src='${item.image}'></img>
                <div class='desc-box'>
                    <h5>${item.description}</h5>
                    <div class="inside-sidebar">
                    <a href="#">
                        <img src="image/weny.jpg">
                    </a>
                    <a href="#">
                        <img src="image/glory.jpg">
                    </a>
                    <a href="#">
                        <img src="image/kresensia.jpg">
                    </a>
                </div>
            </div>
        `;

        itemElement.innerHTML = itemContent;
        communityContainer.appendChild(itemElement);
    });
}

// ...

const addCommunityButton = document.createElement("button");
addCommunityButton.classList.add('fill-p');
addCommunityButton.textContent = "Add New Community";
addCommunityButton.onclick = () => showAddCommunityForm();
btnsContainer.appendChild(addCommunityButton);

// ...

// Fungsi untuk menampilkan formulir penambahan komunitas
function showAddCommunityForm() {
    const form = document.createElement("div");
    form.classList.add('add-community-form');

    const formContent = `
        <label for="imageInput">Image URL:</label>
        <input type="text" id="imageInput" placeholder="Enter image URL" required><br>
        <label for="titleInput">Title:</label>
        <input type="text" id="titleInput" placeholder="Enter title" required><br>
        <label for="descriptionInput">Description:</label>
        <textarea id="descriptionInput" placeholder="Enter description" required></textarea><br>
        <button onclick="addNewCommunity()">Submit</button>
    `;

    form.innerHTML = formContent;
    communityContainer.appendChild(form);
}

// Fungsi untuk menambahkan komunitas baru ke dalam daftar
function addNewCommunity() {
    const imageInput = document.getElementById("imageInput").value;
    const titleInput = document.getElementById("titleInput").value;
    const descriptionInput = document.getElementById("descriptionInput").value;

    // Validasi input sebelum menambahkannya ke daftar
    if (imageInput && titleInput && descriptionInput) {
        const newCommunity = {
            id: community.length + 1,
            image: imageInput,
            title: titleInput,
            description: descriptionInput,
            category: "CUSTOM", // Atur kategori sesuai kebutuhan
        };

        community.push(newCommunity);

        // Bersihkan formulir setelah menambahkan
        document.getElementById("imageInput").value = "";
        document.getElementById("titleInput").value = "";
        document.getElementById("descriptionInput").value = "";

        // Perbarui tampilan dengan menampilkan komunitas baru
        displayItem(community);
    } else {
        alert("Please fill in all fields.");
    }
}

// ...

// Fungsi untuk menghapus komunitas berdasarkan ID
function deleteCommunity(id) {
    const index = community.findIndex(item => item.id === id);
    if (index !== -1) {
        community.splice(index, 1);
        displayItem(community);
    }
}

// ...



