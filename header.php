<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ushtrimet 5</title>
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <div class="header">
    <img id="ubtlogo" class="headerPhoto" src="UBT-LOGO.png" alt="UBT Logo" />
    <ul class="headerList">
    <?php
    if(isset($_SESSION['role']) && $_SESSION['role']==1)
    ?>
      <a href="dashboard.php">
        <li>Dashboard</li>
      </a>
    <?php
    }
    ?>
      <a href="index.php">
        <li>Home</li>
      </a>
      <a href="dashboard.php">
        <li>Dashboard</li>
      </a>
      <a href="">
        <li>Contact</li>
      </a>

    </ul>
  </div>