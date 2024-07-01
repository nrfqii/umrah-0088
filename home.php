<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UmrohKu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <style>
      transition: transform 0.3s ease-in-out;
      transform: scale(0.90);
       body {
            font-family: Arial, sans-serif;
        }
      .bg{
        background-image: url(img/umrah.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        height: 100vh;
        width: 100vw;
      }
      .container{
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 248%;
            margin: 20px auto;
        }
        .containerr {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 84%;
            margin: 20px auto;
            height: 800px;
        }

      .blink {
            animation: blink-animation 2s steps(5, start) infinite;
            -webkit-animation: blink-animation 2s steps(5, start) infinite;
        }
        
        @keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }
        
        @-webkit-keyframes blink-animation {
            to {
                visibility: hidden;
            }
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            flex-wrap: wrap;
        }

        .navbar a {
            text-decoration: none;
            color: black;
            margin: 0 10px;
            padding: 8px 15px;
            border-radius: 4px;
        }

        .navbar a:hover {
            background-color: #e2e2e2;
        }

        .navbar a:active {
            background-color: #cccccc;
        }

        .navbar .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .navbar .menu-toggle {
            display: none;
            flex-direction: column;
            cursor: pointer;
        }

        .navbar .menu-toggle span {
            width: 25px;
            height: 3px;
            background-color: black;
            margin: 4px 0;
        }
      
  

        @media (max-width: 768px) {
            .navbar div {
                display: none;
                width: 100%;
                flex-direction: column;
            }

            .navbar .menu-toggle {
                display: flex;
            }

            .navbar .menu-toggle.active + div {
                display: flex;
            }

            .navbar a {
                text-align: center;
                padding: 10px;
                width: 100%;
                box-sizing: border-box;
                margin: 0;
            }

            
        }

      }
      /* slide show */
      * {box-sizing: border-box;}
body {font-family: Arial, sans-serif; margin: 0; padding: 0;}

.slideshow-container {
    position: relative;
    width: 100%;
    height: 100vh; 
    margin: auto;
    overflow: hidden;
}

.mySlides {
    display: none;
    width: 100%;
    height: 100%;
}

.mySlides img {
    width: 100%;
    height: auto;
    display: block;
    margin: auto;
}

.fade {
    animation-name: fade;
    animation-duration: 1.5s;
    animation-fill-mode: forwards;
}

@keyframes fade {
    from {opacity: .4} 
    to {opacity: 1}
}

.prev, .next {
    cursor: pointer;
    position: absolute;
    top: 50%;
    width: auto;
    padding: 16px;
    margin-top: -22px;
    color: white;
    font-weight: bold;
    font-size: 18px;
    transition: 0.6s ease;
    border-radius: 0 3px 3px 0;
    user-select: none;
}

.next {
    right: 0;
    border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
    background-color: rgba(0,0,0,0.8);
}

.dot {
    cursor: pointer;
    height: 15px;
    width: 15px;
    margin: 0 2px;
    background-color: #bbb;
    border-radius: 50%;
    display: inline-block;
    transition: background-color 0.6s ease;
}

.active, .dot:hover {
    background-color: #717171;
}
        .boxmodel {
            background-color: #f1f1f1ee;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 48%;
            margin: 5px auto;
            float: left;
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
            border-radius:10px;
        }
        .boxmodel:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .textbox {
            background-color: #f1f1f1ee;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 48%;
            margin: 7px auto ;
            float: right;
            height: 528px;
            transition: transform 0.5s ease-in-out, box-shadow 0.5s ease-in-out;
            border-radius:10px;
            
        }
         .textbox:hover{
          transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
         }
        
         .footer {
            background-color: #000;
            color: #fff;
            display: flex;
            justify-content: space-around;
            padding: 20px;
            flex-wrap: wrap;
        }
        .footer-column {
            max-width: 300px;
            margin: 20px;
        }
        .footer-column h3 {
            margin-bottom: 10px;
            font-size: 20px;
        }
        .footer-column p, .footer-column a {
            margin: 5px 0;
            color: #fff;
            text-decoration: none;
        }
        .footer-column a:hover {
            color: #ffa500;
        }
        .footer img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
        }
        .copyright {
            text-align: center;
            padding: 10px;
            background-color: #111;
        }
    </style>
