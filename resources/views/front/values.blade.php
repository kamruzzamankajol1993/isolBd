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
                <h2>Our Values</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-lg-12 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/Value_1.jpeg" style="width:100%;" alt="">
                    </div>
                </div>
               <div class="col-lg-12 mt-5 d-flex flex-column justify-content-center inquiry-content">
                    <div class="section-title">
                        <h2>Our values encompass two primary aspects:</h2>
                    </div>
                    <div class="mission_statement">
                        <ul>
                            <li>
                                ISOL values the exceptional skills and professionalism of Bangladeshi seafarers, showcasing their
talents globally. By upholding our nation&#39;s maritime workforce reputation, we contribute to industry
standards and worldwide recognition of Bangladeshi seafarers. Our dedication to clients involves
providing comprehensive support, resources, and expertise for easy access to skilled seafarers,
fostering strong relationships and industry growth.
                            </li>
                            <li>
                                To enhance our commitment to the Global Marine Industry and Cruise Liner sector, ISOL&#39;s core
values revolve around two primary aspects: promoting Bangladeshi seafarers&#39; excellence and offering
unwavering client support. By focusing on these values, we maintain our leading position in the
industry and nurture the professionalism of Bangladeshi seafarers.
                            </li>
                            <li>
                                ISOL&#39;s dedication to clients includes helping them fulfill seafarer requirements through
comprehensive support, resources, and expertise. This commitment ensures easy access to skilled
seafarers, fostering strong relationships and contributing to the maritime industry&#39;s growth.
Additionally, ISOL invests in workforce development, promoting collaboration and innovation, and
engaging with educational institutions and industry associations to attract future talent in the sector.
                            </li>
                        </ul>
                    </div>
                    <div class="section-title mt-4">
                        <h2>Customer Focus:</h2>
                        <p>Our esteemed clients are the cornerstone of our success. We pledge to treat every client with respect,
courtesy, and empathy. We are committed to meeting your needs and prioritizing your satisfaction.</p>
                        <h4 style="text-decoration: underline; padding-top: 15px;">This is what we do and advise for an applicant:</h4>
                        <p>We are here to support you throughout your journey:</p>
                        <div class="row mt-5">
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Help</h4>
                                    <p style="text-align:justify">Our team is available 24/7 to attend to your needs, listen, and understand your

expectations.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Assist</h4>
                                    <p style="text-align:justify">Our competent HR Manager will meticulously evaluate crew CVs and provide guidance on

the best steps to secure employment.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Support</h4>
                                    <p style="text-align:justify">We not only provide you with leads on latest cruise ship jobs, but also valuable

information and support for job seekers.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Offer Tips</h4>
                                    <p style="text-align:justify">We go beyond by offering you the latest cruise ship job leads and valuable information to

support your job search.</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Guide</h4>
                                    <p style="text-align:justify">To increase your chances of success, we advise you to conduct thorough research on
working in the cruise ship industry, adapt to the job requirements, and present a well-
crafted</p>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                                <div class="mission_statement custom_height_value">
                                    <h4>Advice</h4>
                                    <p style="text-align:justify">After exploring our cruise liner website and finding a suitable opportunity, ensure to
update your CV to showcase your suitability for the role. Remember, recruiters often
make quick decisions based on your CV, so make it clear, concise, informative, and visually
appealing</p>
                                </div>
                            </div>
                        </div>
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
