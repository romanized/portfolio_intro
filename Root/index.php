<?php
require("./PHP/require.php");

if (!isset($_SESSION['loggedin'])) {
  $_SESSION['loggedin'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
    <link rel="stylesheet" href="./CSS/background5.css" />
    <link rel="stylesheet" href="./CSS/style.css" />
    <link rel="shortcut icon" href="../Root/MEDIA/favicon2.png" type="image/x-icon" />
    <script src="./JS/app.js" defer></script>
  </head>
  <header>
    <nav class="navbar">
        <ul>
            <li class="nav-li active"><a href="#" class="nav-a">Home</a></li>
            <li class="nav-li"><a href="../Root/PAGES/projecten.php" class="nav-a">Projecten</a></li>
            <li class="nav-li"><a href="../Root/PAGES/overmij.php" class="nav-a">Overmij</a></li>
            <li class="nav-li"><a href="../Root/PAGES/contact.php" class="nav-a">Contact</a></li>
            <li>
              <?php if ($_SESSION['loggedin'] == true) { ?>
                <a class="nav-a" href="./PAGES/admin.php">Admin</a>
                <?php } else { ?>
                  <a class="nav-a" href="./PAGES/login.php">Login</a>
                  <?php } ?>
            </li>
        </ul>
    </nav>
  </header>
    <main id="swup" class="transition-fade">
      <section class="intro-section">
        <a target="_blank" href="https://github.com/romanized"</a><img
          src="./MEDIA/me.jpg"
          alt="Nebi"
          class="profile-picture image1"
          width="300px"
        /></a>
        <h1 class="intro-title">
          Welkom op mijn pagina
        </h1>
        <p class="intro-text">
        Mijn naam is Nebi Canlioglu. Kijk gerust rond in mijn website. <br> <br>
          Op mijn pagina kan je <a class="links" href="./PAGES/contact.php">contact</a> met mij opnemen, mijn <a class="links" href="./PAGES/projecten.php">projecten</a> bekijken en meer informatie <a class="links" href="./PAGES/overmij.php">overmij</a> vinden.
        </p>
      </section>
    </main>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
      <img src="../Root/MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
    </a> 
    <div>
  </div>
  </body>
</html>
