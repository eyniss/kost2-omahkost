<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Pendaftaran</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/form_pendaftaran.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/konfirmasi_view.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
   
</head>
<body>

<div class="container">
    <div class="success-icon">
        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
            <polyline points="22 4 12 14.01 9 11.01"></polyline>
        </svg>
    </div>
    
    <h1>Pendaftaran Berhasil!</h1>
    
    <p>Terima kasih telah mendaftar kos kami. Untuk menyelesaikan pendaftaran, harap lanjutkan konfirmasi melalui WhatsApp:</p>
    
    <div>
        <a href="<?php echo $whatsapp_link; ?>" class="whatsapp-button">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 10px;">
                <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
            Konfirmasi via WhatsApp
        </a>
    </div>
    
    <div class="contact-info">
        Jika tombol di atas tidak bekerja, Anda bisa menghubungi nomor berikut secara manual:<br>
        <strong>0812-2326-0616</strong>
    </div>
</div>

</body>
</html>