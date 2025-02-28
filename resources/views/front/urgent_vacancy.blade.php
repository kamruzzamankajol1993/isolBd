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
                <h2>Urgent Vacancy</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="card">
                <div class="card-body custom_form_color">
                    @include('flash_message')
                    <form class="" method="get" action="{{ route('jobPageSearch') }}">
                        <div class="custom_form_div">
                            <div class="row ">
                                <div class="col">
                                    <select class="form-select" id="job_cat" aria-label="Default select example" name="job_category">
                                        <option value="" selected="">Category</option>
                                        @foreach($headline_list1 as $headline_lists)
                                        <option value="{{ $headline_lists->name }}"  >{{ $headline_lists->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="dp_name" aria-label="Default select example" name="job_department">
                                        <option value="" selected="">Department</option>
                                        @foreach($headline_list2 as $headline_lists)
                                        <option value="{{ $headline_lists->name }}"  >{{ $headline_lists->name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_title_name" aria-label="Default select example" name="job_title">
                                        <option value="" selected="">Job Title</option>
                                        @foreach($headline_list as $headline_lists)
                                        <option value="{{ $headline_lists->name }}" >{{ $headline_lists->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_duration" aria-label="Default select example" name="job_duration">
                                        <option value="" selected="">Type of Contact</option>
                                        @foreach($contractList as $headline_lists)
                                        <option value="{{ $headline_lists->name }}" >{{ $headline_lists->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-select" id="job_area" aria-label="Default select example" name="job_area">
                                        <option value="" selected="">Location</option>
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
                    </form>
                    <div class="">
                        <div class="vacancies">
                            <section class="table">

                                @if(count($jobListAll) == 0)

                              <h3> Not Available </h3>
                                @else

                                @foreach($jobListAll as $jobListAlls)
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
@endif

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


<script>
    $(document).ready(function(){
        $("#job_cat").change(function(){

            var cat_name = $(this).val()



            $.ajax({
            url: "{{ route('get_dp_name_from_cat') }}",
            method: 'GET',
            data: {cat_name:cat_name},
            success: function(data) {

              $("#dp_name").html('');
              $("#dp_name").html(data);
            }
        });
    });


    $("#dp_name").change(function(){

var cat_name = $(this).val()



$.ajax({
url: "{{ route('get_title_name_from_dp') }}",
method: 'GET',
data: {cat_name:cat_name},
success: function(data) {

  $("#job_title_name").html('');
  $("#job_title_name").html(data);
}
});
});

});
</script>

</body>
</html>
