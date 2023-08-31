<?php 
require("../PHP/require.php");
require("../PHP/contact.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="shortcut icon" href="../MEDIA/favicon2.png" type="image/x-icon" />
    <link rel="stylesheet" href="../CSS/contact.css">
    <script src="../JS/app.js" defer></script>
  </head>
  <header>
    <nav class="navbar">
        <ul>
          <li class="nav-li"><a href="../index.php" class="nav-a">Home</a></li>
          <li class="nav-li"><a href="../PAGES/projecten.php" class="nav-a">Projecten</a></li>
          <li class="nav-li"><a href="../PAGES/overmij.php" class="nav-a">Overmij</a></li>
          <li class="nav-li active"><a href="#" class="nav-a">Contact</a></li>
          <li>
              <?php if ($_SESSION['loggedin'] == true) { ?>
                <a class="nav-a" href="admin.php">Admin</a>
                <?php } else { ?>
                  <a class="nav-a" href="./PAGES/login.php">Login</a>
                  <?php } ?>
            </li>
        </ul>
    </nav>
  </header>
    <main>    
      <div class="main-grid">
      <div class="text-content">
        <h1>Contact</h1>
        <p>Heb je vragen of wil je contact met mij opnemen kan je dat hier doen!</p>
        <hr class="style-five">
        <h1 style="font-size: 24px;">Email | Telefoonnummer</h1>
        <p><strong>ytspace1@gmail.com | +31 6 15506171</strong></p>
      </div>
      <Section class="bericht">
      <div class="card">
        <span class="title">Laat een bericht achter</span>
        <form class="form" method="POST">
          <div class="group">
          <input placeholder="‎" type="text" required="" name="naam">
          <label for="name">* Naam</label>
          </div>
      <div class="group">
          <input placeholder="‎" type="email" id="email" name="email" required="">
          <label for="email">* Email</label>
          </div>
          <div class="group">
            <input placeholder="‎" type="tel" id="Telefoonnummer" name="telefoonnummer">
            <label for="email">Telefoonnummer</label>
            </div>
            <div class="group">
              <input placeholder="‎" type="text" id="Bedrijfsnaam" name="bedrijfsnaam">
              <label for="email">Bedrijfsnaam</label>
              </div>
      <div class="group">
          <textarea placeholder="‎" id="comment" name="bericht" rows="5" required=""></textarea>
          <label for="comment">* Bericht</label>
      </div>
          <button type=submit" name="submit">Verstuur</button>

        </form>
      </div>
    </Section>
    </main>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
      <img src="../MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
  </a>
  </body>
</html>
