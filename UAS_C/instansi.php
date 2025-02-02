<!DOCTYPE html>
<?php
include 'konek.php';
?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home | PUBLIK!!!</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Amatic+SC:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Yummy
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/yummy-bootstrap-restaurant-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <!-- ======= Navbar dan Home ======= -->
    <?php
    include 'navbar.php';
    ?>
    <!-- End Navbar-->


    <section>
        <div >
            <h1 style="text-align: center;"><span>INSTANSI YANG TERHUBUNG</span></h1>
        </div>
        <BR><br>

        <div class="container">
            <div class="card">
                <table class="table table-striped-columns table-hover align-middle">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Instansi</th>
                            <th scope="col">Tipe Instansi</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = mysqli_query($konek, 'SELECT * FROM tb_instansi');
                        $no = 1;
                        while ($data = mysqli_fetch_array($sql)) {
                            ?>
                            <tr>
                                <th scope="row">
                                    <?php echo $no; ?>
                                </th>
                                <td>


                                    <a href="<?php echo $data['link']; ?>">
                                        <?php echo $data['nama_instansi']; ?>
                                    </a>


                                </td>
                                <td>
                                    <?php echo $data['tipe_instansi']; ?>
                                </td>
                                <td align="center" valign="middle">
                                    <img src="gambar/instansi/<?php echo $data['gambar']; ?>" alt="" style="width: 150px;">
                                </td>
                            </tr>
                            <?php
                            $no++;
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <main id="main">

        <!-- ======= About Section ======= -->

        <!-- ======= Why Us Section ======= -->

        <!-- ======= Stats Counter Section ======= -->

        <!-- ======= Menu Section ======= -->


        <!-- ======= Testimonials Section ======= -->


        <!-- ======= Events Section ======= -->

        <!-- ======= Chefs Section ======= -->


        <!-- ======= Book A Table Section ======= -->
        <!-- End Book A Table Section -->

        <!-- ======= Gallery Section ======= -->
        <!-- End Gallery Section -->

        <!-- ======= Contact Section ======= -->
        <!-- End Contact Section -->

    </main><!-- End #main -->

    <?php
    include 'footer.php';
    ?>
    <!-- End Footer -->

    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>