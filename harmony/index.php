<!DOCTYPE html>
<html lang="en">
<head>
<title>Harmony</title>
<link rel="stylesheet" href="style.css">
<link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;500&display=swap"
      rel="stylesheet"
    />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
<?php
include('class/Database.php');
include('class/Song.php');
?>
<!-- Navbar start -->
    <nav class="navbar">
      <a href="index.php" class="navbar-logo">Harmony</a>
      <div class="navbar-nav">
        <a href="index.php?file=song&aksi=tampil">Song</a>
        <a href="#">Artist</a>
        <a href="#">Album</a>
      </div>
<audio src=""></audio>
    </nav>
    <!-- Navbar end -->


<?php
if(isset($_GET['file'])){
include($_GET['file'].'.php');
} else {
echo '    <section class="main">
      <main class="content">
        <h1>Welcome to <span>Harmony</span></h1>
        <p>
          Organize your favorite songs here!
        </p>
      </main>
    </section>';
}
?>

<script>
  function printFunction() {
    window.print();
  }
</script>
</body>
</html>