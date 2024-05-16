<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISOL</title>


    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/vendor/fontawesome/css/all.min.css">
    <link href="{{asset('/')}}public/front/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{asset('/')}}public/front/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/css/style.css">
    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/css/middle_header.css">


    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/assets/vendor/slick/slick-theme.css">

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
                <h2>Career Navigation</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="card-body">
                        <img src="{{ asset('/') }}public/front/assets/img/career_navigation.png" style="width:100%;" alt="">
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 mt-5">
                    <p>Career Navigator is a valuable tool designed to assist seafarers in advancing their careers by
providing personalized action plans and growth opportunities. This innovative system takes into
account the individual interests and goals of each mariner, ensuring that they receive tailored
recommendations for their professional development.</p>
                </div> 
                <div class="col-lg-12 col-md-12 col-sm-12 mb-4">

                    <div class="expert_box">

                        <div class="section-title">
                            <h2>To make the most out of Career Navigator, seafarers should follow these steps:</h2>
                        </div>
                        <ol class="oll">
                            <li><span>
                                Understand Career Navigator: Familiarize yourself with the platform and its purpose, which
is to help you identify and achieve your career objectives.
                            </span></li>
                            <li><span>
                                Get Your Action Plan: Access the platform and follow the prompts to create a personalized
action plan based on your interests and goals.
                            </span></li>
                            <li><span>
                                Customizable Action Items: Review the recommended action steps and adjust them
according to your preferences and priorities. This flexibility allows you to focus on the most
relevant and meaningful growth opportunities.
                            </span></li>
                            <li><span>
                                Learn, Do, Engage: Career Navigator offers a diverse range of action steps, including
watching videos, attending local events, and applying new frameworks to your work.
Engaging in these activities will contribute to your professional growth and development.
                            </span></li>
                            <li><span>
                                Grow Every Day: Consistently work on your action items, making decisions based on the
time required and the importance of each task to you. Gradually, you will see progress in
your career.
                            </span></li>
                            <li><span>
                                Progress Tracking: Regularly monitor your career development progress through Career
Navigator&#39;s tracking system. This feature helps you stay on course and celebrate your
achievements.
                            </span></li>
                            <li><span>
                                Recommendation Engine Update: As you complete action items and make progress, Career
Navigator will adapt its recommendation engine to provide even more relevant and
effective growth opportunities for your future.
                            </span></li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <p>
                        By employing Career Navigator and adhering to these steps, mariners can effectively advance
their careers, maintain their objectives, and continually enhance their professional
competencies. ISOL, as a career navigation consultant, remains readily accessible for
consultations once you register online.
                    </p>
                </div> 
            </div>
        </div>
    </section>

    <!-- End Mission Vision Section -->
</main>


<!-- ======= Footer ======= -->
@include('front.include.footer')

<script src="{{asset('/')}}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('/')}}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
