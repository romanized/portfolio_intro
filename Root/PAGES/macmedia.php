<?php 
require("../PHP/require.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/background5.css" />
    <link rel="stylesheet" href="../CSS/macmedia.css" />
    <link rel="shortcut icon" href="../MEDIA/favicon2.png" type="image/x-icon" />
    <script src="../JS/app.js" defer></script>
  </head>
  <header>
    <nav class="navbar">
        <ul>
          <li class="nav-li"><a href="../index.php" class="nav-a">Home</a></li>
          <li class="nav-li"><a href="../PAGES/projecten.php" class="nav-a">Projecten</a></li>
          <li class="nav-li"><a href="../PAGES/overmij.php" class="nav-a">Overmij</a></li>
          <li class="nav-li"><a href="../PAGES/contact.php" class="nav-a">Contact</a></li>
          <li class="nav-li">
              <?php if ($_SESSION['loggedin'] == true) { ?>
                <a class="nav-a" href="admin.php">Admin</a>
                <?php } else { ?>
                  <a class="nav-a" href="../PAGES/login.php">Login</a>
                  <?php } ?>
            </li>
        </ul>
        <br>
    </nav>
<main>
    <section class="project-section">
        <div class="container">
            <h1>Over MacMedia</h1>
            <p class="project-description">
                Voor dit voorbeeld om het project te testen moeten alle 3 de paginas open staan zodat het effect en de samenwerking te zien is. Voor de pagina van de kassa kan de medewerker/klant zijn bestelling maken. De prijzen los en intotaal staan er bij + je kan producten ook verwijderen. Na het klikken van de 'checkout' knop komt de bestelling bij de medewerker die de bestelling ziet en kan deze gaan voorbereiden voor de klant. Deze specifieke pagina wordt om de 3 seconde ververst zodat het ook daadwerkelijk geupdate wordt met de database. Na het afmaken van de bestelling kan de medewerker op de 'delete' knop klikken en wordt deze bestelling op de bekijk pagina van 'bezig' naar 'klaar' gezet zodat de klant die wacht kan zien dat zijn bestelling klaar is. AUB alleen gebruiken voor demonstratie en niet missbruik van maken, dit wordt <strong> gecontroleerd</strong>.
            </p>
            <a target="_blank" href="https://90006.stu.sd-lab.nl/VP-NIEUW/cash_register.php" class="project-link">Kassa Systeem</a>
            <a target="_blank" href="https://90006.stu.sd-lab.nl/VP-NIEUW/view_orders.php" class="project-link">Bestellingen Beheren</a>
            <a target="_blank" href="https://90006.stu.sd-lab.nl/VP-NIEUW/orderscherm.php" class="project-link">Bestellingen Bekijken</a>
            <br>
            <a target="_blank" href="https://github.com/romanized/macmedia" class="project-link">GitHub Repository</a>
            <br>
            <img src="https://cdn.discordapp.com/attachments/480048061893181442/1147255671159525376/image.png" alt="Project Image" class="project-image">
        </div>
    </section>
    </main>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
      <img src="../MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
  </a>
  </body>
</html>
