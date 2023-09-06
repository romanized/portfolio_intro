<?php

require("../PHP/require.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
  if (trim($_POST['username']) == NULL) {
    Header("Location:login.php?error");
  }
  if (trim($_POST['password']) == NULL) {
    Header("Location:login.php?error");
  }
  $sql = "SELECT * FROM Login WHERE username = '" . $con->real_escape_string($_POST['username']) . "'";
  echo $sql; 
  $query = $con->query($sql);
  
  if ($query->num_rows == 1) {
    $row = $query->fetch_assoc();
    if ($_POST['password'] == $row['password']) {
      $_SESSION['loggedin'] = true;
      $_SESSION['username'] = $_POST['username'];

      if ($_SERVER['HTTP_REFFER'] != "") {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
      } else {
        Header("Location: ./admin.php");
        header('Cache-Control: no cache'); 
        session_cache_limiter('private_no_expire'); 
        session_start();
      }
    } else {
      Header("Location: login.php?error");
    }
  } else {
    Header("Location: login.php?error");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../CSS/login.css">
  <link rel="stylesheet" href="../CSS/style.css">
  <link rel="shortcut icon" href="../MEDIA/login.png" type="image/x-icon">
  <script src="../JS/app.js"></script>
</head>
<body>


  <div class="centered-container">
    <form method="post" class="form">
      <p id="heading">Login</p>
      <p>(Gebruikersnaam & Wachtwoord = 123)</p>
      <div class="field">
        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"></path>
        </svg>
        <input autocomplete="off" placeholder="Gebruikersnaam" class="input-field" type="text" required name="username">
      </div>
      <div class="field">
        <svg class="input-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
          <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
        </svg>
        <input placeholder="Wachtwoord" class="input-field" type="password" required name='password'>
      </div>
      <div class="btn">
        <button class="button1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
        <br>
      </div>
    </form>
    <a href="../index.php" class="github-link">
        <img src="../MEDIA/home.png" alt="GitHub Logo" class="github-logo" />
    </a>
  </div>
</html>