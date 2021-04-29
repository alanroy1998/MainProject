<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" type="text/css" href="../css/admin-home.css">
</head>
<body>

<?php
    include "sidebar.html";
?>
    <div class="container-fluid">
          <div class="navigation">
          <h5>Dashboard</h5>
      </div>

      <div class="container">
          <div class="box">
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <div class="name">
                Student
              </div>
              <div class="btns">
                <a href="../admin/student.php"><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>
        
          <div class="box">
              <div class="icon">
                <i class="fas fa-chalkboard-teacher"></i>
              </div>
              <div class="name">
                Staff
              </div>
              <div class="btns">
                <a href=""><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>

          <div class="box">
              <div class="icon">
                <i class="fas fa-wallet"></i>
              </div>
              <div class="name">
                Fee
              </div>
              <div class="btns">
                <a href=""><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>

          <div class="box">
              <div class="icon">
                <i class="fas fa-bullhorn"></i>
              </div>
              <div class="name">
                Notices
              </div>
              <div class="btns">
                <a href=""><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>

      </div>



      <div class="container">
          <div class="box">
              <div class="icon">
                <i class="fas fa-video"></i>
              </div>
              <div class="name">
                Live
              </div>
              <div class="btns">
                <a href="../live/live-addteam.php"><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>
            
          <div class="box">
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <div class="name">
                Staff
              </div>
              <div class="btns">
                <a href=""><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>

          <div class="box">
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <div class="name">
                Student
              </div>
              <div class="btns">
                <a href=""><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>

          <div class="box">
              <div class="icon">
                <i class="fas fa-user"></i>
              </div>
              <div class="name">
                Notifications
              </div>
              <div class="btns">
                <a href="notifications.php"><i class="fas fa-arrow-right"></i>View</a>
              </div>
          </div>
          
      </div>
</body>
</html>