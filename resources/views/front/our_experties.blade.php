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
                <h2>Our Expertise</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

<section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/experties.png" style="width:100%;" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4" style="text-align: justify">
                    <p>
                        An international staffing agency plays a pivotal role in connecting candidates with
job opportunities across various countries. These agencies offer numerous
benefits, such as global reach, industry expertise, cultural understanding,
streamlined processes, and flexible staffing solutions. When selecting an
international staffing agency, it is crucial to evaluate their reputation, experience,
industry specialization, as well as their expertise, consulting services, knowledge,
team, advice, trust, and research capabilities.
                    </p>
                    <p>
                        In the maritime industry, adherence to MLC Regulation 1.4 is essential, as it
ensures that seafarers are not burdened with any recruitment or placement fees.
This regulation is designed to safeguard the rights and welfare of seafarers during
the recruitment process.
                    </p>
                    <p>
                        ISOL, our organization, is committed to professionalism, accountability, and work
excellence while maintaining the highest industry standards. Our primary goal is
to offer the best job opportunities for candidates and ensure the well-being and
safety of seafarers. As we embark on our journey with ISOL, we have developed a
comprehensive candidate selection process that includes various assessments,
collaborations with global recruiting partners from around the world, and in-
depth interviews. By understanding and addressing the needs of both candidates
and clients, ISOL continues to strengthen its value as a leading recruitment and
HR managing organization in the industry, leveraging its expertise, consulting
services, knowledge, team, advice, trust, and research capabilities.
                    </p>
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
