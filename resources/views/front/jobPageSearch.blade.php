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
                <h2>Vacancy</h2>
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

                        <!-- new code start --->

                        <div class="custom_form_div">
                            <div class="row ">
                                <div class="col">
                                    <select class="form-select" id="job_cat" aria-label="Default select example" name="job_category">


                                        @if(empty($searchData[0]))
                                        <option value="" selected="">Category</option>
                                        @else
                                        <option value="{{ $searchData[0] }}" selected="">{{ $searchData[0] }}</option>
                                        @endif


                                        @foreach($headline_list1 as $headline_lists)
                                        <option value="{{ $headline_lists->name }}"  >{{ $headline_lists->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="dp_name" aria-label="Default select example" name="job_department">


                                        @if(empty($searchData[1]))
                                        <option value="" selected="">Department</option>
                                        @else
                                        <option value="{{ $searchData[1] }}" selected="">{{ $searchData[1] }}</option>
                                        @endif

                                        @foreach($headline_list2 as $headline_lists)
                                        <option value="{{ $headline_lists->name }}"  >{{ $headline_lists->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_title_name" aria-label="Default select example" name="job_title">


                                        @if(empty($searchData[2]))
                                        <option value="" selected="">Job Title</option>
                                        @else
                                        <option value="{{ $searchData[2] }}" selected="">{{ $searchData[2] }}</option>
                                        @endif


                                        @foreach($headline_list as $headline_lists)
                                        <option value="{{ $headline_lists->name }}" >{{ $headline_lists->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_duration" aria-label="Default select example" name="job_duration">


                                        @if(empty($searchData[3]))
                                        <option value="" selected="">Type of Contact</option>
                                        @else
                                        <option value="{{ $searchData[3] }}" selected="">{{ $searchData[3] }}</option>
                                        @endif


                                        @foreach($contractList as $headline_lists)
                                        <option value="{{ $headline_lists->name }}" >{{ $headline_lists->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_area" aria-label="Default select example" name="job_area">


                                        @if(empty($searchData[4]))
                                        <option value="" selected="">Location</option>
                                        @else
                                        <option value="{{ $searchData[4] }}" selected="">{{ $searchData[4] }}</option>
                                        @endif


                                        @foreach($locationList as $headline_lists)
                                        <option value="{{ $headline_lists->name }}" >{{ $headline_lists->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-1">
                                    <div class="d-grid gap-2">
                                        <button class="btn btn-primary btn-lg" type="submit">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- new code end -->

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

                                        <p>{{ $jobListAlls->job_location }}</p>
                                        <img src="https://ojcrew.com/wp-content/themes/oj/img/d4_clocl.png">

                                        <p>{{ $jobListAlls->job_contract_type }}</p>
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
