<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISOL</title>


    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/vendor/fontawesome/css/all.min.css">
    <link href="{{ asset('/') }}public/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}public/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}public/front/assets/css/middle_header.css">


    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/') }}public/front/assets/vendor/slick/slick-theme.css">

    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"> <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet"> <!-- Google fonts -->
</head>
<body>

<!-- Header -->
@include('front.include.top_header')

<main>
    <!-- ======= Page Top Section ======= -->
    <section class="page_top_section">
        <div class="container">
            <div class="page-header my-auto">
                <h2>Our Mission</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/Mission_1.png" style="width:100%;" alt="">
                    </div>
                </div>
                <div class="col-lg-12 mt-5 d-flex flex-column justify-content-center inquiry-content">
                    <h2>Our mission is centered around key objectives:</h2>


                    <div class="mission_statement">
                        <ul>
                            <li>Our primary objective is to become the leading provider of highly skilled, ISOL seafarers within the
global maritime sector, emphasizing optimal health, safety, and work environment standards. We are
committed to offering ISOL seafarers who not only demonstrate necessary expertise but also
prioritize the well-being of themselves and their colleagues. By concentrating on these vital aspects,
we aim to revolutionize industry benchmarks and contribute to a more secure, health-conscious, and
collaborative work environment for all seafarers.</li>
                            <li>
                                We are dedicated to supplying a highly professional and well-trained ISOL crew workforce, upholding
integrity in our operations. This commitment involves consistently investing in the ongoing
education, training, and development of our ISOL seafarers, ensuring they are well-versed in cutting-
edge knowledge and techniques. By doing so, we strive to provide clients with a highly skilled and
dedicated ISOL workforce that maintains the highest standards of professionalism and integrity,
fostering long-lasting relationships built on trust and mutual respect.
                            </li>
                            <li>
                                As an industry leader in delivering exceptional ISOL seafarers for the global maritime sector, we
prioritize the well-being and safety of our ISOL workforce while supplying a highly professional crew.
We achieve this by focusing on quality assurance, health and safety protocols, and fostering a
supportive work environment, consistently investing in our ISOL seafarers&#39; continuous education,
training, and development, and nurturing strong relationships based on trust and mutual respect.
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- End Mission Vision Section -->
</main>


<!-- ======= Footer ======= -->
@include('front.include.footer')

<script src="{{ asset('/') }}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
