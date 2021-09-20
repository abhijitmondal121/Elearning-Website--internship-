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
  .container{
    box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);
    font-size:25px;
  }
  @media screen and (min-device-width: 725px) and (max-device-width: 1400px){
    .imge{
    height:400px;
    width:680px;
    border-radius:20px;
  }
 
  .x{
    color: blanchedalmond;
    font-size:40px;
  }
  .container{
    box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);
    font-size:22px;
  }
  }
 
  @media screen and (min-device-width: 300px) and (max-device-width: 724px){
    .imge{
    height:400px;
    width:330px;
    border-radius:20px;
  }

  .x{
    font-size:25px;
   
  }

  .z{
    font-size:22px;
   
  }
  .container{
    width:280px;
    box-shadow: 2px 2PX 2PX 2PX rgb(104, 102, 102);
    font-size:16px;
  }

  }
  </style>
  <body>
    <!--NAVBAR-->
    <?php include 'partials/_header.php'; ?>
    <center>  <h1 class=" x bg-dark py-2" style="color: blanchedalmond;">Welcome to Elearning World</h1></center>



    <!--section  -->
    <center>
        <img class="imge" src="back1.jpg" alt="" srcset="">
      <h2 class="z my-2">Please check Your Answer</h2>
      
      </center>
    <div class="container my-4 py-5">

      <?php
 $medium = $_GET['medium'];
 $std = $_GET['std'];
 $sub = $_GET['subject'];
 $chap = $_GET['chapname'];
 $qtype = $_GET['quetype'];
 $question = $_GET['question'];

    $sql = "SELECT DISTINCT `answer` FROM `que_ans` WHERE `medium`= '$medium' and `std`= '$std' and `subject`= '$sub' and `chapname`= '$chap' and `quetype`= '$qtype' and `question`= '$question'  ORDER BY `answer`"; 
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $answer= $row['answer'];
        echo 'Q : '. $question ;
        echo '<br>';
        echo '=>  '.$answer ;
    

  }
  
?>


  <center>
      
    
    </div>

    </center>

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
