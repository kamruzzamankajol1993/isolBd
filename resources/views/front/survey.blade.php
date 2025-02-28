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
                <h2>Survey</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-sm-12">
                    <h1>Crew Satisfaction Survey</h1>
                    @include('flash_message')
                    <p>As a recruitment and processing agency, ISOL is committed to being your trusted partner. Your
                        feedback is crucial in helping us achieve our goal of providing excellent staffing services at
                        no cost to you. By sharing your experiences and expectations, you will provide valuable insights
                        that will enable us to enhance our engagement efforts. The survey has been tailored to meet your
                        needs, aiming to effectively gather your feedback.</p>
                    <p>We estimate that the survey will only take 5 minutes to complete, and we kindly ask that you
                        answer all questions. Your responses will remain completely anonymous. If you need any
                        assistance in completing the survey, please do not hesitate to reach out to us.</p>
                    <p>We sincerely appreciate your time and input. Your contribution truly makes a difference!</p>

                    <h2>Questions</h2>

<form method="post" action="{{route('surveyPost')}}">
    @csrf
                    <ol>
                        <li>
                            <p>What is your current employment status?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="First employment with a cruise ship" type="radio" name="employee_status" id="">
                                <label class="form-check-label" for="">
                                    First employment with a cruise ship
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="Previously worked for other cruise lines" type="radio" name="employee_status" id="" checked>
                                <label class="form-check-label" for="">
                                    Previously worked for other cruise lines
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>What is your total employment period with the Company?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="New Hire (first contract)" type="radio" name="duration" id="" checked>
                                <label class="form-check-label" for="">
                                    New Hire (first contract)
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="Less than 2 years" type="radio" name="duration" id="">
                                <label class="form-check-label" for="">
                                    Less than 2 years
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2-5 Years" type="radio" name="duration" id="">
                                <label class="form-check-label" for="">
                                    2-5 Years
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="More than 5 years" type="radio" name="duration" id="">
                                <label class="form-check-label" for="">
                                    More than 5 years
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="More than 10 years" type="radio" name="duration" id="">
                                <label class="form-check-label" for="">
                                    More than 10 years
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="More than 15 years" type="radio" name="duration" id="">
                                <label class="form-check-label" for="">
                                    More than 15 years
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="More than 20 years" type="radio" name="duration" id="">
                                <label class="form-check-label" for="">
                                    More than 20 years
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>On a scale of 1-5, how much do you enjoy working for the Company?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="1" type="radio" name="enjoy_rating" id="">
                                <label class="form-check-label" for="">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2" type="radio" name="enjoy_rating" id="">
                                <label class="form-check-label" for="">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="3" type="radio" name="enjoy_rating" id="">
                                <label class="form-check-label" for="">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="4" type="radio" name="enjoy_rating" id="">
                                <label class="form-check-label" for="">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="5" type="radio" name="enjoy_rating" id="">
                                <label class="form-check-label" for="">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>On a scale of 1-5, how well does your supervisor/manager encourage teamwork?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="1" type="radio" name="encourage_rating" id="">
                                <label class="form-check-label" for="">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2" type="radio" name="encourage_rating" id="">
                                <label class="form-check-label" for="">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="3" type="radio" name="encourage_rating" id="">
                                <label class="form-check-label" for="">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="4" type="radio" name="encourage_rating" id="">
                                <label class="form-check-label" for="">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="5" type="radio" name="encourage_rating" id="">
                                <label class="form-check-label" for="">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>On a scale of 1-5, how would you rate the teamwork in your department?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="1" type="radio" name="teamwork_rating" id="">
                                <label class="form-check-label" for="">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2" type="radio" name="teamwork_rating" id="">
                                <label class="form-check-label" for="">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="3" type="radio" name="teamwork_rating" id="">
                                <label class="form-check-label" for="">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="4" type="radio" name="teamwork_rating" id="">
                                <label class="form-check-label" for="">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="5" type="radio" name="teamwork_rating" id="">
                                <label class="form-check-label" for="">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>On a scale of 1-5, how fair and respectful do you feel treated by your
                                supervisor/manager?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="1" type="radio" name="respect_rating" id="">
                                <label class="form-check-label" for="">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2" type="radio" name="respect_rating" id="">
                                <label class="form-check-label" for="">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="3" type="radio" name="respect_rating" id="">
                                <label class="form-check-label" for="">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="4" type="radio" name="respect_rating" id="">
                                <label class="form-check-label" for="">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="5" type="radio" name="respect_rating" id="">
                                <label class="form-check-label" for="">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>On a scale of 1-5, do you feel that your supervisor/manager is interested in listening to
                                your concerns?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="1" type="radio" name="listen_rating" id="">
                                <label class="form-check-label" for="">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2" type="radio" name="listen_rating" id="">
                                <label class="form-check-label" for="">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="3" type="radio" name="listen_rating" id="">
                                <label class="form-check-label" for="">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="4" type="radio" name="listen_rating" id="">
                                <label class="form-check-label" for="">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="5" type="radio" name="listen_rating" id="">
                                <label class="form-check-label" for="">
                                    5
                                </label>
                            </div>
                        </li>
                        <li class="pt-3">
                            <p>On a scale of 1-5, do you believe that your supervisor/manager provides you with enough
                                training and supports your career development?</p>
                            <div class="form-check">
                                <input   class="form-check-input" value="1" type="radio" name="support_rating" id="">
                                <label class="form-check-label" for="">
                                    1
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="2" type="radio" name="support_rating" id="">
                                <label class="form-check-label" for="">
                                    2
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="3" type="radio" name="support_rating" id="">
                                <label class="form-check-label" for="">
                                    3
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="4" type="radio" name="support_rating" id="">
                                <label class="form-check-label" for="">
                                    4
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" value="5" type="radio" name="support_rating" id="">
                                <label class="form-check-label" for="">
                                    5
                                </label>
                            </div>
                        </li>
                        <li>
                            <p>What benefits do you appreciate the most? (Multiple answers possible)</p>

                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Salary" id="">
                                <label class="form-check-label" for="">
                                    Salary
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Promotion" id="" checked>
                                <label class="form-check-label" for="">
                                    Promotion
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Food" id="">
                                <label class="form-check-label" for="">
                                    Food
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Cabin" id="">
                                <label class="form-check-label" for="">
                                    Cabin
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Crew welfare activities (Parties, Bingo, etc.)" id="">
                                <label class="form-check-label" for="">
                                    Crew welfare activities (Parties, Bingo, etc.)
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Crew facilities (Crew Bar, Crew Gym, etc.)" id="">
                                <label class="form-check-label" for="">
                                    Crew facilities (Crew Bar, Crew Gym, etc.)
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Free social media plan" id="">
                                <label class="form-check-label" for="">
                                    Free social media plan
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Crew tours" id="">
                                <label class="form-check-label" for="">
                                    Crew tours
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Time/day off" id="">
                                <label class="form-check-label" for="">
                                    Time/day off
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Training & learning opportunities" id="">
                                <label class="form-check-label" for="">
                                    Training & learning opportunities
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="benefit[]" type="checkbox" value="Recognition from manager(s)" id="">
                                <label class="form-check-label" for="">
                                    Recognition from manager(s)
                                </label>
                            </div>
                        </li>
                        <li>
                            <p>What reasons keep you loyal to the Company and make you return for another contract?
                                (Multiple answers possible)</p>

                            <div class="form-check">
                                <input   class="form-check-input" name="loyal[]" type="checkbox" value="Salary" id="">
                                <label class="form-check-label" for="">
                                    Salary
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="loyal[]" type="checkbox" value="Promotion" id="">
                                <label class="form-check-label" for="">
                                    Promotion
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input"  name="loyal[]" type="checkbox" value="Colleagues and friends" id="">
                                <label class="form-check-label" for="">
                                    Colleagues and friends
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="loyal[]" type="checkbox" value="Management team" id="">
                                <label class="form-check-label" for="">
                                    Management team
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="loyal[]" type="checkbox" value="Feeling of being part of the family away from home" id="">
                                <label class="form-check-label" for="">
                                    Feeling of being part of the family away from home
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="loyal[]" type="checkbox" value="Not finding another job" id="">
                                <label class="form-check-label" for="">
                                    Not finding another job
                                </label>
                            </div>
                        </li>
                        <li>
                            <p>What reasons would you consider leaving the Company? (Multiple answers possible)</p>

                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Higher salary at another company" id="">
                                <label class="form-check-label" for="">
                                    Higher salary at another company
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Not getting promoted" id="">
                                <label class="form-check-label" for="">
                                    Not getting promoted
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Not feeling supported by supervisor/manager(s)" id="">
                                <label class="form-check-label" for="">
                                    Not feeling supported by supervisor/manager(s)
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Not feeling part of the team" id="">
                                <label class="form-check-label" for="">
                                    Not feeling part of the team
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Not feeling appreciated" id="">
                                <label class="form-check-label" for="">
                                    Not feeling appreciated
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Needing to work overtime" id="">
                                <label class="form-check-label" for="">
                                    Needing to work overtime
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Not having enough time off" id="">
                                <label class="form-check-label" for="">
                                    Not having enough time off
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="" id="">
                                <label class="form-check-label" for="">
                                    Too much stress and pressure
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="Not liking the food in the Mess" id="">
                                <label class="form-check-label" for="">
                                    Not liking the food in the Mess
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" name="leaving[]" type="checkbox" value="No retirement benefits" id="">
                                <label class="form-check-label" for="">
                                    No retirement benefits
                                </label>
                            </div>
                        </li>
                        <li>
                            <p>If you decide not to return for another contract, would you inform your management team
                                on board before signing off?</p>

                            <div class="form-check">
                                <input   class="form-check-input" type="radio" value="Yes" name="contract" id="">
                                <label class="form-check-label" for="">
                                    Yes
                                </label>
                            </div>
                            <div class="form-check">
                                <input   class="form-check-input" type="radio" value="No" name="contract" id="">
                                <label class="form-check-label" for="">
                                    No
                                </label>
                            </div>
                        </li>
                        <li>
                            <p>What benefits would you like to have that we currently do not offer? (Free text box)</p>
                            <input   class="form-control" type="text" id="" name="do_not_offer">
                        </li>
                        <li>
                            <p>If you could change one thing on board, what would that be? (Free text box)</p>
                            <input   type="text" id="" class="form-control" name="onBoard">
                        </li>
                    </ol>

                    <button class="btn btn-lg btn-success mt-5" type="submit">Submit Survey</button>
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
