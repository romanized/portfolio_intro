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
    <title>Projecten</title>
    <link rel="stylesheet" href="../CSS/background2.css " />
    <link rel="stylesheet" href="../CSS/projecten.css" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="shortcut icon" href="../MEDIA/favicon2.png" type="image/x-icon" />
  </head>
  <header>
    <nav class="navbar">
        <ul>
          <li class="nav-li"><a href="../index.php" class="nav-a">Home</a></li>
          <li class="nav-li active"><a href="../PAGES/projecten.php" class="nav-a">Projecten</a></li>
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
    </nav>
  </header>
  <main>
  <div class="grid-container">
  <?php
  require("../PHP/require.php");
  $sql = "SELECT * FROM Projecten";
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

  foreach($projects as $project) {
    echo '<div class="grid-item-wrapper">';
    echo '<a target="_blank" class="linkse" href="' . $project["link"] . '" style="text-decoration: none; color: black;" >';
    echo '<div class="grid-item">';
    echo '<h2 style="color:#FFFFAA; ">' . htmlspecialchars($project['naam']) . '</h2>';
    echo '<p style="color:#FFFFFF;">' . htmlspecialchars($project['beschrijving']) . '</p>';
    echo '<p style="color:#FFFFFF;">Datum: ' . htmlspecialchars($project['datum']) . '</p>';
    echo '<img src="' . $project['image'] . '" alt="Project Image" width="475" height="250">';
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
      echo '<form action="../PHP/delete_project.php" method="post" class="delete-form">';
      echo '<input type="hidden" name="projectID" value="' . $project['ID'] . '">';
      echo '<input type="submit" value="Verwijder Project" class="delete-button">';
      echo '</form>';
  }
    echo '</div>';
    echo '</a>';
    echo '</div>';
  }
  ?>
  </div>
</main>


    <script src="./Root/JS/app.js"></script>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
      <img src="../MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
  </a>
  </body>
</html>