</head>
<body>
<div class="navbar">
        <div class="logo"><i class="fa-solid fa-kaaba fa-2x"></i><span class="blink">UmrohKu</span></div>
        <div class="menu-toggle" onclick="toggleMenu()">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div>
            <a href="home.php">Beranda</a>
            <a href="about.html">About</a>
            <a href="visa.html">Visa Umroh</a>
            <a href="hub.php">Hubungi Kami</a>
            <a href="order.php">Order</a>
        </div>
    </div>
    <div class="slideshow-container">
        <div class="mySlides fade">
            <img src="img/umrah.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="img/reguler.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="img/plus.png" style="width:100%">
        </div>
        <div class="mySlides fade">
            <img src="img/vip.png" style="width:100%">
        </div>
        
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        
    </div>

    <div class="containerr">
        <br>
        <br>
        <div class="boxmodel" >
        <i class="fa-solid fa-thumbs-up fa-3x"></i>
        <p><h3>Daftar Mudah & Cepat</h3>
        Dengan 3 langkah mudah, kurang dari 5 menit sudah dapat mendaftarkan diri Anda.</p>
        </div>

        
        <div class="textbox">
            <p style="color:green;">Tentang Kami</p>
            <h2><strong>Mengenal Lebih Jauh pada PT. Rifqi Jaya Tour</strong></h2>
           <p><strong>PT. Rifqi Jaya Tour</strong> adalah perusahaan terkemuka di bidang tour dan perjalanan umroh, berkomitmen memberikan pelayanan terbaik untuk para jamaah. Kami menawarkan berbagai paket umrah dan haji yang dirancang khusus untuk memenuhi kebutuhan spiritual Anda, dengan fokus pada kenyamanan dan kepuasan.</p>

          <p>Dengan pengalaman yang luas dan tim profesional yang berdedikasi, kami siap mendampingi Anda dalam perjalanan ibadah ke tanah suci. Setiap momen akan kami pastikan menjadi berkesan dan bermakna, menjadikan perjalanan spiritual Anda sebagai pengalaman yang tak terlupakan. Percayakan perjalanan ibadah Anda kepada kami, dan rasakan perbedaan pelayanan yang kami berikan.</p>


          </div>

        <div class="boxmodel" >
        <i class="fa-solid fa-check fa-3x"></i>
        <p><h3>Harga Terbaik</h3>
        Dapatkan berbagai pilihan paket Umrah & Haji dengan harga terbaik.</p> 
        </div>
        <div class="boxmodel" >
        <i class="fa-solid fa-certificate fa-3x "></i>
        <p><h3>Pelayanan Maksimal</h3>
        Kami akan memberikan pelayanan terbaik bagi para jemaah.</p> 
        </div>
        

    </div>
  </div>
