<?php
require_once "pdo.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./navbar.css">
    <title>Home</title>
    <style>

        body {
            background-color: aquamarine;
        }

        .content {
            display: flex;
            justify-content: center;
            padding-top:100px;
            font-family: verdana;
        }

        div .image {
            padding: 60px;
        }

    div .slogan{
        padding-top :200px;
        font-weight: 600;
        font-size: 28px;
        font-family:'Segoe UI', Tahoma, Verdana, sans-serif;
    }

    </style>
</head>
<body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <section id = "nav-bar">
        <nav class="navbar navbar-expand-lg navbar-custom">
          <a class="navbar-brand">WELCOME <?php echo(htmlentities($_SESSION['name'])); ?> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
              <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="http://localhost//soil-test-analysis/lab_home.php">HOME</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/soil-test-analysis/report.php">SUBMIT SAMPLES</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="http://localhost/soil-test-analysis/logout.php">LOGOUT</a>
              </li>
              </ul>
          </div>
          </nav>
      </section>

     <!-- Flash pattern -->
      <?php
      if ( isset($_SESSION['error']) ) {
          echo '<p style="color:red">'.$_SESSION['error']."</p>\n";
          unset($_SESSION['error']);
      }
      if ( isset($_SESSION['success']) ) {
          echo '<p style="color:blue">'.$_SESSION['success']."</p>\n";
          unset($_SESSION['success']);
      }
      ?>

      <div class="content" >
        <div class="slogan">
            <p>For the Farmers by the Students</p>
        </div>
        <div class="image">
            <img src="Images/farmer.png" alt="bankimage">
        </div>
    </div>

      <svg height="100%" width="100%" id="svg" viewBox="0 0 1440 600" xmlns="http://www.w3.org/2000/svg" class="transition duration-300 ease-in-out delay-150"><path d="M 0,600 C 0,600 0,150 0,150 C 48.39782768777614,148.37481590574373 96.79565537555229,146.7496318114875 150,141 C 203.2043446244477,135.2503681885125 261.21520618556707,125.37628865979381 327,116 C 392.78479381443293,106.62371134020619 466.34351988217963,97.74521354933724 529,103 C 591.6564801178204,108.25478645066276 643.4107142857143,127.64285714285717 707,147 C 770.5892857142857,166.35714285714283 846.0136229749633,185.68335787923414 917,185 C 987.9863770250367,184.31664212076586 1054.534793814433,163.62371134020617 1110,146 C 1165.465206185567,128.37628865979383 1209.847201767305,113.8217967599411 1263,115 C 1316.152798232695,116.1782032400589 1378.0763991163476,133.08910162002945 1440,150 C 1440,150 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="#00d08466" class="transition-all duration-300 ease-in-out delay-150"></path><path d="M 0,600 C 0,600 0,300 0,300 C 65.27190721649484,281.8877025036819 130.54381443298968,263.77540500736376 179,265 C 227.45618556701032,266.22459499263624 259.09664948453616,286.7860824742269 329,288 C 398.90335051546384,289.2139175257731 507.0695876288661,271.080265095729 573,277 C 638.9304123711339,282.919734904271 662.625,312.89285714285717 714,308 C 765.375,303.10714285714283 844.4304123711341,263.3483063328424 919,251 C 993.5695876288659,238.65169366715762 1063.6533505154641,253.71391752577318 1109,260 C 1154.3466494845359,266.2860824742268 1174.9561855670102,263.7960235640648 1226,269 C 1277.0438144329898,274.2039764359352 1358.521907216495,287.1019882179676 1440,300 C 1440,300 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="#00d08488" class="transition-all duration-300 ease-in-out delay-150"></path><path d="M 0,600 C 0,600 0,450 0,450 C 74.11745213549338,439.14543446244477 148.23490427098676,428.2908689248895 209,425 C 269.76509572901324,421.7091310751105 317.1778350515463,425.9819587628866 377,422 C 436.8221649484537,418.0180412371134 509.0537555228278,405.7812960235641 564,398 C 618.9462444771722,390.2187039764359 656.6071428571429,386.8928571428571 702,400 C 747.3928571428571,413.1071428571429 800.517673048601,442.64727540500746 873,459 C 945.482326951399,475.35272459499254 1037.3221649484535,478.5180412371134 1098,469 C 1158.6778350515465,459.4819587628866 1188.1936671575847,437.2805596465391 1240,432 C 1291.8063328424153,426.7194403534609 1365.9031664212075,438.35972017673043 1440,450 C 1440,450 1440,600 1440,600 Z" stroke="none" stroke-width="0" fill="#00d084ff" class="transition-all duration-300 ease-in-out delay-150"></path></svg>    

</body>
</html>
