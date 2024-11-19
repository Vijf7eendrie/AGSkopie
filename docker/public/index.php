<?php
include_once("../source/database.php");

$connection = database_connect();
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>AGS Login</title>
  <link rel="stylesheet" href="style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="script.js">
</head>
<body>
  <div class="wrapper">
    <form action="">
      <h1>Login Voor Studenten</h1>
      <div class="input-box">
        <input type="text" placeholder="Gebruikersnaam" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="Wachtwoord" placeholder="Wachtwoord" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Onthou me</label>
        <a href="Docentenlogin.html">Login voor docenten</a>
      </div>
      <button type="submit" class="btn">Login</button>
    </form>
  </div>
</body>
</html>




















