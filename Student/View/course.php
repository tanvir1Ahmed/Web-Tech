<?php include("../Controller/course.php") ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/98e0f76c6f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
  <link rel="stylesheet" href="../Model/course.css">
  <link rel="stylesheet" href="../Model/Homepage.css">
</head>

<body>
  <div class="containerCourse">
    <header>
      <nav class="navbar">
        <ul>
          <li><a href="#"><img src="Image/Online.png" alt=""></a></li>
          <li><a href="Homepage.php">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="course.php">Courses</a></li>
          <li><a href="#">Contact us</a></li>
          <div class="search">
            <a id="myLink"><i class="fa-solid fa-user"></a></i> &nbsp &nbsp &nbsp
            <a href="../Controller/Homepage.php"><i class="fa-solid fa-right-from-bracket"></a></i>
          </div>
        </ul>
      </nav>
    </header>

    <main id="course">

    </main>
    
    <footer>
      <div class="footer-col">
        <h4>products</h4>
        <ul>
          <li><a href="#">teams</a></li>
          <li><a href="#">advertising</a></li>
          <li><a href="#">talent</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>network</h4>
        <ul>
          <li><a href="#">technology</a></li>
          <li><a href="#">science</a></li>
          <li><a href="#">business</a></li>
          <li><a href="#">professional</a></li>
          <li><a href="#">API</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>company</h4>
        <ul>
          <li><a href="#">about</a></li>
          <li><a href="#">legal</a></li>
          <li><a href="#">contact us</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>follow us</h4>
        <div class="links">
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
    </footer>
  </div>
</body>
<script src="../Controller/js/jquery-3.7.1.min.js"></script>
<script src="../Controller/course.js"></script>
</html>
<?php
$a = new course();
$a->courseJsonFile();
?>