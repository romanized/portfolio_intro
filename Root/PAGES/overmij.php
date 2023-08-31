<?php
require("../PHP/require.php");

if (!isset($_SESSION['loggedin'])) {
  $_SESSION['loggedin'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Overmij</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/overmij.css" />
    <link rel="shortcut icon" href="../MEDIA/favicon2.png" type="image/x-icon" />
    <script src="../JS/app.js" defer></script>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul>
                <li class="nav-li"><a href="../index.php" class="nav-a">Home</a></li>
                <li class="nav-li"><a href="../PAGES/projecten.php" class="nav-a">Projecten</a></li>
                <li class="nav-li active"><a href="#" class="nav-a">Overmij</a></li>
                <li class="nav-li"><a href="../PAGES/contact.php" class="nav-a">Contact</a></li>
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
        <section class="overmij" style="margin-top: 20px;">
            <h1>Overmij</h1>
            <button id="myBtn" class="learn-more">
                <span class="circle" aria-hidden="true">
                <span class="icon arrow"></span>
                </span>
                <span class="button-text">Meer weten</span>
              </button>
            <div id="myModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h1>Overmij</h1>
                <p>Hallo, ik ben Nebi Canlioglu, een 18-jarige Software Developer in opleiding aan het Grafisch Lyceum Rotterdam. Ik woon in het bruisende Rotterdam samen met mijn ouders en een jonger broertje.</p>
                <p>Vanaf jonge leeftijd was ik al gefascineerd door coderen. Hoewel ik niet altijd actief bezig was met programmeren, heb ik door de jaren heen genoeg kennis opgedaan om mijn passie naar een professioneel niveau te tillen. Deze voortdurende interesse heeft mij gemotiveerd om een MBO 4 opleiding in Software Development te volgen.</p>
                <p>Als ik niet achter mijn computer zit, ben ik waarschijnlijk aan het zwemmen, gymen, gamen of tijd doorbrengen met vrienden. En ja, een goede nachtrust is voor mij net zo belangrijk!</p>
                <p>Voel je vrij om rond te kijken op mijn website en als je vragen hebt, aarzel dan niet om <a href="../HTML/contact.html" style="text-decoration: none;">contact</a> met me op te nemen.</p>
            </div>
            </div>
            <hr style="margin-top: 30px;">
            <h2 class="MV1">Mijn Vaardigheden</h2>
            <ul class="vaardigheden">
                <a target="_blank" href="https://www.w3schools.com/html/html_intro.asp"><li>HTML</li></a>
                <a target="_blank" href="https://www.w3schools.com/css/css_intro.asp"><li>CSS</li></a>
                <a target="_blank" href="https://www.w3schools.com/whatis/whatis_js.asp"><li>Javascript</li></a>
                <a target="_blank" href="https://www.w3schools.com/cs/cs_intro.php"><li>C#</li></a>
                <a target="_blank" href="https://www.w3schools.com/php/php_intro.asp"><li>PHP</li></a>
                <a target="_blank" href="https://www.w3schools.com/react/react_intro.asp"><li>React</li></a>
            </ul>
        </section>
        <hr>
        <section class="fav">
            <h2>Beste Artiest</h2>
            <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/1cdqNRXIRrvT4HnApj6yw6?utm_source=generator&theme=0" width="35%" height="152" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy"></iframe>
            <!-- <video width="560" height="315" poster="../MEDIA/opium2.webp" controls>
                <source src="../MEDIA/ILCK.mp4" type="video/mp4">
                Uw browser kan de video niet inladen.
              </video> -->
        </section>
        <hr>
        <section class="cv-section">
            <h2>Mijn CV</h2>
            <p>Klik op de knop hieronder om mijn CV te downloaden.</p>
            <a href="/Root/MEDIA/CVImage.jpg" download class="cv-download-btn">Download CV</a>
        </section>
    </main>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
        <img src="../MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
    </a>
</body>
<script src="./Root/JS/app.js" defer></script>
</html>
