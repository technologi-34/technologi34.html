<?php
// Cek apakah form sudah dikirim
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ambil data dari form
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Alamat email tujuan (email perusahaan)
    $to = "technologi497@gmail.com";  // Ganti dengan email perusahaan

    // Subjek email
    $email_subject = "Pesan Baru dari: $name";

    // Pesan email
    $email_body = "Anda menerima pesan baru dari formulir kontak.\n\n".
                  "Nama: $name\n".
                  "Email: $email\n".
                  "Subjek: $subject\n".
                  "Pesan:\n$message";

    // Header email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Fungsi untuk mengirim email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "<script>alert('Pesan berhasil dikirim!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Maaf, terjadi kesalahan saat mengirim pesan. Coba lagi nanti.'); window.location.href='index.html';</script>";
    }
} else {
    // Jika form tidak dikirim melalui metode POST
    echo "<script>alert('Harap isi formulir dengan benar.'); window.location.href='index.html';</script>";
}
?>
