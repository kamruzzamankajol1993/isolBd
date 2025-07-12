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

        <div class="container" style="padding-top: 120px; padding-bottom: 50px;">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3>Search Results</h3>
                    <p class="text-muted">Showing jobs matching your criteria.</p>
                </div>
                <div class="card-body">
                    @if($jobs->count() > 0)
                        @foreach($jobs as $job)
                            <div class="card mb-3 shadow-sm">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h5 class="card-title">{{ $job->position->name ?? 'N/A' }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">{{ $job->agency_name }}</h6>
                                            <p class="card-text mb-1">
                                                <strong>Sector:</strong> {{ $job->jobSector->name ?? 'N/A' }} |
                                                <strong>Department:</strong> {{ $job->department->name ?? 'N/A' }}
                                            </p>
                                            <p class="card-text">
                                                <strong>Salary:</strong> {{ $job->salary }} |
                                                <strong>Location:</strong> {{ $job->job_area ?? 'N/A' }}
                                            </p>
                                        </div>
                                        <div class="col-md-4 text-md-end align-self-center">
                                            <a href="{{ route('job_details', $job->job_title_slug) }}" class="btn btn-primary">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <div class="d-flex justify-content-center mt-4">
                            {{-- This will append the search query to the pagination links --}}
                            {{ $jobs->appends($searchTerms)->links() }}
                        </div>
                    @else
                        <div class="alert alert-warning text-center" role="alert">
                            <h4>No Jobs Found</h4>
                            <p>We couldn't find any jobs matching your search criteria. Please try different keywords or filters.</p>
                            <a href="{{ route('index') }}" class="btn btn-primary mt-2">Back to Home</a>
                        </div>
                    @endif
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
