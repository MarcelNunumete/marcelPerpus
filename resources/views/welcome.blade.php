<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>

    body.welcome{
        background-image: url('img/libary.jpg');
        background-size: cover;
        background-position: center;
    }


    .box{
        display: flex;
    }

    .box1{
        width: 150px;
        height: 150px;
        background: transparent;
        border: 3px solid #686e79;
        border-radius: 20px;
    }
   
    .box1 img{
        position: relative;
        left: 43px;
        top: 20px
    }
    .box2 img{
        position: relative;
        left: 43px;
        top: 20px
    }
    .box3 img{
        position: relative;
        left: 43px;
        top: 20px
    }
    .box2{
        width: 150px;
        height: 150px;
        background: transparent;
        border: 3px solid #686e79;
        margin-left: 20px;
        margin-right: 20px;
        border-radius: 20px;
    }
    .box3{
        width: 150px;
        height: 150px;
        background: transparent;
        border: 3px solid #686e79;
        border-radius: 20px;
    }

    .title-welcome h1{
        color: #ffffff;
    }
    hr{
        color: #ffffff
    }

    p.perpus{
        color: #ffffff
    }

    p.novel{
        color: #ffffff;
        font-size: 20px;
        font-weight: 400;
        display: flex;
        justify-content: center;
        position: relative;
        top: 20px;
    }

    p.dongeng{
        color: #ffffff;
        font-size: 20px;
        font-weight: 400;
        display: flex;
        justify-content: center;
        position: relative;
        top: 20px;
    }
    p.pelajaran{
        color: #ffffff;
        font-size: 20px;
        font-weight: 400;
        display: flex;
        justify-content: center;
        position: relative;
        top: 20px;
    }

    .navbar-brand-text{
        position: relative;
        right: 400px;
    }

    h1 span{
        color: rgb(246, 198, 24);
    }

    .content-welcome{
        margin-top: 100px;
    }




  </style>
  <body class="welcome">

    <nav class="navbar navbar-light bg-warning">
       <div class="container">
        <div class="navbar-brand-icon">
            <img src="img/logo.png" alt="" width="50">
         </div>
         <span class="navbar-brand-text d-flex-start mb-0 h4 ">Perpustakaan 40</span>
         <button type="button" class="btn btn-outline dark"><b>Log-in</b></button>
       </div>
      </nav>

      <div class="container">
        <div class="content-welcome">
            <div class="title-welcome mt-4"><h1>Selamat datang di <br> <span>Perpustakaan</span> Digital SMKN 40 Jakarta</h1></div>
            <hr>
            <p class="perpus">"Selamat datang di Perpustakaan Digital SMKN 40 Jakarta. Temukan beragam koleksi buku elektronik, <br> jurnal, dan sumber daya pendidikan lainnya untuk mendukung pengetahuan dan penelitian Anda. <br> Dengan antarmuka ramah pengguna, kami hadir untuk melayani kebutuhan belajar-mengajar Anda. <br> Mari bersama-sama menjelajahi dunia pengetahuan yang menarik dan inspiratif!"</p>
            <div class="button-welcome">
                <a href="/login" type="button" class="btn btn-outline-warning  btn-lg mt-3">Log-in</a>
            </div>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>