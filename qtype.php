<?php include 'partials/_dbconnect.php'; ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Elearning Website!</title>
  </head>
  <style>
  .imge{
    height:400px;
    width:1300px;
    border-radius:20px;
  }
  #btn{
    width: 350px; height: 110px;box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);
  }
  .x{
    color: blanchedalmond;
    font-size:50px;
  }

  @media screen and (min-device-width: 770px) and (max-device-width: 1400px){
    .imge{
    height:400px;
    width:680px;
    border-radius:20px;
  }
  #btn{
    width: 300px; height: 110px;box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);
  }
  .x{
    font-size:40px;
   
  }

  .z{
    font-size:32px;
   
  }

  }
 
  @media screen and (min-device-width: 300px) and (max-device-width: 770px){
    .imge{
    height:400px;
    width:340px;
    border-radius:20px;
  }
  #btn{
    width: 280px; height: 110px;box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);
  }
  .x{
    font-size:25px;
   
  }

  .z{
    font-size:22px;
   
  }

  }
  </style>
  <body>
  <?php include 'partials/_header.php'; ?>
    <center>  <h1 class=" x bg-dark py-2" style="">Welcome to Elearning World</h1></center>



    <!--section  -->
    <div class="container">
      <center>
        <img class="imge"src="back1.jpg"  alt="" srcset="">
      <h2 class="z my-2">Please select your Question Type</h2>
      <div class="container my-5">

      <?php
     $medium = $_GET['medium'];
 $std = $_GET['std'];
 $sub = $_GET['subject'];
 $chap = $_GET['chapname'];

    $sql = "SELECT DISTINCT `quetype`,`chapname`,`subject`,`std`,`medium` FROM `que_ans` WHERE `medium`= '$medium' and `std`= '$std' and `subject`= '$sub' and `chapname`= '$chap' ORDER BY `quetype`"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $quetype= $row['quetype'];
        echo '
        <a href="question.php?std='.$std.'&& medium='.$medium.'&& subject='.$sub.'&& chapname='.$chap.'&& quetype='.$quetype.'"><button type="button" id="btn" class="btn btn-outline-success mx-1 my-1" style="">'.$quetype.'</button></a> 
        ';
    

  }
  
?>


  
      </div>
    </center>
    </div>


    <?php include 'partials/_footer.php'; ?>

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