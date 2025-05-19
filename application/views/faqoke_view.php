<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>FAQ</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/faq.css'); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="page-wrapper">
    <main>
  <div class="accordion">
    <div class="image-box">
        <img src="<?php echo base_url('assets/img/imgfaq.png'); ?>">
    </div>
    <div class="accordion-text">
      <div class="title">FAQs</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">Berapa harga sewa kamar di OMAH KOST?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Harga sewa mulai Rp350.000 per bulan. Ada juga opsi sewa harian.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Apa saja fasilitas yang disediakan?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Fasilitas meliputi kamar mandi dalam, kasur, lemari, meja, kursi, Wi-Fi, dapur bersama, parkiran, jemuran, dan gazebo santai.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Siapa yang dapat menyewa kamar di OMAH KOST?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Mahasiswa dan pekerja yang butuh hunian nyaman di Kediri.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Bolehkah membawa tamu ke kamar?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Boleh membawa tamu, dengan seizin pihak pengelola.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Bagaimana cara booking kamar?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Silakan klik tombol Booking, isi formulir, dan tim kami akan menghubungi Anda.</p>
        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>
    </main>
 
  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>
  
  </div>
</body>
</html>
