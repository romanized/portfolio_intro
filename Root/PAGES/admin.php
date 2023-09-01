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
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="shortcut icon" href="../MEDIA/admin.png" type="image/x-icon" />
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
                <a class="nav-a active" href="admin.php">Admin</a>
                <?php } else { ?>
                  <a class="nav-a" href="login.php">Login</a>
                  <?php } ?>
            </li>
            <li class="nav-li"><a href="../PHP/logout.php" class="nav-a">Uitloggen</a></li>
      </ul>
    </nav>
  </header>
    <main class="admin">
    <section class="admin-section insert">
        <h1 class="admin-title">Project toevoegen</h1>
            <form action="../PHP/insert_project.php" method="post" enctype="multipart/form-data">
                <label for="projectName">Project Naam:</label>
                <input type="text" id="projectName" name="projectName" placeholder="Naam van project" required>

                <label for="description">Beschrijving:</label>
                <textarea id="description" name="description" rows="4" placeholder="In dit project..." required></textarea>

                <label for="dateOfCreation">Datum:</label>
                <input type="date" id="dateOfCreation" name="dateOfCreation" required>

                <label for="image">Foto:</label>
                <input type="text" name="imageURL" placeholder="Foto URL">

                <label for="updatedDate">GitHub / link naar website</label>
                <input type="text" id="updatedDate" name="link">

                <input type="submit" value="Project Toevoegen">
            </form>
        </section>

        <section class="admin-section delete">
        <h2 class="admin-title">Delete Project</h2>
            <form action="delete_project.php" method="post">
                <label for="projectToDelete">Select Project:</label>
                <select id="projectToDelete" name="projectToDelete">
                <?php
                $sql = "SELECT ID, naam FROM Projecten";
                $result = $conn->query($sql);
                
                while($row = $result->fetch_assoc()) {
                    echo "<option value='". $row["ID"] ."'>" . $row["naam"] . "</option>";
                }
                ?>
            </select>
                <input type="submit" value="Delete Project">
            </form>
        </section>

        <section class="admin-section update">
        <h2 class="admin-title">Update Project</h2>
            <form action="update_project.php" method="post">
                <label for="projectToUpdate">Select Project:</label>
                <select id="projectToUpdate" name="projectToUpdate">
                    <!-- Option values will be populated here later -->
                </select>

                <label for="updatedName">Project Name:</label>
                <input type="text" id="updatedName" name="updatedName">

                <label for="updatedDescription">Description:</label>
                <textarea id="updatedDescription" name="updatedDescription" rows="4"></textarea>

                <label for="updatedDate">Date of Creation:</label>
                <input type="date" id="updatedDate" name="updatedDate">

                <label for="updatedDate">Link</label>
                <input type="date" id="updatedDate" name="link">

                <input type="submit" value="Update Project">
            </form>
        </section>
    </main>
    <script src="./Root/JS/app.js"></script>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
      <img src="../MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
  </a>
  </body>
</html>
