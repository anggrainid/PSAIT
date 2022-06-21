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
        <header class="masthead" id="masthead">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="d-flex justify-content-center">
                    <div class="text-center">
                        <h1 class="mx-auto my-0 text-uppercase">WeStyle</h1>
                        <h2 class="text-white-50 mx-auto mt-2 mb-5">Info terkini seputar gaya hidup seperti tempat wisata, fashion, dan sebagainya.</h2>
                        <a class="btn btn-primary" href="#tempat_wisata">Yuk Jelajahi Tempat Wisata Hits</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About
        <section class="about-section text-center" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Built with Bootstrap 5</h2>
                        <p class="text-white-50">
                            Grayscale is a free Bootstrap theme created by Start Bootstrap. It can be yours right now, simply download the template on
                            <a href="https://startbootstrap.com/theme/grayscale/">the preview page.</a>
                            The theme is open source, and you can use it for any purpose, personal or commercial.
                        </p>
                    </div>
                </div>
                <img class="img-fluid" src="assets/img/ipad.png" alt="..." />
            </div>
        </section>
        -->
        <!-- Projects-->
        <section class="projects-section bg-light" id="berita_gayahidup">
            <div class="container px-4 px-lg-5">
                <!-- Featured Project Row
                <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
                    <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
                    <div class="col-xl-4 col-lg-5">
                        <div class="featured-text text-center text-lg-left">
                            <h4>Shoreline</h4>
                            <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                        </div>
                    </div>
                </div>
                -->
                <!-- Project One Row-->
                <?php
                    $curl= curl_init();
                    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                    //Pastikan sesuai dengan alamat endpoint dari REST API di UBUNTU, 
                    curl_setopt($curl, CURLOPT_URL, 'https://api-berita-indonesia.vercel.app/antara/lifestyle/');
                    $res = curl_exec($curl);
                    $json = json_decode($res, true);

                    for ($i = 0; $i < count($json["data"]["posts"]); $i++){
                        if ($i % 2 == 0){
                ?>

                        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
                            <div class="col-lg-6"><a href="<?php echo $json["data"]["posts"][$i]["link"]?>"><img class="img-fluid" width="700px" height="500px" src="<?php echo $json["data"]["posts"][$i]["thumbnail"]?>" alt="..." /></a></div>
                            <div class="col-lg-6">
                                <div class="bg-black text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-left">
                                            <h4 class="text-white"><?php echo $json["data"]["posts"][$i]["title"]?></h4>
                                            <p class="mb-0 text-white-50"><?php echo $json["data"]["posts"][$i]["description"]?></p>
                                            <span class="text-white"><?php echo $json["data"]["posts"][$i]["pubDate"]?></span>
                                            <hr class="d-none d-lg-block mb-0 ms-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                        }else{
                ?>
                        <div class="row gx-0 justify-content-center">
                            <div class="col-lg-6"><a href="<?php echo $json["data"]["posts"][$i]["link"]?>"><img class="img-fluid" width="700px" height="500px" src="<?php echo $json["data"]["posts"][$i]["thumbnail"]?>" alt="..." /></a></div>
                            <div class="col-lg-6 order-lg-first">
                                <div class="bg-black text-center h-100 project">
                                    <div class="d-flex h-100">
                                        <div class="project-text w-100 my-auto text-center text-lg-right">
                                            <h4 class="text-white"><?php echo $json["data"]["posts"][$i]["title"]?></h4>
                                            <p class="mb-0 text-white-50"><?php echo $json["data"]["posts"][$i]["description"]?></p>
                                            <span class="text-white"><?php echo $json["data"]["posts"][$i]["pubDate"]?></span>
                                            <hr class="d-none d-lg-block mb-0 me-0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php

                        }

                ?>  

                <?php
                    }
                ?>
            </div>
        </section>
        <!-- Daftar Harga -->
        <section class="about-section text-center" id="wisata_hits" style="padding-top: 150px; padding-bottom: 150px;">
            <div class="container px-4 px-lg-5 d-flex h-100 align-items-center justify-content-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8">
                        <h2 class="text-white mb-4">Tempat Wisata Hits</h2>
                        <p class="text-white-50 mb-4">
                            Nah, ini dia info mengenai tempat-tempat wisata yang lagi hits banget dilengkapi dengan jam buka dan harganya untuk menyesuaikan budget terlebih dahulu agar liburan berjalan lancar.
                        </p>
                        <table class="table table-bordered">
                            <thead class="text-white-50">
                              <tr>
                                <th scope="col">No</th>
                                <th scope="col">Tempat Wisata</th>
                                <th scope="col">Jam Buka</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Aksi</th>
                              </tr>
                            </thead>
                            <?php
                            $curl= curl_init();
                            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
                            //Pastikan sesuai dengan alamat endpoint dari REST API di UBUNTU, 
                            curl_setopt($curl, CURLOPT_URL, 'http://192.168.0.99/psait/sait_project_api_enji/tempat_wisata_api.php');
                            $res = curl_exec($curl);
                            $json = json_decode($res, true);

                            for ($i = 0; $i < count($json["data"]); $i++){
                                echo "<tbody class='text-white-50'><tr>
                                  <th scope='row'>" . $json["data"][$i]["id"]. "</th>
                                  <td>" . $json["data"][$i]["tempat_wisata"] . "</td>
                                  <td>" . $json["data"][$i]["jam_buka"] . "</td>
                                  <td>" . number_format($json["data"][$i]["harga"],2,",",".") . "</td>
                                  <td>
                                  <a href='updateWisataView.php?id=". $json["data"][$i]["id"] ."' class='mr-3' title='Update Record' data-toggle='tooltip'><span class='fa fa-pencil'></span></a>
                                  <a href='deleteWisataDo.php?id=". $json["data"][$i]["id"] ."' title='Delete Record' data-toggle='tooltip'><span class='fa fa-trash'></span></a>    
                                  </td>
                                    </tr></tbody>";
                                       
                            }
                            ?>

                        </table>
                        <br>
                        <a href="insertWisataView.php" class="btn btn-primary" role="button">Tambah Tempat Wisata Hits<i class="fa fa-plus"></i></a>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Form Pemesanan -->

        <section class="projects-section bg-light" id="pesan_tiket">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <a href="form-input.php" class="btn btn-primary" role="button">Pesan Tiket</a>
                    </div>
                </div>
            </div>
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
