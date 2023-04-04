<?php

session_start();

// mengecek apakah user sudah login atau belum
if (!isset($_SESSION["login"]) == true) {
  header("location:login.php");
  exit;
}

// MENGAMBIL DAN MEMPROSES FILE DI BAGIAN ATAS
require_once "top.php";
// MEMANGGIL DAN MEMPROSES FILE DI BAGIAN TENGAH
require_once "menu.php";


?>

<div id="layoutSidenav_content">
  <main>
    <div class="container-fluid px-4">
      <h1>Selamat Datang Web Admin</h1>
      <?php
      // algoritma menangkap url agar masuk kedalam index
      if (isset($_GET['url'])) {
        $url = $_GET['url'];
          if ($url == 'dashboard') {
            require_once "dashboard.php";
          } else if (!empty($url)) {
            require_once  $url . ".php";
          } else {
            "dashboard.php";
          }
      }
      ?>
    </div>
  </main>

</div>

<?php
// MEMANGGIL FILE DIBAGIAN BAWAH
require_once "bottom.php";

?>