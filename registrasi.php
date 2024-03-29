<?php require_once('html.php');?>
<?php require_once('navbar.php');?>
<br>

    <!-- registrasi -->
    <main>
        <!-- heading -->
        <section class="heading">
            <h3>Registrasi</h3>
            <p> <a href="beranda.php">Beranda >></a> Registrasi </p>
        </section>
        <section class="regis">
            <h1>Registrasi Pengguna</h1>
            <form action="proses.php" method="POST">
                <div class="form-regis">
                    <label for="nama">Nama:</label><br>
                    <input type="text" id="nama" name="nama" maxlength="50" placeholder="Masukkan nama Anda" required maxlength="100"><br><br>
                </div>
                <div class="form-regis">
                    <label for="email">Email:</label><br>
                    <input type="email" id="email" name="email" maxlength="100" placeholder="Masukkan email Anda" required><br><br>
                </div>
                <div class="form-regis">
                    <label for="jenis_kelamin">Jenis Kelamin:</label><br>
                    <select id="jenis_kelamin" name="jenis_kelamin" required>
                        <option value="">Pilih jenis kelamin</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select><br><br>
                </div> 
                <div class="form-regis">
                    <label>Status:</label><br>
                    <div class="status">
                        <input type="radio" id="status1" name="status" value="Pelajar" required>
                        <label for="status1">Pelajar</label><br>
                        <input type="radio" id="status2" name="status" value="Mahasiswa">
                        <label for="status2">Mahasiswa</label><br>
                        <input type="radio" id="status3" name="status" value="Pekerja">
                        <label for="status3">Pekerja</label><br><br>
                    </div>
                </div>
                <div class="form-regis">
                    <label>Pilihan Kursus</label><br>
                    <div class="kursus">
                        <input type="checkbox" id="kursus1" name="kursus[]" value="Pengantar Pemrograman Python">
                        <label for="kursus1">Pengantar Pemrograman Python</label><br>
                        <input type="checkbox" id="kursus2" name="kursus[]" value="Pengembangan Aplikasi Web">
                        <label for="kursus2">Pengembangan Aplikasi Web</label><br>
                        <input type="checkbox" id="kursus3" name="kursus[]" value="Analisis Data Python">
                        <label for="kursus3">Analisis Data Python</label><br>
                        <input type="checkbox" id="kursus4" name="kursus[]" value="Pengembangan Rencana Bisnis">
                        <label for="kursus4">Pengembangan Rencana Bisnis</label><br>
                        <input type="checkbox" id="kursus5" name="kursus[]" value="Strategi Pemasaran Digital">
                        <label for="kursus5">Strategi Pemasaran Digital</label><br>
                        <input type="checkbox" id="kursus6" name="kursus[]" value="Manajemen Keuangan">
                        <label for="kursus6">Manajemen Keuangan</label><br>
                        <input type="checkbox" id="kursus7" name="kursus[]" value="Keterampilan Presentasi">
                        <label for="kursus7">Keterampilan Presentasi</label><br>
                        <input type="checkbox" id="kursus8" name="kursus[]" value="Keterampilan Komunikasi Antarpersonal">
                        <label for="kursus8">Keterampilan Komunikasi Antarpersonal</label><br>
                        <input type="checkbox" id="kursus9" name="kursus[]" value="Strategi Komunikasi Pemasaran">
                        <label for="kursus9">Strategi Komunikasi Pemasaran</label><br><br>
                    </div>
                    
                </div>
                <button type="submit">Submit</button>
            </form>
            <br>
        </section>
    </main>

<br>
<?php require_once('footer.php');?>