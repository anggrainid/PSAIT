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
        <section class="about-section" style="padding-top:150px; padding-bottom:150px; background: linear-gradient(to bottom, #000 0%, rgba(0, 0, 0, 0.9) 75%, rgba(0, 0, 0, 0.8) 100%);" id="about">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h2 class="text-white">Tambah Wisata Hits!</h2>
                    <hr class="divider" />
                    <p class="text-white mb-5" style="margin-bottom: 5rem;">Yuk lengkapi form di bawah ini untuk menambahkan data tempat wisata hits!</p>
                </div>
            </div>
            <form method="post" action="insertWisataDo.php" class="text-white">
            <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Tempat Wisata</label>
                <div class="col-sm-10">
                <input  type="text" name="tempat_wisata" class="form-control" id="tempat_wisata" required>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Jam Buka</label>
                <div class="col-sm-10">
                <input type="text" name="jam_buka" class="form-control" id="jam_buka" required>
                </div>
            </div>
            <br>
            <div class="form-group row">
                <label for="nama_lengkap" class="col-sm-2 col-form-label">Harga</label>
                <div class="col-sm-10">
                <input type="text" name="harga" class="form-control" id="harga" required>
                </div>
            </div>
            <br>
           
            <div class="form-group row">
                <div class="text-center">
                    <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
                    <a href="index.php" class="btn btn-primary" role="button">Cancel</a>
                </div>
            </div>
            </form>
            </div>
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

