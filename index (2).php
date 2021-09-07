

<?php include 'partials/_dbconnect.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Hello, world!</title>

  </head>
  <body>
    <!--NAVBAR-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Dropdown
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Action</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Something else here</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </nav>
    <center>  <h1 class=" x bg-dark py-2" style="color: blanchedalmond;">Welcome to Elearning World</h1></center>




    <!--section  -->
    <div class="container">
      <center>
        <img src="back1.jpg" height="400px" width="1300px" alt="" srcset="">
      <h2 class="y my-2">Please select your Medium</h2>
      <div class="container my-5">

        <?php
       $sql="SELECT DISTINCT `medium` FROM `que_ans` ORDER BY `medium`";
      $result= mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result)){
      $medium=$row['medium'];

    echo '
    <a href="medium.php?medium='.$medium.'"><button type="button" class="btn btn-outline-primary mx-1 my-1" style="width: 350px; height: 110px;box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);">'.$medium.'</button></a> 
    ';
    }
  ?>
      
       <!-- <a href="m_eng_mediam_10th.html"><button type="button" class="btn btn-outline-secondary mx-1 my-1"style="width: 350px; height: 110px; box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);">10th Standard</button><br></a> 
       <a href="m_eng_mediam_11th.html"><button type="button" class="btn btn-outline-success mx-1 my-1"style="width: 350px; height: 110px; box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);">11th Standard</button></a> 
       <a href="m_eng_mediam_12.html"><button type="button" class="btn btn-outline-info mx-1 my-1"style="width: 350px; height: 110px;box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);">12th Standard</button><br></a> 
   -->
 
      </div>
    </center>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>
