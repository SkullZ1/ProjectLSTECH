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
    <title>Langit Senja Technology</title>
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
                    <li class="nav-item" style="margin-right: 20px;">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item active" style="margin-left: -20px;">
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
    <!--main-->
    <div class="container" id="bd">
        <div class="row">
            <div class="col-sm-8">
                <div class="card-body shadow p-3 mb-5 bg-white rounded">

                    <h5 class="card-title font-weight-bold">Apa itu CSS ?</h5>
                    <p class="card-text">CSS atau kepanjangan dari <i>(Cascading Style Sheet)</i> adalah suatu teknologi yang digunakan untuk memperindah tampilan halaman website. Atau secara singkatnya dengan menggunakan CSS ini sobat akan dengan mudah mengubah secara keseluruhan
                        warna, gaya tulisan, dan tampilan di website yg sobat inginkan.</p>
                    <h5 class="card-title font-weight-bold">Syntax CSS</h5>
                    <p class="card-text">Syntax CSS Terdapat 2 blok penulisan yaitu selector dan declaration block.</p>
                    <p class="card-text">Selector adalah elemen HTML yang akan kita atur style nya.</p>
                    <ul>
                        <li>Dengan <i>CSS Selector</i> memungkinkan sobat untuk memilih dan memanipulasi elemen <strong>HTML</strong></li>
                        <li><i>CSS Selector</i> digunakan untuk "menemukan" (atau menyorot) elemen <strong>HTML</strong> berdasarkan <strong><i>id, class, type, atribut</i></strong> dan banyak lagi.</li>
                    </ul>

                    <p class="card-text">Sedangkan Declaration block merupakan isi dari property dan nilai dari CSS yang mengatur atau mengendalikan selector, diawali dengan tanda kurawal buka <strong>'{'</strong> dan diakhiri dengan tanda kurawal tutup <strong>'}'</strong>.</p>
                    <ul>
                        <li>property dan value, ini merupakan 2 hal yang tidak bisa dipisahkan, dan sama - sama dituliskan di dalam declaration block. property, merupakan suatu attribut yang nilainya akan dirubah, sedangkan value merupakan nilai dari property
                            tersebut.
                        </li>
                        <li>Pemberian nilai dari property digunakan titik dua <strong>( : )</strong> dan akhir dari property digunakan titik koma <strong>( ; )</strong></li>
                    </ul>
                    <br>
                    <h5 class="card-tittle font-weight-bold">Cara Menulis kode CSS dalam HTML</h5>
                    <p class="card-text">Penulisan kode CSS di HTML dapat dilakukan di dalam tag <code>&lt;style&gt;</code>. Tag tersebut dapat ditulis di dalam tag <code>&lt;head&gt;</code> atau <code>&lt;body&gt;</code>.</p>
                    <p class="card-text">Kebanyakan orang menulisnya di dalam tag <code>&lt;head&gt;</code>. Perhatiakn contoh berikut ini:</p>
                    <!--code editor-->
                    <div class="cd">
                        <pre style="color:#f8f8f2;-moz-tab-size:4;-o-tab-size:4;tab-size:4"><code class="language-html" data-lang="html"><span style="color:#ff79c6">&lt;!DOCTYPE html&gt;</span>
&lt;<span style="color:#ff79c6">html</span>&gt;
&lt;<span style="color:#ff79c6">head</span>&gt;
&lt;<span style="color:#ff79c6">title</span>&gt;Contoh Penulisan kode CSS&lt;/<span style="color:#ff79c6">title</span>&gt;

&lt;<span style="color:#ff79c6">style</span> <span style="color:#50fa7b">type</span><span style="color:#ff79c6">=</span><span style="color:#f1fa8c">"text/css"</span>&gt;
    <span style="color:#ff79c6">p</span> { <span style="color:#ff79c6">color</span>: <span style="color:#ff79c6">red</span> }
&lt;/<span style="color:#ff79c6">style</span>&gt;

&lt;/<span style="color:#ff79c6">head</span>&gt;

&lt;<span style="color:#ff79c6">body</span>&gt;
    &lt;<span style="color:#ff79c6">p</span>&gt;Sebuah contoh paragraf yang sudah diberikan oleh kode CSS&lt;/<span style="color:#ff79c6">p</span>&gt;
&lt;/<span style="color:#ff79c6">body</span>&gt;
&lt;/<span style="color:#ff79c6">html</span>&gt;
</code></pre>
                    </div>
                    <br>
                    <p class="card-text">Hasilnya, elemen <code>&lt;p&gt;</code> akan berwarna merah:</p>
                    <img src="css/images/css-di-html.png" class="img-fluid" alt="Responsive image"></img><br>
                </div>
            </div>




            <div class="col-sm-4">
                <div class="list-group ">
                    <a href="ht.php" class=" grid list-group-item list-group-item-action ">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconhtml.png" class="d-inline icon" width="24"> HTML
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="css.php" class=" grid list-group-item list-group-item-action active">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconcss.svg" class="d-inline icon" width="24"> CSS
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="js.php" class=" grid list-group-item list-group-item-action ">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconjava.png" class="d-inline icon" width="24"> Javascript
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="vue.php" class=" grid list-group-item list-group-item-action ">
                        <div class="row">
                            <div class="col-12">
                                <div class="align-middle"><img src="css/images/iconvue.png" class="d-inline icon" width="24"> Vue
                                </div>
                            </div>
                        </div>
                    </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
    <script src="js/java.js"></script>
</body>

</html>