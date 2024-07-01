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
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $umur = $_POST['umur'];
    $paket = $_POST['paket'];
    $tanggal_keberangkatan = $_POST['tanggal_keberangkatan'];

    if ($nama && $alamat && $no_hp && $umur && $paket && $tanggal_keberangkatan) {
        $sql1 = "INSERT INTO tborder (nama, alamat, no_hp, umur, paket, tanggal_keberangkatan) VALUES ('$nama', '$alamat', '$no_hp', '$umur', '$paket', '$tanggal_keberangkatan')";
        $q1 = mysqli_query($koneksi, $sql1);
        if ($q1) {
            $_SESSION['sukses'] = "Berhasil memasukkan data baru";
        } else {
            $_SESSION['error'] = "Gagal memasukkan data";
        }
    } else {
        $_SESSION['error'] = "Silakan masukkan semua data";
    }

    header("Location: order.php");
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #f8f8f8;
            padding: 10px 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
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

        .container {
            background-color: #fff;
            padding: 20px 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 200%;
            margin: 20px auto;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #333;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .notification {
            margin-bottom: 20px;
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            position: relative;
        }

        .notification.success {
            background-color: #4CAF50;
        }

        .notification.error {
            background-color: #f44336;
        }

        .notification .close-btn {
            position: absolute;
            top: 5px;
            left: 540px;
            background: none;
            border: none;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }

        .card-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .card {
            width: 18rem;
            margin: 1rem;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: scale(1.05);
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
        <div class="logo"><i class="fa-solid fa-kaaba fa-2x"></i> UmrahKu</div>
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

    <h1 style="margin-left:100px;">Transaksi Pembelian Paket Umrah</h1>
    <div class="container">
    <div class="card-container">
        <div class="card">
            <img src="img/reguler.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-success" >Umrah Reguler(best seller)</h5>
                <hr>
                <p>Sisa kursi:</p>
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 20%">20</div>
                </div>
            </div>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-hotel"></i> Elaf Al Bait (Makkah)</li>
                <li class="list-group-item"><i class="fa-solid fa-hotel"></i> Dar Al Naeem (Madinah)</li>
                <li class="list-group-item"><i class="fa-solid fa-plane"></i> Batik Air</li>
                <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> Soekarno-Hatta International Airport (CGK)
                </li>
            </ul>
            <div class="card-body">
            <button  onclick="location.href='#order'" type="submit" class="btn btn-primary btn-block" name="simpan" >Order Sekarang</button>
            </div>
        </div>

        <div class="card">
            <img src="img/plus.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-success" >Umrah Plus</h5>
                <hr>
                <p>Sisa kursi:</p>
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 36%">36</div>
                </div>
            </div>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-hotel"></i> Snood Ajyad Hotel / Setaraf (Makkah)</li>
                <li class="list-group-item"><i class="fa-solid fa-hotel"></i> Dar Al Naeem Hotel (Madinah)</li>
                <li class="list-group-item"><i class="fa-solid fa-plane"></i> Batik Air</li>
                <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> Soekarno-Hatta International Airport (CGK)
                </li>
            </ul>
            <div class="card-body">
            <button  onclick="location.href='#order'" type="submit" class="btn btn-primary btn-block" name="simpan" >Order Sekarang</button>          
         </div>
        </div>

        <div class="card">
            <img src="img/vip.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title text-success" >Umrah VIP</h5>
                <hr>
                <p>Sisa kursi:</p>
                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                <div class="progress-bar" style="width: 67%">67</div>
                </div>
            </div>
            
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><i class="fa-solid fa-hotel"></i> AMJAD MUHAJIRIN / SETARAF (Makkah)</li>
                <li class="list-group-item"><i class="fa-solid fa-hotel"></i> AL MASSYA BUSTON / SETARAF (Madinah)</li>
                <li class="list-group-item"><i class="fa-solid fa-plane"></i> Batik Air</li>
                <li class="list-group-item"><i class="fa-solid fa-location-dot"></i> Soekarno-Hatta International Airport (CGK)
                </li>
            </ul>
            <div class="card-body">
            <button  onclick="location.href='#order'" type="submit" class="btn btn-primary btn-block" name="simpan" >Order Sekarang</button>
            </div>
        </div>
    </div>
    <div class="container">
        <h2 style="text-align:center; margin-bottom: 20px;">Form Pendaftaran Paket Umrah</h2>
        <?php if (isset($_SESSION['sukses'])): ?>
            <div class="notification success">
                <?php echo $_SESSION['sukses']; ?>
                <button class="close-btn" onclick="closeNotification(event)">&times;</button>
            </div>
            <?php unset($_SESSION['sukses']); ?>
        <?php endif; ?>
        <?php if (isset($_SESSION['error'])): ?>
            <div class="notification error">
                <?php echo $_SESSION['error']; ?>
                <button class="close-btn" onclick="closeNotification(event)">&times;</button>
            </div>
            <?php unset($_SESSION['error']); ?>
        <?php endif; ?>
        <form action="order.php" method="post" id="order">
            <label for="name">Nama:</label>
            <input type="text" id="name" name="nama" required>

            <label for="address">Alamat:</label>
            <input type="text" id="address" name="alamat" required>

            <label for="phone">No HP:</label>
            <input type="tel" id="phone" name="no_hp" required>

            <label for="age">Umur:</label>
            <input type="number" id="age" name="umur" required>
            

            <label for="package">Jenis Paket:</label>
            <select id="package" name="paket" required>
                <option >-pilih paket-</option>
                <option value="umrah reguler (Rp. 19.00.000)">Umrah Reguler (Rp. 19.00.000)</option>
                <option value="umrah plus (Rp. 29.000.000)">Umrah Plus (Rp. 29.000.000)</option>
                <option value="umrah vip (Rp. 35.000.000)">Umrah VIP (Rp. 35.000.000)</option>
            </select>

            <label for="departure_date">Tanggal Keberangkatan:</label>
            <select id="tanggal_keberangkatan" name="tanggal_keberangkatan"  required>
                <option >-Pilih Keberangkatan-</option>
                <option value="Juli 2024)">Juli 2024</option>
                <option value="Agustus 2024">Agustus 2024</option>
                <option value="November 2024">November 2024</option>
                <option value="Desember 2024">Desember 2024</option>
            </select>
            <br>
            <button type="submit" name="simpan">Submit</button>
        </form>
    </div>
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
        </div>

        </footer>
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
</body>
</html>
