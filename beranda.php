<?php require_once('html.php');?>
<?php require_once('navbar.php');?>

    <!-- beranda -->
    <main>
        <!-- tentang -->
        <section class="beranda">
            <div class="image">
                <img src="images/beranda.jpg" alt="">
            </div>
            <div class="tentang">
                <h3>Selamat Datang!</h3>
                <p>Be Smart adalah platform kursus online yang memberikan akses mudah ke pembelajaran berkualitas 
                    tinggi dalam berbagai bidang. Dengan kurikulum terstruktur dan dukungan pelanggan yang responsif, 
                    bergabunglah dengan komunitas pembelajaran inklusif kami di Be Smart dan mulailah perjalanan menuju 
                    kesuksesan hari ini!
                </p>
                <a href="registrasi.php" class="btn">Registrasi</a>
            </div>
        </section>
        <!-- kategori -->
        <section class="category">
            <a href="#" class="box">
                <img src="images/kategori1.png" alt="">
                <h3>Teknologi & IT</h3>
            </a>
            <a href="#" class="box">
                <img src="images/kategori2.png" alt="">
                <h3>Kewirausahaan</h3>
            </a>
            <a href="#" class="box">
                <img src="images/kategori3.png" alt="">
                <h3>Komunikasi</h3>
            </a>
        </section>
    </main>

<?php require_once('footer.php');?>