</div>
 <h1 style="margin-left: 100px; " >Mengenal Lebih Jauh Paket Umrah: Jenis, Fasilitas, dan Harga</h1>
  <div  class="container">
    <p style="padding: 5px;"><i>Kategori : Umrah, Ditulis pada : 26 Juni 2024, 13:36</i></p>

  <p style="padding: 5px;"><strong>Mengenal Lebih Jauh Paket Umrah: Jenis, Fasilitas, dan Harga- </strong>Ibadah umrah adalah salah satu kegiatan religius yang paling diidamkan oleh umat Islam. Maka tak heran jika setiap tahunnya banyak orang yang berangkat ke Tanah Suci untuk melaksanakan ibadah umrah. Namun, bagi sebagian orang, merencanakan dan menyiapkan perjalanan umrah bisa menjadi tantangan tersendiri, terutama jika tidak terbiasa dengan kondisi dan lingkungan di Tanah Suci. Itulah mengapa, banyak agen travel yang menawarkan paket umrah untuk mempermudah orang-orang dalam merencanakan perjalanan ibadah mereka.</p>
  <br>
  <p style="padding: 5px;">Artikel ini akan membahas secara lebih mendalam mengenai paket umrah, termasuk jenis-jenisnya, fasilitas yang disediakan, dan harga yang ditawarkan oleh agen travel. Dengan memahami informasi ini, Anda bisa lebih mudah dalam memilih paket umrah yang sesuai dengan kebutuhan dan anggaran Anda. Jadi, mari kita simak informasi lebih lanjut tentang paket umrah.</p>

  <h3 style="padding: 5px;">MANFAAT MENGGUNAKAN PAKET UMRAH</h3>
  <p style="padding: 5px;">Menggunakan paket umrah memiliki beberapa manfaat yang bisa sangat membantu bagi jamaah. Berikut adalah beberapa contohnya:</p>
  <ol>
    <li><strong>Kemudahan Visa:</strong>
      <p>Penyedia paket umrah akan mengurus semua persiapan, mulai dari visa, tiket pesawat, hingga akomodasi. Ini mengurangi beban administratif bagi jamaah.
      </p>
    </li>
    <li><strong>Pendampingan dari Mulai Berangkat hingga Pulang:</strong>
      <p>
        Dari bandara keberangkatan hingga kembali ke tanah air, ada petugas yang akan mendampingi Anda, membantu jika ada masalah atau kebutuhan mendesak.
      </p>
    </li>
    <li><strong>Akomodasi Nyaman:</strong>
      <p>
        Anda akan menginap di hotel yang telah dipilih berdasarkan kenyamanan dan dekat dengan tempat ibadah, sehingga memudahkan akses ke Masjidil Haram dan Masjid Nabawi.
        Makanan Halal:
      </p>
    </li>
    <li><strong>Makanan Halal:</strong>
      <p>
        Paket umrah sering kali mencakup makanan halal yang telah dipersiapkan sesuai dengan selera dan kebutuhan jamaah dari negara asal.
      </p>
    </li>
    <li><strong>Transportasi Terorganisir:</strong>
      <p>
        Semua transportasi, baik dari bandara ke hotel maupun dari hotel ke tempat ibadah, diatur dengan baik sehingga Anda tidak perlu khawatir tentang mencari transportasi sendiri.
      </p>
    </li>
    <li><strong>Jadwal Ibadah dan Ziarah Terstruktur:</strong>
      <p >
        Jadwal yang disusun oleh biro perjalanan memastikan Anda dapat memaksimalkan waktu untuk beribadah dan mengunjungi tempat-tempat bersejarah penting.
        Menggunakan paket umrah dapat membuat perjalanan ibadah Anda menjadi lebih fokus, nyaman, dan teratur, sehingga Anda dapat menjalankan ibadah dengan tenang dan khusyuk.
      </p>
    </li>
  </ol>
    <br>
    <h3 style="padding: 5px;">Jenis-jenis Paket</h3>
    <p style="padding: 5px;">Paket umrah dapat dibagi menjadi beberapa jenis, seperti paket umrah plus, paket umrah ekonomis, paket umrah keluarga.</p>
    <ol>
         <li><strong>Paket Umrah Reguler:</strong>
        <ul>
          <li><strong>Deskripsi:</strong> Paket umrah reguler adalah paket yang ditujukan untuk jamaah dengan anggaran lebih terbatas. Paket ini menawarkan pengalaman umrah yang memenuhi standar tetapi dengan biaya yang lebih ekonomis.
          </li>
      
          <li><strong> Akomodasi:</strong> Hotel bintang 3 atau 4, biasanya berjarak beberapa ratus meter dari Masjidil Haram dan Masjid Nabawi.
          </li>

          <li><strong>Transportasi:</strong> Bus AC untuk transportasi selama di Mekkah, Madinah, dan perjalanan ke Jeddah.
          </li>
        </ul>

      <li><strong>Paket Umrah Plus:</strong>
        <ul>
          <li>
            <strong>Deskripsi:</strong> Paket umrah plus adalah paket umrah yang selain mencakup ibadah umrah, juga menawarkan kunjungan ke destinasi wisata di negara-negara lain. Paket ini memberikan kesempatan kepada jamaah untuk menjelajahi tempat-tempat bersejarah, wisata religi, atau destinasi wisata populer lainnya.
          </li>
          <li>
            <strong>Akomodasi:</strong> Hotel bintang 4 atau 5, berlokasi dekat dengan Masjidil Haram dan Masjid Nabawi.
          </li>
          <li>
            <strong>Transportasi:</strong> Bus AC atau transportasi pribadi selama di Mekkah, Madinah, dan destinasi tambahan.
          </li>

        </ul>
      </li>
      

      </li>
      <li><strong>Paket Umrah VIP:</strong>
        <ul>
          <li><strong>Deskripsi:</strong>Paket umrah VIP dirancang untuk jamaah yang menginginkan layanan lebih eksklusif dan nyaman. Paket ini menawarkan fasilitas premium dan pelayanan yang lebih personal.

            </li>
          <li><strong>Akomodasi:</strong>Hotel bintang 3 atau 4, biasanya berjarak beberapa ratus meter dari Masjidil Haram dan Masjid Nabawi.
          </li>
          <li>
            <strong>Transportasi:</strong> Bus AC untuk transportasi selama di Mekkah, Madinah, dan perjalanan ke Jeddah.
          </li>
        </ul>
    </ol>
    <footer style="text-align: center; margin-top: 20px;">
        <hr style="width: 90%; margin: 20px auto;">
        <div>
            <i class="fa-brands fa-instagram fa-2x"></i>
            <i class="fa-brands fa-whatsapp fa-2x"></i>
            <i class="fa-brands fa-x-twitter fa-2x"></i>
            <i class="fa-brands fa-facebook fa-2x"></i>
            <i class="fa-brands fa-linkedin fa-2x"></i>
            <i class="fa-solid fa-envelope fa-2x"></i>
        </div>
    </footer>
