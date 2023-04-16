
<?php
  session_start();
  if(!isset($_SESSION['user'])){
    header('Location:index.html');
    exit();
  }
?>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Play Game</title>
    <style>
      body {
        background:url('https://i.pinimg.com/originals/cd/01/ca/cd01cafef69c16afe07f05c4a127e776.jpg');
        background-size:cover;
        font-family: Arial, sans-serif;
        font-size: 16px;
        margin: 0;
        padding: 0;
      }
      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background-color: #ffc107;
        padding: 10px;
      }

      .navbar > div {
        display: flex;
        align-items: center;
      }

      .navbar a {
        color: black;
        text-decoration: none;
        margin: 0 10px;
        font-weight: bold;
        display: flex;
        align-items: center;
      }

      .navbar a:hover {
        text-decoration: underline;
      }

      .navbar span {
        color: black;
        font-size: 18px;
        margin-right: 10px;
      }

      .navbar img {
        height: 24px;
        margin-right: 5px;
      }

      h1, h2 {
        color: white;
        text-align: center;
        margin-top: 50px;
      }

      h1 {
        font-size: 36px;
        margin-bottom: 20px;
      }

      h2 {
        font-size: 24px;
        margin-bottom: 40px;
      }
    </style>
  </head>
  <body>
    <div class="navbar">
      <div>
        <a href="play.html"><img src="https://img.icons8.com/cotton/64/000000/joystick.png"/><span>Play Game</span></a>
        <a href="view-dashboard.php"><img src="https://img.icons8.com/cotton/64/000000/dashboard.png"/><span>Dahsboard</span></a>
      </div>
      <div>
        <a href="profile.php"><img src="https://img.icons8.com/cotton/64/000000/user-male--v1.png"/><span>Profile</span></a>
        <a href="logout.php"><img src="https://img.icons8.com/cotton/64/000000/logout-rounded-down--v1.png"/><span>Logout</span></a>
      </div>
    </div>
    <h1>Hii <?php echo $_SESSION["user"] ?>! Welcome to Play The Game.....</h1>
    <center><h2>Are You Excited to play the game and find the hidden treasure  &#x1F4B0 through riddles</h2></center>
    <center><h2>Click On Play Game</h2></center>
  </body>
</html>