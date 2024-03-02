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
                <h3>Interworld Shipping Overseas Limited</h3>
                <h2>CV Login Form</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body custom_form_color">
                            <div class="custom_form_div">
                                <form action="">
                                    <div class="form_header">
                                        <h3>All Details </h3>
                                        <p>We'll need these details in order to be able to contact you when a job is
                                            made available. </p>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">1. Tell us a little more about
                                            yourself.</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">2. Do you have any Seaman Book or Bangladesh
                                            CDC.</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="payment" id="yes" checked="checked"/>
                                                    <label for="yes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="payment" id="no"/>
                                                    <label for="no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="" class="form-text">(If the answer is yes, then describe the
                                            details.)
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Describe Details</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">3. Do you currently hold a passport that is
                                            valid for at least one year from the date of
                                            application?
                                        </label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">Yes, I have a passport that is valid for more than one
                                                year.
                                            </option>
                                            <option value="">No, I do not have a passport.</option>
                                            <option value="">I currently have a passport; however, it will expire within
                                                one year.
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">4. Are you currently fully vaccinated for
                                            COVID? (Full vaccination is typically a series of two shots plus a booster,
                                            depending on brand.)</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">Yes, I am fully vaccinated for COVID.</option>
                                            <option value="">No, I am not fully vaccinated for COVID.</option>
                                            <option value="">I am not currently fully vaccinated for COVID; however, I
                                                am willing to complete the series
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">5. When would you be interested in having your
                                            application for placement onboard considered?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">My schedule is negotiable. Either a placement that is more
                                                immediate or one that is made in two years interests me.
                                            </option>
                                            <option value="">Currently I am interested only in more immediate placement
                                                onboard.
                                            </option>
                                            <option value="">I'd like to be given priority consideration for subsequent
                                                onboard placement whenever a job replacement becomes available.
                                            </option>
                                            <option value="">My timing is flexible. I am interested in either more
                                                immediate or later placement.
                                            </option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">6. Do you have IELTS score certificate?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="ielts" id="yesielts" checked="checked"/>
                                                    <label for="yesielts">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="ielts" id="noielts"/>
                                                    <label for="noielts">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="" class="form-text">(If the answer is yes, then describe the
                                            details.)
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Describe Details</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">7. Do you have at least two years of prior work
                                            experience that is relevant to the position for which you are
                                            applying?</label>
                                        <div id="" class="form-text text-danger mb-3">(Your application won't be taken
                                            into consideration if you are lacking any
                                            relevant professional skills.)
                                        </div>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="experience" id="yesexperience"
                                                           checked="checked"/>
                                                    <label for="yesexperience">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="experience" id="noexperience"/>
                                                    <label for="noexperience">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="" class="form-text">(If the answer is yes, then describe the
                                            details.)
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Describe Details</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">8. Which country you dreamed to be settled in
                                            near future?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">USA</option>
                                            <option value="">Canada</option>
                                            <option value="">UK.</option>
                                            <option value="">Europe</option>
                                            <option value="">Australia</option>
                                            <option value="">New Zealand</option>
                                            <option value="">Japan</option>
                                            <option value="">NON</option>
                                            <option value="">I', proud to be a Bangladeshi-born person.</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">9. Why are you interested to work on
                                            ship?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">Working on a cruise ship is a great way to gain experience
                                                and skills that I can use in any career.
                                            </option>
                                            <option value="">I am passionate about travel, and I love the idea of being
                                                able to see the world while working.
                                            </option>
                                            <option value="">I'd like to visit my relatives and friends who live along
                                                the coast in the United States, Canada, Europe, the United Kingdom,
                                                Australia, New Zealand, or Japan.
                                            </option>
                                            <option value="">I have chosen not to answer.</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">10. Do you have any relative who is working in
                                            ship</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="relative" id="yesrelative"
                                                           checked="checked"/>
                                                    <label for="yesrelative">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="relative" id="norelative"/>
                                                    <label for="norelative">No</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="" class="form-text">(If the answer is yes, then describe the
                                            details.)
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">Describe Details</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">11. Did you pay any money to Interworld
                                            Shipping Overseas Limited (ISOL) or any other ISOL employee or Crewing Agent
                                            in Bangladesh to get this employment?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="isol" id="yesisol"
                                                           checked="checked"/>
                                                    <label for="yesisol">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="isol" id="noisol"/>
                                                    <label for="noisol">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">12. Would you pay someone, a fellow crew
                                            member, or a third-party agent to find a job for you?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="pay" id="payyes"
                                                           checked="checked"/>
                                                    <label for="payyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="pay" id="payno"/>
                                                    <label for="payno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">13. Did somebody assist you in filling out this
                                            computerized application for the aforementioned job?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="assist" id="assist_yes"
                                                           checked="checked"/>
                                                    <label for="assist_yes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="assist" id="assist_no"/>
                                                    <label for="assist_no">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">14. Do you have any cousin/friends/ relative
                                            working in USA, Canada, UK, Europe, Australia, New Zealand, or
                                            Japan </label>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                USA
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="" checked>
                                            <label class="form-check-label" for="">
                                                Canada
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                UK
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                Europe
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                Australia
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                New Zealand
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                Japan
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="">
                                            <label class="form-check-label" for="">
                                                NON
                                            </label>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">If the response is yes, please provide more
                                            information. 13 and 14.</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">15. What is your salary expectation?</label>
                                        <textarea class="form-control" id="" rows="4"
                                                  placeholder="About yourself"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">16. How did you hear about us?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">Search engines (other websites, blogs, videos, pictures)
                                            </option>
                                            <option value="">Internet ads.</option>
                                            <option value="">Social media.</option>
                                            <option value="">Fellow Crew</option>
                                            <option value="">Friends</option>
                                            <option value="">Advertise</option>
                                            <option value="">LinkedIn</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">17. Are you Married?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="married" id="marriedyes"
                                                           checked="checked"/>
                                                    <label for="marriedyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="married" id="marriedno"/>
                                                    <label for="marriedno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">18. What is your qualification?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">O level</option>
                                            <option value="">A level</option>
                                            <option value="">SSC</option>
                                            <option value="">HSC</option>
                                            <option value="">BA</option>
                                            <option value="">MBA</option>
                                            <option value="">HM</option>
                                            <option value="">NHTTI</option>
                                            <option value="">Others</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">19. Do you have any Hospitality Courses
                                            completed from any hotel school?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">a. Hotel Management</option>
                                            <option value="">b. NHTTI</option>
                                            <option value="">c. Certificate Course</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">20. Are you willing to work under pressure at
                                            sea motions?</label>
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Select here ...</option>
                                            <option value="">I work well under pressure because I use the pressure to
                                                help me work more efficiently
                                            </option>
                                            <option value=""> I enjoy working under pressure because I believe it helps
                                                me grow.
                                            </option>
                                            <option value="">I have chosen not to answer.</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">21. Have you ever been issued a U.S.
                                            Visa?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="visa" id="visayes"
                                                           checked="checked"/>
                                                    <label for="visayes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="visa" id="visano"/>
                                                    <label for="visano">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">22. Has your U.S. Visa ever been cancelled or
                                            revoked?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="revoked" id="revokedyes"
                                                           checked="checked"/>
                                                    <label for="revokedyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="revoked" id="revokedno"/>
                                                    <label for="revokedno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">23. Have you ever been refused a U.S. Visa, or
                                            been refused admission to the United States, or withdrawn your application
                                            for admission at the port of entry?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="refused" id="refusedyes"
                                                           checked="checked"/>
                                                    <label for="refusedyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="refused" id="refusedno"/>
                                                    <label for="refusedno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">24. Have you traveled to any countries/regions
                                            within the last 2 years?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="traveled" id="traveledyes"
                                                           checked="checked"/>
                                                    <label for="traveledyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="traveled" id="traveledno"/>
                                                    <label for="traveledno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">25. Are you a member or representative of a
                                            terrorist organization?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="representative" id="representativeyes"
                                                           checked="checked"/>
                                                    <label for="representativeyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="representative" id="representativeno"/>
                                                    <label for="representativeno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">26. Do you have police clearance
                                            certificate? </label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="clearance" id="clearanceyes"
                                                           checked="checked"/>
                                                    <label for="clearanceyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="clearance" id="clearanceno"/>
                                                    <label for="clearanceno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">27. Do you seek to engage in espionage,
                                            sabotage, export control violations, or any other illegal activity while in
                                            Bangladesh or outside of the country? </label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="seek" id="seekyes"
                                                           checked="checked"/>
                                                    <label for="seekyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="seek" id="seekno"/>
                                                    <label for="seekno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">28. Have you ever been arrested or convicted
                                            for any offense or crime, even though subject of a pardon, amnesty, or other
                                            similar action? </label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="arrested" id="arrestedyes"
                                                           checked="checked"/>
                                                    <label for="arrestedyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="arrested" id="arrestedno"/>
                                                    <label for="arrestedno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">29. Do you have a mental or physical disorder
                                            that poses or is likely to pose a threat to the safety or welfare of
                                            yourself or others? </label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="mental" id="mentalyes"
                                                           checked="checked"/>
                                                    <label for="mentalyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="mental" id="mentalno"/>
                                                    <label for="mentalno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">30. Do you have a communicable disease of
                                            public health significance? (Communicable diseases of public significance
                                            include chancroid, gonorrhea, granuloma inguinale, infectious leprosy,
                                            lymphogranuloma venereum, infectious stage syphilis, active tuberculosis,
                                            and others diseases as determined by the Department of Health and Human
                                            Services.)</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="communicable" id="communicableyes"
                                                           checked="checked"/>
                                                    <label for="communicableyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="communicable" id="communicableno"/>
                                                    <label for="communicableno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">31. Have you ever served in, been a member of,
                                            or been involved with a paramilitary unit, vigilante unit, rebel group,
                                            guerrilla group, or insurgent organization?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="served" id="servedyes"
                                                           checked="checked"/>
                                                    <label for="servedyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="served" id="servedno"/>
                                                    <label for="servedno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">32.	Have you ever served in the military?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="military" id="militaryyes"
                                                           checked="checked"/>
                                                    <label for="militaryyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="military" id="militaryno"/>
                                                    <label for="militaryno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="" class="form-label">33.	Have you belonged to, contributed to, or worked for any professional, social, or charitable organization?</label>
                                        <div class="custom_radio_button_form">
                                            <div class="row">
                                                <div class="col-6">
                                                    <input type="radio" name="contributed" id="contributedyes"
                                                           checked="checked"/>
                                                    <label for="contributedyes">Yes</label>
                                                </div>
                                                <div class="col-6">
                                                    <input type="radio" name="contributed" id="contributedno"/>
                                                    <label for="contributedno">No</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 mt-4">
                                        <button style="background-color:#FF8C00; padding:16px;" class="btn btn-success" type="button">Submit</button>
                                    </div>
                                </form>
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

<script src="{{asset('/')}}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{asset('/')}}public/front/assets/js/navik.menu.js"></script>

</body>
</html>
