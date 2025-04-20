
<?php
    include 'views/header.php';
    
    echo 'About';
    
    include 'views/footer.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gamecord- Your place to talk</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: linear-gradient(to top, #b8d4f8, #3b82f6);
      height: 100vh;
      overflow: hidden;
    }

    .container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%;
      flex-direction: column;
      color: white;
      text-align: center;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 16px;
    }

    .logo img {
      height: 40px;
      border-radius: 5px;
    }

    .logo-text {
      font-size: 32px;
      font-weight: bold;
    }

    .tagline {
      font-size: 24px;
      font-weight: 500;
    }

 
  </style>
</head>

<body>
  <div class="background"></div>
  <div class="container">
    <div class="logo">
      <img src="res/logo1.png" alt="Discord Logo", >
      <div class="logo-text">Gamecord</div>
    </div>
    <div class="tagline">Your place to talk.</div>
  </div>
</body>

</html>