</div>
<footer class="footer">
        <div class="footer-column">
            <h3>PT. Rifqi Jaya Tour</h3>
            <p>Jl. durian runtuh</p>
            <p>Nomor Telepon: <a href="tel:+6275122272">+62 123 456 789</a></p>
            <p>Email: <a href="mailto:info@rifqijayatour.com">umrahku@gmail.com</a></p>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1251908947906!2d109.66215607403495!3d-6.875600667272826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7025d80e03b5e9%3A0x3be4e1ed9ecee65c!2sSchool%20of%20Management%20Information%20and%20Computer%20Widya%20Pratama%20Pekalongan!5e0!3m2!1sen!2sid!4v1719566381042!5m2!1sen!2sid" width="300" height="300" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="footer-column">
            <h3>Informasi</h3>
            <p><a href="#">Metode Pembayaran</a></p>
            <p><a href="#">Syarat Ketentuan</a></p>
            <p><a href="#">Kebijakan Privasi</a></p>
            <p><a href="#">Blog</a></p>
        </div>
        <div class="footer-column">
            <h3>Layanan</h3>
            <p><a href="#">Layanan Paket Umrah</a></p>
            <p><a href="#">Layanan Paket Haji</a></p>
            <p><a href="#">Layanan Paket Wisata</a></p>
            <p><a href="#">Layanan Paket LA</a></p>
        </div>
        <div class="footer-column">
            <h3>Jam Operasional</h3>
            <p>Senin - Jumat, 07:00 - 17:00</p>
            <p>Telepon: <a href="#">+62 123 456 789</a></p>
            <p>Email: <a href="#">umrahku@gmail.com</a></p>
            <img src="img/kabah.jpg" >
        </div>
    </footer>

    <div class="copyright">
        <p>Copyright &copy; 2023 - rifqijayatour.co.id</p>
    </div>

<script>
        function toggleMenu() {
            var menu = document.querySelector('.navbar div:not(.menu-toggle)');
            var toggle = document.querySelector('.menu-toggle');
            menu.classList.toggle('active');
            toggle.classList.toggle('active');
        }

        let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) {slideIndex = 1}    
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
}
    </script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>