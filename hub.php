<?php
session_start();

$host = "localhost";
$user = "root";
$pass = "";
$db = "umrahku";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
    die("Tidak bisa terkoneksi ke database");
}

$sukses = "";
$error = "";

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $subjek = $_POST['subjek'];
    $pesan = $_POST['pesan'];
    

    if ($nama && $email && $nohp && $subjek && $pesan ) {
        $sql1 = "INSERT INTO tbhubungi (nama, email, nohp, subjek, pesan) VALUES ('$nama', '$email', '$nohp', '$subjek', '$pesan')";
        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $_SESSION['sukses'] = "Berhasil memasukkan data baru";
        } else {
            $_SESSION['error'] = "Gagal memasukkan data";
        }
    } else {
        $_SESSION['error'] = "Silakan masukkan semua data";
    }

    header("Location: hub.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UmrahKu</title>
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        body {
            font-family: Arial, sans-serif;
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
        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            margin: 20px auto;
            height: 1209px;
        }
        .containerr {
            background-color: #f1f1f1ee;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 48%;
            margin: 5px auto;
            float: left;
        }
        .containerrr {
            background-color: #f1f1f1ee;
            padding: 20px 40px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 48%;
            margin: -20px auto ;
            float: right;
            height: 528px;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script>
        function toggleMenu() {
            var menu = document.querySelector('.navbar div');
            menu.classList.toggle('active');
        }

        function closeNotification(event) {
            var notification = event.target.parentElement;
            notification.style.display = 'none';
        }
    </script>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="navbar">
        <div class="logo"> <i class="fa-solid fa-kaaba fa-2x"></i> UmrahKu</div>
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

    <h1 style="margin-left:100px;">Hubungi Kami</h1>
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.1251908947906!2d109.66215607403495!3d-6.875600667272826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7025d80e03b5e9%3A0x3be4e1ed9ecee65c!2sSchool%20of%20Management%20Information%20and%20Computer%20Widya%20Pratama%20Pekalongan!5e0!3m2!1sen!2sid!4v1719566381042!5m2!1sen!2sid" width="1115" height="450" style="border:0; margin-top: 20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        <br>
        <h4 >Kantor Pusat</h4>
        <div class="containerr">
        <h6 style="color: green;">PT. Rifqi Jaya Tour</h6>
        <p><i class="fa-solid fa-location-dot"></i> Jl. Patriot No.25, Dukuh, Kec. Pekalongan Utara, Kota Pekalongan, Jawa Tengah 51146</p>
        <p><i class="fa-solid fa-phone"></i> +62 897-9987-778</p>
        <p><i class="fa-solid fa-envelope"></i> umrahku@gmail.com</p>
        <p><i class="fa-solid fa-clock"></i> 07:00-17:00</p> 
        </div>

        <br>
        <h4 style="margin: -60px auto; float: left; margin-left: 40px;"> Hubungi Kami</h4>
        <div class="containerrr">
            <div class="mx-auto">
                    <div class="card-body">
                        <form action="hub.php" method="POST">
                        <div class="form-group">
                                            <label for="username">Nama</label>
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter nama" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">No Hp</label>
                                            <input type="nohp" class="form-control" id="nohp" name="nohp" placeholder="Enter nohp" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Subjek</label>
                                            <select id="subjek" name="subjek" class="form-control" required>
                                                <option >-Pilih subjek-</option>
                                                <option value="pertanya)">Pertanyaan</option>
                                                <option value="keluhan">keluhan</option>
                                                <option value="masukan">Masukan</option>
                                                <option value="lainnya">lainnya</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="text">Pesan</label>
                                            <textarea class="form-control" id="pesan" name="pesan" placeholder="enter pesan"></textarea>
                                        </div>
                                        <br>
                                        <button type="submit" class="btn btn-primary btn-block" name="simpan">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            
        <br>
                <h4 >Kantor Cabang & layanan</h4>
        <div class="containerr">
        <h6 style="color: green;">PT. Rifqi Jaya Tour Durian Runtuh</h6>
        <p><i class="fa-solid fa-location-dot"></i> Jl. Durian Runtuh No.25, Tadika Mesra</p>
        <p><i class="fa-solid fa-phone"></i> +62 111-6789-112</p>
        <p><i class="fa-solid fa-envelope"></i> umrahku@gmail.com</p>
        <p><i class="fa-solid fa-clock"></i> 08:00-17:00</p> 
        </div>
       
        
    <footer style="text-align: center; margin: 40px auto;">
            <hr style="width: 100%; margin-top: 230px ;">
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


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>
