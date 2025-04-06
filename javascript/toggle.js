// Kelas Menu untuk mengelola tampilan menu
class Menu {
    constructor(navbarSelector, closeButtonSelector) {
        this.navbar = document.querySelector(navbarSelector);
        this.closeButton = document.querySelector(closeButtonSelector);
    }

    // Fungsi untuk toggle menu
    toggle() {
        this.navbar.classList.toggle('show');
        this.closeButton.classList.toggle('show');
    }

    // Fungsi untuk menutup menu
    close() {
        this.navbar.classList.remove('show');
        this.closeButton.classList.remove('show');
    }
}

// Kelas turunan NavbarMenu yang menambahkan fitur close ketika klik di luar menu
class NavbarMenu extends Menu {
    constructor(navbarSelector, closeButtonSelector, toggleButtonSelector) {
        super(navbarSelector, closeButtonSelector);
        this.toggleButton = document.querySelector(toggleButtonSelector);
        
        // Menambahkan event listener untuk toggle button
        this.toggleButton.addEventListener('click', () => this.toggle());
        
        // Menambahkan event listener untuk close menu ketika klik di luar menu
        document.addEventListener('click', (event) => this.handleClickOutside(event));
    }

    // Menangani klik di luar menu untuk menutup menu
    handleClickOutside(event) {
        if (event.target !== this.navbar && event.target !== this.toggleButton && !this.navbar.contains(event.target)) {
            this.close(); // Memanggil fungsi close dari kelas Menu
        }
    }
}

// Kelas untuk aktifkan menu sesuai dengan halaman yang sedang aktif
class ActiveMenu {
    constructor() {
        this.setActiveMenu();
    }

    // Menentukan menu yang aktif berdasarkan halaman yang sedang dibuka
    setActiveMenu() {
        document.addEventListener('DOMContentLoaded', () => {
            var currentPage = window.location.pathname.split('/').pop();
            currentPage = currentPage.replace('.php', '');

            var activeNavItem = document.getElementById(currentPage);
            if (activeNavItem) {
                activeNavItem.classList.add('active');
            }
        });
    }
}


const navbarMenu = new NavbarMenu('.n-bar', '.close-menu', '.mobile-toggle');
const activeMenu = new ActiveMenu();