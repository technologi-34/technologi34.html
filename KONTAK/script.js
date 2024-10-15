document.getElementById("contactForm").addEventListener("submit", function(event) {
    const name = document.getElementById("name").value.trim();
    const email = document.getElementById("email").value.trim();
    const subject = document.getElementById("subject").value.trim();
    const message = document.getElementById("message").value.trim();
    const errorElement = document.getElementById("error");

    errorElement.textContent = "";

    if (!name || !email || !subject || !message) {
        event.preventDefault();  // Mencegah formulir terkirim
        errorElement.textContent = "Semua kolom wajib diisi.";
        return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
        event.preventDefault();
        errorElement.textContent = "Alamat email tidak valid.";
    }
});
