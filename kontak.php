<?php require_once('html.php');?>
<?php require_once('navbar.php');?>

    <!-- kontak -->
    <main>
        <!-- heading -->
        <section class="heading">
            <h3>Kontak</h3>
            <p> <a href="beranda.php">Beranda >></a> Kontak </p>
        </section>
        <!-- kontak -->
        <section class="contact">
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-phone"></i>
                    <h3>Nomor Kontak</h3>
                    <p>(0541)-7777409</p>
                </div>
                <div class="icons">
                    <i class="fas fa-envelope"></i>
                    <h3>Email</h3>
                    <p>besmartcourse@gmail.com</p>
                </div>
            </div>
            <div class="row">
                <form action="https://api.web3forms.com/submit" method="POST" class="contact__form">
                    <h3>get in touch</h3>
                    <input type="hidden" name="access_key" value="cd92c971-3aad-49b4-b03d-de238c873a68">
                    <input type="text" name="nama" placeholder="Masukkan nama" class="box">
                    <input type="number" name="nomor" placeholder="Masukkan nomor" class="box">
                    <input type="email" name="email" placeholder="Masukkan email" class="box">
                    <textarea name="" name="pesan" placeholder="Masukkan pesan" id="" cols="30" rows="10"></textarea>
                    <input type="submit" name="tombol" value="send message" class="btn">
                </form>
            </div>
        </section>
    </main>

<?php require_once('footer.php');?>