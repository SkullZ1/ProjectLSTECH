<?php
include "session.php";
include "koneksi.php";
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="css/images/iconweb.png"> 
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="94352f01-ccd1-4f1a-a001-b52a2f434dad";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    
    
    
    <title>LSTECH</title>
</head>

<body>
    <!--navbar-->
    <nav class="navbar navbar-expand-xl navbar-dark fixed-top position-sticky shadow-sm" class="nv">
        <div class="container">
            <a class="navbar-brand font-weight-bold" href="index.php">
                <img src="css/images/iconweb.png" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy"> Langit Senja Technology
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active " style="margin-right: 20px;">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item" style="margin-left: -20px;">
                        <a class="nav-link" href="tips.php">Tutorial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="paket.php">Paket Langganan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php"> 
                            <image src="css/images/iconlogin.png" style="width: 30px;"></image>
                            Login
                        </a>
                    </li>
                   
                </ul>
            </div>
        </div>
    </nav>
    <!--jumbotron-->
    <div class="jumbotron jumbotron-fluid ">
        <div class="container align-items-center">
            <h1 class="display-4 font-weight-bold ">Langit Senja Technology</h1>
            <p class="text-light">Tutorial <strong><i>Coding</i></strong></p>
            <div>
                <button onclick="location.href='tips.html'" type="button" class="btn align-items-center ">Tutorial</button>
            </div>
        </div>

    </div>

    <!--main-->
    <div class="container" style="margin-bottom: 20px;">
        <div class="row">
            <div class="col-8">
                <div class="container" style="text-align: justify;">
                <h1><strong>HTML</strong></h1>
                <p style="font-size: 30px;">
                    <strong>Hypertext Markup Language</strong> atau 
                    <strong>HTML</strong> 
                    adalah bahasa markup yang digunakan untuk membuat struktur halaman website. 
                </p>
                </div>
            </div>
            <div class="col-4">
                <image src="css/images/HTML.png" width="400px" height="300px" ></image>
            </div>
          </div>
    </div>
    <div class="container" style="margin-bottom: 20px; margin-top: 100px;">
        <div class="row">
            <div class="col-4">
                <image src="css/images/css.jpg" width="400px" height="300px"></image>
            </div>
            <div class="col-8">
                <div class="container" style="margin-left: 60px; text-align: justify;">
                    <h1><strong>CSS</strong></h1>
                    <p style="font-size: 30px;">
                        <strong>CSS</strong> atau <strong>Cascading Style Sheet</strong>  biasanya digunakan untuk mengatur 
                        tampilan elemen yang tertulis dalam bahasa markup, seperti HTML.
                         CSS berfungsi untuk memisahkan konten dari tampilan visualnya di situs.
                    </p>
                </div>
            </div>
          </div>
    </div>
    <div class="container" style="margin-bottom: 20px;margin-top: 100px;">
        <div class="row">
            <div class="col-8">
                <div class="container" style="text-align: justify; margin-left: -15px;">
                <h1><strong>JavaScript</strong></h1>
                <p style="font-size: 30px;">
                    Javascript adalah bahasa pemrograman yang ringan, bersifat dinamis, 
                    dan dapat diarahkan untuk oriented programming maupun functional programming. 
                </p>
                </div>
            </div>
            <div class="col-4">
                <image src="css/images/javascript.jpg" width="400px" height="300px" ></image>
            </div>
          </div>
    </div>
    <div class="container" style="margin-bottom: 20px; margin-top: 100px;">
        <div class="row">
            <div class="col-4">
                <image src="css/images/vue.jpg" width="400px" height="300px"></image>
            </div>
            <div class="col-8">
                <div class="container" style="margin-left: 60px; text-align: justify; margin-bottom: 50px;">
                    <h1><strong>VUE</strong></h1>
                    <p style="font-size: 30px;">
                        <strong>Vue</strong> adalah sebuah kerangka kerja nan progresif untuk 
                        membangun antarmuka pengguna.<strong>Vue</strong> merupakan framework yang dapat 
                        membantu proses pengembangan aplikasi web menjadi lebih efisien. 
                    </p>
                </div>
            </div>
          </div>
    </div>
       



    <button onclick="topFunction()" id="myBtn" title="Go to top">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-eject sv" viewBox="0 0 20 18">
    <path d="M7.27 1.047a1 1 0 0 1 1.46 0l6.345 6.77c.6.638.146 1.683-.73 1.683H1.656C.78 9.5.326 8.455.926 7.816L7.27 1.047zM14.346 8.5L8 1.731 1.654 8.5h12.692zM.5 11.5a1 1 0 0 1 1-1h13a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1h-13a1 1 0 0 1-1-1v-1zm14 0h-13v1h13v-1z"/></svg>
    </button>

    <footer class="footer">
        <div class="container">
            <h1 style="margin-left:-10px;">
            <image src="css/images/iconweb.png"></image>
            LSTECH
            </h1>
            <div class="row">
                <div class="col">
                    <h5 class=" font-weight-bold">About Me</h5>
                    <pre style="color: white;" class="align-items-center">
Made By
Ronald Adithya Rizkhie Soeharto
Rezha Mukti Kris Saputra
                    </pre>
                </div>
                <div class="col">
                    <a href="https://www.instagram.com/langitsenjatechnology/" style="color: white;">
                        <image src="css/images/instagramicon.png">
                        </image>
                        langitsenjatechnology
                    </a>
                </div>
                <div class="col">
                    <a href="https://www.youtube.com/channel/UCM7jnhpEdUlIU5M5BLvVFxQ" style="color: white;">
                        <image src="css/images/iconyoutube.png"></image>
                        Langit Senja Technology
                    </a>
                </div>
            </div>
        </div>
    </footer>



    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <scr src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <scrip src="js/java.js">

</body>
</html>