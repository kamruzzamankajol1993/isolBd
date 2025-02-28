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
                <h2>interview Appointment & meeting Schedule</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-sm-12">
                    <h1>Appointment & Meeting Schedule</h1>
                    
                    @include('flash_message')

                    <p>Please contact us to schedule an official meeting appointment, and we will get in touch with you
                        to provide available dates. However, please note that walk-ins are not accommodated at the ISOL
                        office, so you should schedule a meeting appointment through our website for face-to-face
                        conversations. If you match one of our positions, we will contact you by email to schedule an
                        online interview.</p>

                    <form method="post" action="{{ route('interview_appointment_meeting_schedulePost') }}" enctype="multipart/form-data">
@csrf
                        <label class="form-label mt-3" for="fname">First Name</label>
                        <input class="form-control" type="text" id="" name="first_name" required>

                        <label class="form-label mt-3" for="lname">Last Name</label>
                        <input class="form-control" type="text" id="" name="last_name" required>

                        <label class="form-label mt-3" for="mobile">Mobile Number</label>
                        <input class="form-control" type="tel" id="" name="mobile_number" required>

                        <label class="form-label mt-3" for="email">Email Address</label>
                        <input class="form-control" type="email" id="" name="email_address" required>

                        <label class="form-label mt-3" for="message">Message</label>
                        <textarea class="form-control" id="" cols="30" rows="5" name="msg" required></textarea>

                        <div class="mt-3">
                            <label class="form-label" for="message">To make an interview appointment or schedule a
                                meeting, please download the CV format. Fill out the form and upload it below to
                                complete
                                the appointment process. </label>
                            <a target="_blank" href="{{route('demoFormat')}}" class="btn btn-primary mb-3">Download CV</a>
                        </div>
                        <label class="form-label mt-3" for="email">CV Upload</label>
                        <input class="form-control" name="cv" type="file" required>


                        <button class="btn btn-lg btn-success mt-5" type="submit">Submit Complaint</button>
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
