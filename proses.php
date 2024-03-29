<?php require_once('html.php');?>
<?php require_once('navbar.php');?>

<?php
$name = $email = $gender = $message = "";
$status = $kursus = array();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jenis_kelamin = $_POST["jenis_kelamin"];
    $status = $_POST["status"];
    $kursus = isset($_POST["kursus"]) ? $_POST["kursus"] : array();
}
?>

<main>
    <!-- heading -->
    <section class="heading">
        <h3>Data Registrasi</h3>
        <p> <a href="beranda.php">Beranda >></a><a href="registrasi.php">Registrasi >></a> Data Registrasi </p>
    </section>
    <section class="process-page">
    <div class="overlay">
        <div class="container">
        <h1>Data Registrasi</h1>
        <table>
            <tr>
            <th>Nama</th>
            <th>Email</th>
            <th>Jenis Kelamin</th>
            <th>Status</th>
            <th>Kursus</th>
            </tr>
            <tr>
            <td><?php echo $nama; ?></td>
            <td><?php echo $email; ?></td>
            <td><?php echo $jenis_kelamin; ?></td>
            <td><?php echo $status; ?></td>
            <td><?php echo implode(", ", $kursus); ?></td>
            </tr>
        </table>
        </div>
    </div>
    </section>
</main>

<?php require_once('footer.php');?>