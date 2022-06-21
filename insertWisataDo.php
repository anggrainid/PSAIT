<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>WeStyle</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#masthead">WeStyle</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="#berita_gayahidup">Gaya Hidup</a></li>
                        <li class="nav-item"><a class="nav-link" href="#wisata_hits">Tempat Hits</a></li>
                        <li class="nav-item"><a class="nav-link" href="#pesan_tiket">Pesan Tiket</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <section class="about-section" id="about" style="padding-top:200px; padding-bottom:200px; background: linear-gradient(to bottom, #000 0%, rgba(0, 0, 0, 0.9) 75%, rgba(0, 0, 0, 0.8) 100%);">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                <?php

                if(isset($_POST['submit']))
                {    
                $tempat_wisata = $_POST['tempat_wisata'];
                $jam_buka = $_POST['jam_buka'];
                $harga = $_POST['harga'];

                //Pastikan sesuai dengan alamat endpoint dari REST API di ubuntu
                $url='http://192.168.0.99/psait/sait_project_api_enji/tempat_wisata_api.php';
                $ch = curl_init($url);
                // data yang akan dikirim ke REST api, dengan format json
                $jsonData = array(
                    'tempat_wisata' =>  $tempat_wisata,
                    'jam_buka' =>  $jam_buka,
                    'harga' =>  $harga,
                );

                //Encode the array into JSON.
                $jsonDataEncoded = json_encode($jsonData);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                //pastikan mengirim dengan method POST
                curl_setopt($ch, CURLOPT_POST, true);

                //Attach our encoded JSON string to the POST fields.
                curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonDataEncoded);

                //Set the content type to application/json
                curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); 

                //Execute the request
                $result = curl_exec($ch);
                $result = json_decode($result, true);

                curl_close($ch);

                //var_dump($result);
                // tampilkan return statusnya, apakah sukses atau tidak
                print("<center class='text-white'><br>Status :  {$result["status"]} "); 
                print("<br>");
                print("Message :  {$result["message"]} "); 
                print("<br>");

                }
                ?>
                <br>
                <div class='alert alert-success'>
                Sukses terkirim ke ubuntu server !
                <br>
                <a href=index.php#wisata_hits> OK </a>
                
        </section>
        
        <!-- Signup-->
        <!-- Footer-->
        <footer class="footer bg-black small text-center text-white-50"><div class="container px-4 px-lg-5">Copyright &copy; Anggraini D 2022</div></footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>

