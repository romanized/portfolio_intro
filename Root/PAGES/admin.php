<?php
require("../PHP/require.php");

if (!isset($_SESSION['loggedin'])) {
  Header("Location: login.php");
  $_SESSION['loggedin'] = false;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    <link rel="stylesheet" href="../CSS/background5.css" />
    <link rel="stylesheet" href="../CSS/admin.css" />
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel="shortcut icon" href="../MEDIA/admin.png" type="image/x-icon" />
    <script src="../JS/app.js"></script>
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

                <label for="updatedDate">GitHub / link naar website:</label>
                <input type="text" id="updatedDate" name="link">

                <input type="submit" value="Project toevoegen">
            </form>
        </section>

        <section class="admin-section update">
    <h1 class="admin-title">Project bewerken</h1>
    <form id="updateForm" action="../PHP/update_project.php" method="post" enctype="multipart/form-data">
        <label for="projectSelector">Selecteer project:</label>
        <select id="projectSelector" name="projectID">
            <?php
            $sql = "SELECT * FROM Projecten";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            foreach($projects as $project) {
                echo '<option value="' . $project['ID'] . '">' . htmlspecialchars($project['naam']) . '</option>';
            }
            ?>
        </select>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    let projectSelector = document.getElementById('projectSelector');
    projectSelector.addEventListener('change', function() {
      let selectedProjectID = projectSelector.value;
      let xhr = new XMLHttpRequest();
      xhr.open('GET', '../PHP/get_project_details.php?ID=' + selectedProjectID, true);
      xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
          let project = JSON.parse(xhr.responseText);
          document.getElementById('editProjectName').value = project.naam;
          document.getElementById('editDescription').value = project.beschrijving;
          document.getElementById('editDateOfCreation').value = project.datum;
          document.getElementById('editImage').value = project.image;
          document.getElementById('editLink').value = project.link;
        }
      };
      xhr.send();
    });
  });
</script>


<form id="editProjectForm">
        <label for="editProjectName">Project Naam:</label>
        <input type="text" id="editProjectName" name="editProjectName" placeholder="Naam van project">

        <label for="editDescription">Beschrijving:</label>
        <textarea id="editDescription" name="editDescription" rows="4" placeholder="In dit project..."></textarea>

        <label for="editDateOfCreation">Datum:</label>
        <input type="date" id="editDateOfCreation" name="editDateOfCreation">

        <label for="editImage">Foto:</label>
        <input type="text" id="editImage" name="editImageURL" placeholder="Foto URL">

        <label for="editLink">GitHub / link naar website</label>
        <input type="text" id="editLink" name="editLink">

        <input type="submit" id="editProjectButton" value="Project bewerken">
    </form>
</section>
    </main>
    <a href="https://github.com/romanized" target="_blank" class="github-link">
      <img src="../MEDIA/GB3.jpeg" alt="GitHub Logo" class="github-logo" />
  </a>
  </body>
</html>
