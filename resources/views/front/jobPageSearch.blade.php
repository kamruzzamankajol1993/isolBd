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
                <h3>Interworld Shipping
                    Hospitality Overseas Limited</h3>
                <h2>Mission</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">
<?php

//dd($searchData);
    ?>
        <div class="container pt-4">
            <div class="card">
                <div class="card-body custom_form_color">
                    <form class="" method="get" action="{{ route('jobPageSearch') }}">
                        <div class="custom_form_div">
                            <div class="row ">
                                <div class="col">
                                    <select class="form-select" id="job_title_id" aria-label="Default select example" name="job_title_id">

                                        @if(empty($searchData[0]))
                                        <option value="" selected="">Position</option>
                                        @else
                                        <option value="{{ $searchData[0] }}" selected="">{{ $searchData[0] }}</option>
                                        @endif

                                        @foreach($headline_list as $headline_lists)
                                        <option value="{{ $headline_lists->name }}">{{ $headline_lists->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_type" aria-label="Default select example" name="job_type">

                                        @if(empty($searchData[1]))
                                        <option value="" selected="">Type of contract</option>
                                        @else
                                        <option value="{{ $searchData[1] }}" selected="">{{ $searchData[1] }}</option>
                                        @endif

                                        {{-- <option value="" selected="">Type of contract</option> --}}


                                        <option value="Full Time">Full Time</option>
                                        <option value="Part time">Part time</option>
                                        <option value="Permanent">Permanent</option>
                                        <option value="Several Trips">Several Trips</option>
                                        <option value="Temporary">Temporary</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_area" aria-label="Default select example" name="job_area">



                                        @if(empty($searchData[2]))
                                        <option value="" selected="">Location</option>
                                        @else
                                        <option value="{{ $searchData[2] }}" selected="">{{ $searchData[2] }}</option>
                                        @endif



                                        <option value="world Wide">world Wide</option>
                                        <option value="Africa (Mauritius)">Africa (Mauritius)</option>
                                        <option value="Angola">Angola</option>
                                        <option value="Abu Dhabi">Abu Dhabi</option>
                                        <option value="Africa (Gabon)">Africa (Gabon)</option>
                                        <option value="Asia">Asia</option>
                                        <option value="Asia/Australia">Asia/Australia</option>
                                        <option value="Azerbaijan">Azerbaijan</option>
                                        <option value="Australia">Australia</option>
                                        <option value="Balearic Sea">Balearic Sea</option>
                                        <option value="Baltic Sea">Baltic Sea</option>
                                        <option value="Barents Sea">Barents Sea</option>
                                        <option value="Black Sea">Black Sea</option>
                                        <option value="Brazil">Brazil</option>
                                        <option value="Cameroon">Cameroon</option>
                                        <option value="Canada">Canada</option>
                                        <option value="Caribbean Sea">Caribbean Sea</option>
                                        <option value="Caribbean - Europe">Caribbean - Europe</option>
                                        <option value="Cadiz/Malaysia">Cadiz/Malaysia</option>
                                        <option value="Central America">Central America</option>
                                        <option value="China">China</option>
                                        <option value="China-Singapore">China-Singapore</option>
                                        <option value="Dutch continental shelf">Dutch continental shelf</option>
                                        <option value="Denmark">Denmark</option>
                                        <option value="Djibouti">Djibouti</option>
                                        <option value="East Africa">East Africa</option>
                                        <option value="Egypt">Egypt</option>
                                        <option value="Europe">Europe</option>
                                        <option value="Europe-Caribbean">Europe-Caribbean</option>
                                        <option value="Estonian Waters">Estonian Waters</option>
                                        <option value="France">France</option>
                                        <option value="Faroe Islands">Faroe Islands</option>
                                        <option value="Far East">Far East</option>
                                        <option value="Far East Asia">Far East Asia</option>
                                        <option value="Finland">Finland</option>
                                        <option value="French Guiana">French Guiana</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Germany/Norway">Germany/Norway</option>
                                        <option value="German waters rivers / sea">German waters rivers / sea</option>
                                        <option value="Gdynia (Poland)">Gdynia (Poland)</option>
                                        <option value="Ghana">Ghana</option>
                                        <option value="Gdansk (Poland)">Gdansk (Poland)</option>
                                        <option value="Great Lakes – St. Lawrence Waterway">Great Lakes – St. Lawrence
                                            Waterway
                                        </option>
                                        <option value="Great Lakes">Great Lakes</option>
                                        <option value="Gibraltar">Gibraltar</option>
                                        <option value="GOM">GOM</option>
                                        <option value="India - Sri Lanka">India - Sri Lanka</option>
                                        <option value="Iceland">Iceland</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Isle of Man">Isle of Man</option>
                                        <option value="Israel">Israel</option>
                                        <option value="Malaysia">Malaysia</option>
                                        <option value="Mediterranean">Mediterranean</option>
                                        <option value="Mexico">Mexico</option>
                                        <option value="Mozambique">Mozambique</option>
                                        <option value="Netherlands">Netherlands</option>
                                        <option value="Las Palmas">Las Palmas</option>
                                        <option value="Latvia">Latvia</option>
                                        <option value="Lithuania">Lithuania</option>
                                        <option value="Lauwersoog (Netherlands)">Lauwersoog (Netherlands)</option>
                                        <option value="Nigeria">Nigeria</option>
                                        <option value="Norway">Norway</option>
                                        <option value="North America">North America</option>
                                        <option value="North Europe">North Europe</option>
                                        <option value="North Sea">North Sea</option>
                                        <option value="Panama">Panama</option>
                                        <option value="Poland">Poland</option>
                                        <option value="Persian Offshore sectors">Persian Offshore sectors</option>
                                        <option value="Persian Gulf">Persian Gulf</option>
                                        <option value="Peniche (Portugal)">Peniche (Portugal)</option>
                                        <option value="Philippines">Philippines</option>
                                        <option value="Qatar">Qatar</option>
                                        <option value="UAE">UAE</option>
                                        <option value="USA">USA</option>
                                        <option value="UK">UK</option>
                                        <option value="Saudi Arabia">Saudi Arabia</option>
                                        <option value="Senegal">Senegal</option>
                                        <option value="South America">South America</option>
                                        <option value="Spain">Spain</option>
                                        <option value="Spain - Mexico ">Spain - Mexico</option>
                                        <option value="South East Asia">South East Asia</option>
                                        <option value="South West Africa">South West Africa</option>
                                        <option value="Singapore">Singapore</option>
                                        <option value="Sri Lanka">Sri Lanka</option>
                                        <option value="Taiwan">Taiwan</option>
                                        <option value="Turkey">Turkey</option>
                                        <option value="West Africa">West Africa</option>
                                        <option value="West Europe">West Europe</option>
                                        <option value="West Ice Shelf">West Ice Shelf</option>
                                        <option value="Worldwide">Worldwide</option>
                                        <option value="Yemen">Yemen</option>
                                        <option value="Estonia">Estonia</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_duration" aria-label="Default select example" name="job_duration">



                                        @if(empty($searchData[3]))
                                        <option value="" selected="">Contract duration</option>
                                        @else
                                        <option value="{{ $searchData[3] }}" selected="">{{ $searchData[3] }}</option>
                                        @endif


                                        <option value="1 week">1 week</option>
                                        <option value="2 weeks">2 weeks</option>
                                        <option value="2 weeks on/off">2 weeks on/off</option>
                                        <option value="3 weeks">3 weeks</option>
                                        <option value="3-4 weeks">3-4 weeks</option>
                                        <option value="4 weeks">4 weeks</option>
                                        <option value="4 weeks on/off">4 weeks on/off</option>
                                        <option value="4 weeks +/-2">4 weeks +/-2</option>
                                        <option value="4-6 weeks">4-6 weeks</option>
                                        <option value="4-6 weeks on/off">4-6 weeks on/off</option>
                                        <option value="4-10 weeks">4-10 weeks</option>
                                        <option value="5 weeks">5 weeks</option>
                                        <option value="5 weeks on/off">5 weeks on/off</option>
                                        <option value="5-6 weeks on/off">5-6 weeks on/off</option>
                                        <option value="5-10 weeks">5-10 weeks</option>
                                        <option value="6 weeks">6 weeks</option>
                                        <option value="6 weeks on/off">6 weeks on/off</option>
                                        <option value="6 weeks +/- 2">6 weeks +/- 2</option>
                                        <option value="6 weeks on/ 2 weeks off">6 weeks on/ 2 weeks off</option>
                                        <option value="6-7 weeks">6-7 weeks</option>
                                        <option value="6-8 weeks">6-8 weeks</option>
                                        <option value="6-10 weeks">6-10 weeks</option>
                                        <option value="7 weeks">7 weeks</option>
                                        <option value="7-8 weeks">7-8 weeks</option>
                                        <option value="8 weeks">8 weeks</option>
                                        <option value="8 weeks +/- 1">8 weeks +/- 1</option>
                                        <option value="8 weeks +/- 2">8 weeks +/- 2</option>
                                        <option value="8-10 weeks">8-10 weeks</option>
                                        <option value="9 weeks">9 weeks</option>
                                        <option value="9 weeks on/off">9 weeks on/off</option>
                                        <option value="9 weeks +/-1">9 weeks +/-1</option>
                                        <option value="9-13 weeks">9-13 weeks</option>
                                        <option value="10 weeks +/- 2">10 weeks +/- 2</option>
                                        <option value="10 weeks">10 weeks</option>
                                        <option value="10 weeks on/off">10 weeks on/off</option>
                                        <option value="10-12 weeks">10-12 weeks</option>
                                        <option value="12 weeks">12 weeks</option>
                                        <option value="12-14 weeks">12-14 weeks</option>
                                        <option value="13 weeks">13 weeks</option>
                                        <option value="1 month">1 month</option>
                                        <option value="1-2 months">1-2 months</option>
                                        <option value="1 month/(negotiation)">1 month/(negotiation)</option>
                                        <option value="1.5-3 months">1.5-3 months</option>
                                        <option value="2 months">2 months</option>
                                        <option value="2-3 months">2-3 months</option>
                                        <option value="2 months +/-1">2 months +/-1</option>
                                        <option value="2 months on/off">2 months on/off</option>
                                        <option value="2.5 months">2.5 months</option>
                                        <option value="2-3 months on/1-2 months off">2-3 months on/1-2 months off
                                        </option>
                                        <option value="2-4 months">2-4 months</option>
                                        <option value="2.5-3 months">2.5-3 months</option>
                                        <option value="3 months">3 months</option>
                                        <option value="3 months +/-1">3 months +/-1</option>
                                        <option value="3 months +/-1 (negotiable)">3 months +/-1 (negotiable)</option>
                                        <option value="3 months on/1 off">3 months on/1 off</option>
                                        <option value="3 months on/ 2 off">3 months on/ 2 off</option>
                                        <option value="3-2 months">3-2 months</option>
                                        <option value="3-4 months">3-4 months</option>
                                        <option value="4 months">4 months</option>
                                        <option value="4 months +1">4 months +1</option>
                                        <option value="4 months +/-1">4 months +/-1</option>
                                        <option value="4 months on/ 1 month off">4 months on/ 1 month off</option>
                                        <option value="4 months on/2 off">4 months on/2 off</option>
                                        <option value="4-5 months">4-5 months</option>
                                        <option value="4-6 months">4-6 months</option>
                                        <option value="5 months">5 months</option>
                                        <option value="5 months +1">5 months +1</option>
                                        <option value="5 months +/-1">5 months +/-1</option>
                                        <option value="6 months">6 months</option>
                                        <option value="6 months +/-1">6 months +/-1</option>
                                        <option value="8-12 months">8-12 months</option>
                                        <option value="All time">All time</option>
                                        <option value="Onshore">Onshore</option>
                                        <option value="Permanent job">Permanent job</option>
                                        <option value="Negotiable">Negotiable</option>
                                        <option value="8 days">8 days</option>
                                        <option value="10 days">10 days</option>
                                        <option value="28 days on/off">28 days on/off</option>
                                        <option value="30 days on/off">30 days on/off</option>
                                        <option value="40 days on/off">40 days on/off</option>
                                        <option value="42 days on/off">42 days on/off</option>
                                        <option value="44 days">44 days</option>
                                        <option value="45 days on/off">45 days on/off</option>
                                        <option value="45-60 days on/off">45-60 days on/off</option>
                                        <option value="60 days on / 30 days off">60 days on / 30 days off</option>
                                        <option value="60 days on/off">60 days on/off</option>
                                        <option value="70 days on/off">70 days on/off</option>
                                        <option value="80 days on/off">80 days on/off</option>
                                        <option value="90 days on/off">90 days on/off</option>
                                        <option value="70/35 days on/off">70/35 days on/off</option>
                                        <option value="35/35 days on/off">35/35 days on/off</option>
                                        <option value="56/28 days on/off">56/28 days on/off</option>
                                        <option value="165/30 days on/off">165/30 days on/off</option>
                                        <option value="3 weeks on/off">3 weeks on/off</option>
                                        <option value="4-6 weeks">4-6 weeks</option>
                                        <option value="100 Days">100 Days</option>
                                        <option value="105 Days">105 Days</option>
                                        <option value="8 months +/- 2">8 months +/- 2</option>
                                        <option value=""></option>
                                    </select>
                                </div>
                                <div class="col-1">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary btn-lg" type="submit">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="">
                        <div class="vacancies">
                            <section class="table">

                                @foreach($jobListAllSearch as $jobListAlls)
                                <div class="container">
                                    <div>
                                        <h3 style="display: inline">{{ $jobListAlls->job_title_id }} </h3>
                                        <p class="posted-date">{{ date('F m, Y', strtotime($jobListAlls->post_date)) }}</p>
                                    </div>

                                    <div class="left">
                                        <span>Type of vessel: {{ $jobListAlls->job_category_id }} </span>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_cards.png">

                                        <p>{{ $jobListAlls->salary }}</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_flag.png">

                                        <p>{{ $jobListAlls->job_area }}</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>{{ $jobListAlls->duration }}</p>
                                    </div>
                                    <div class="right">
                                        <a href="{{ route('job_details',$jobListAlls->job_title_slug) }}"
                                           class="button apply-button float-end">Apply now</a>
                                    </div>
                                    <div class="clear-both"></div>

                                </div>
@endforeach

                            </section>
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
