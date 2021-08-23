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

  .x{
    color: blanchedalmond;
    font-size:50px;
  }
  .c{
    text-decoration:none;
    color:#ac00e6;
    font-size:22px;
  }
  @media screen and (min-device-width: 780px) and (max-device-width: 1400px){
    .imge{
    height:400px;
    width:680px;
    border-radius:20px;
  }
 
  .x{
    color: blanchedalmond;
    font-size:40px;
  }
  .c{
    text-decoration:none;
    color:#ac00e6;
    font-size:18px;
  }
  }
 
 
  @media screen and (min-device-width: 300px) and (max-device-width: 779px){
    .imge{
    height:400px;
    width:340px;
    border-radius:20px;
  }

  .x{
    font-size:25px;
   
  }

  .z{
    font-size:22px;
   
  }
  .c{
    text-decoration:none;
    color:#ac00e6;
    font-size:14px;
  }
  }
  </style>
  <body>
    <!--NAVBAR-->
    <?php include 'partials/_header.php'; ?>
    <center>  <h1 class=" x bg-dark py-2" style="color: blanchedalmond;">Welcome to Elearning World</h1></center>



    <!--section  -->
    <div class="container">
      <center>
        <img class="imge" src="back1.jpg"  alt="" srcset="">
      <h2 class="z my-2">Please Check your Question</h2>
      </center>
      <div class="container my-5">

      <?php
      $medium = $_GET['medium'];
      $std = $_GET['std'];
      $sub = $_GET['subject'];
      $chap = $_GET['chapname'];
      $qtype = $_GET['quetype'];


    $sql = "SELECT DISTINCT `quetype`,`question`,`chapname`,`subject`,`std`,`medium` FROM `que_ans` WHERE `medium`= '$medium' and `std`= '$std' and `subject`= '$sub' and `chapname`= '$chap' and `quetype`= '$qtype' ORDER BY `question`"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $question= $row['question'];
        echo '
        <a class="c" href="ans.php?std='.$std.'&& medium='.$medium.'&& subject='.$sub.'&& chapname='.$chap.'&& quetype='.$qtype.'&& question='.$question.'"><ul><li>'.$question.'</li></ul></a> 
        ';
    

  }
  
?>

  
      </div>
    
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
