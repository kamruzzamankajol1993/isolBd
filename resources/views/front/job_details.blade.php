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
                <h2>Mission</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="card">
                <div class="card-body custom_form_color">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row details_page_header">
                                <div class="col-1">
                                    <img src="https://ojcrew.com/wp-content/themes/oj/img/dot_red_blue.png">
                                </div>
                                <div class="col-11">
                                    <h3>INFO ABOUT THE JOB</h3>
                                </div>
                                <div class="col-12 mt-3">
                                    <h2>{{ $jobListAll->job_title_id }}</h2>
                                    <p>{{ $jobListAll->agency_name }}</p>
                                </div>
                            </div>

                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <div>
                                            <p>
                                                <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png"
                                                     alt="">
                                                € {{ $jobListAll->salary }} </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p>
                                                <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png"
                                                     alt="">
                                                     {{ $jobListAll->job_location }} </p>
                                        </div>
                                    </td>
                                    <td>
                                        <div>
                                            <p>
                                                <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png"
                                                     alt="">
                                                     {{ $jobListAll->job_contract_type }}</p>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                            <table class="table table-borderless">
                                <tr>
                                    <td>
                                        <p>ID: {{ $jobListAll->job_main_id }}</p>

                                        <p>Posted date: {{ date('F m, Y', strtotime($jobListAll->post_date)) }}</p>

                                        <p>Expiry date: {{ date('F m, Y', strtotime($jobListAll->expire_date)) }}</p>

                                    </td>
                                    <td>
                                        <p>Minimum experience:  {{ $jobListAll->job_experience }}</p>

                                        <p>Contract type: {{ $jobListAll->job_type }}</p>

                                        <p>Type of vessel: {{ $jobListAll->job_category_id }}</p>
                                    </td>
                                </tr>

                            </table>


                            <h5>Job Description</h5>

                            {!! $jobListAll->description !!}

                            <p>Please apply online to or send your CV to: <a href="#">oil@ojcrew.com</a></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="row details_page_header">
                                <div class="col-1">
                                    <img src="https://ojcrew.com/wp-content/themes/oj/img/dot_red_blue.png">
                                </div>
                                <div class="col-11">
                                    <h3>APPLY FOR THIS JOB</h3>
                                </div>
                            </div>
                            <form action="" class="mt-3">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <input class="form-control" type="text" placeholder="surname">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <input class="form-control" type="number" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-12">
                                        <div class="mb-3">
                                            <input class="form-control" type="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="mb-3">
                                            <textarea name="" class="form-control" id="" cols="30" rows="10"
                                                      placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-sm-12">
                                        <div class="mb-3">
                                            <label for="" class="form-label">
                                                Attach CV and Certificates (only .pdf, .doc, .jpg, .pdf file formats are
                                                supported)
                                            </label>
                                            <input class="form-control" type="file" placeholder="Email">
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid gap-2 mt-4">
                                    <button style="background-color:#ff0000; padding:16px;" class="btn btn-success"
                                            type="button">Send Application
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="r-line"></div>

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
