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
                <h2>Complain Form</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-sm-12">
                    @include('flash_message')

                    <form method="post" action="{{ route('complainPost') }}" enctype="multipart/form-data">
@csrf
                        <label class="form-label mt-3" for="fname">First Name</label>
                        <input class="form-control" type="text" id="" name="first_name" required>

                        <label class="form-label mt-3" for="lname">Last Name</label>
                        <input class="form-control" type="text" id="" name="last_name" required>

                        <label for="mobile" class="form-label mt-3">Mobile Number</label>
                        <input class="form-control" type="tel" id="" name="mobile_number" required>

                        <label for="email" class="form-label mt-3">Email Address</label>
                        <input class="form-control" type="email" id="" name="email_address" required>

                        <label for="subject" class="form-label mt-3">Subject</label>
                        <select class="form-control" id="" name="subject" required>
                            <option value="" disabled selected>Select a subject</option>
                            <option value="Fraudulent activities with colleagues or crew members from ISOL">Have you
                                been involved in fraudulent activities with colleagues or crew members from ISOL?
                            </option>
                            <option value="ISOL employees charging for services against MLC 2006 regulations">Have ISOL
                                employees charged you for services, despite the fact that according to MLC 2006, you are
                                not permitted to pay any fees?
                            </option>
                            <option value="Service staff issues to bring to the attention of management">Do you have any
                                service staff issues that you would like to bring to the attention of management?
                            </option>
                            <option value="Complaint about overall services from ISOL">Do you have any complaints
                                regarding the overall services provided by ISOL?
                            </option>
                            <option value="Complaint about the treatment received from the cruise company">Do you have
                                any complaints about the treatment received from the cruise company, which you believe
                                does not align with their policies and procedures?
                            </option>
                            <option value="Discrimination or harassment from Ships company employees or crew members">
                                Have you experienced any discrimination or harassment from employees or crew members of
                                the cruise ship company?
                            </option>
                            <option value="Dissatisfaction with the quality or condition of accommodations provided by current employer">
                                Are you dissatisfied with the quality or condition of accommodations provided by your
                                current employer?
                            </option>
                            <option value="Encountering safety concerns or incidents while onboard a vessel operated by ISOL">
                                Have you encountered any safety concerns or incidents while onboard a vessel operated by
                                ISOL?
                            </option>
                            <option value="Belief that ISOL has failed to fulfill contractual obligations or provide adequate support">
                                Do you believe ISOL has failed to fulfill its contractual obligations or provide
                                adequate support?
                            </option>
                            <option value="Facing difficulties in obtaining necessary medical care or assistance while working onboard the ship">
                                Are you facing difficulties in obtaining necessary medical care or assistance while
                                working onboard the ship?
                            </option>
                            <option value="Other issues">Please explain any other issues you would like to address.
                            </option>
                        </select>

                        <label for="message" class="form-label mt-3">Message</label>
                        <textarea class="form-control" id="" cols="30" rows="10" name="msg" required></textarea>

                        <button class="btn btn-lg btn-success mt-5" type="submit">Submit Complain</button>
                    </form>

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
