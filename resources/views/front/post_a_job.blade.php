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
                <h2>Partner With Us</h2>
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

<section class="">

        <div class="container pt-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center">Why companies choose ISOL</h3>
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="text-center">
                                <img class="mb-4" src="{{ asset('/') }}public/front/assets/img/partner_with_us/resume.png" style="height:80px; width: auto" alt="">
                                <p>seafarer applicants <span style="font-weight: bold; font-size:20px;">1st choice</span>
                                    Access to find right candidates in bangladesh</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="text-center">
                                <img class="mb-4" src="{{ asset('/') }}public/front/assets/img/partner_with_us/like.png" style="height:80px; width: auto" alt="">
                                <p><span style="font-weight:bold; font-size:20px">Easy to use</span> <br> search, manage, process and shortlist
                                    candidates fast and more efficient</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="text-center">
                                <img class="mb-4" src="{{ asset('/') }}public/front/assets/img/partner_with_us/add-friend.png" style="height:80px; width: auto" alt="">
                                <p><span style="font-weight:bold; font-size:20px">Hire Faster</span> <br> Find the right candidates faster and smarter search</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-4">
                <div class="col-lg-12 ">
                    <h3 class="text-center">Fill up the form and we'll get in touch</h3>
                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="h5" for="">Name</label>
                                <input type="text" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="h5" for="">Company Name</label>
                                <input type="text" class="form-control" id="" placeholder="Company Name">
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="h5" for="">State</label>
                                <select id="" class="form-control">
                                    <option selected>Choose</option>
                                    <option selected>X</option>
                                    <option selected>Y</option>
                                </select>
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="h5" for="">Country</label>
                                <select id="" class="form-control">
                                    <option selected>Choose</option>
                                    <option selected>X</option>
                                    <option selected>Y</option>
                                </select>
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="h5" for="">Email</label>
                                <input type="email" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class=" col-md-6 mb-3">
                                <label class="h5" for="">Phone Number</label>
                                <input type="number" class="form-control" id="" placeholder="Name">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="h5" for="">Message</label>
                                <textarea class="form-control" name="" id="" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <p class="mb-3">i agree that i have read and understood all terms of the Privacy Statement for Employers and further agree that:</p>
                        <div class="form-group mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    I counsent to receive information from ISOL, Bangladesh on its offers, promotions, campaigns, news, events and any other marketing materials
                                </label>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <div class="card mt-5">
                <div class="card-body">
                    <div class="d-flex flex-row justify-content-center">
                        <div class="text-center me-4">
                            <img class="mb-3" src="{{ asset('/') }}public/front/assets/img/partner_with_us/search-user.png" style="border:1px solid #D43178; border-radius: 50%; padding:15px; height:80px; width: auto" alt="">
                            <h4 class="mt-3">Large and diverse talent pool</h4>
                        </div>
                        <div class="text-center me-4">
                            <img class="mb-3" src="{{ asset('/') }}public/front/assets/img/partner_with_us/cyborg.png" style="border:1px solid #D43178; border-radius: 50%; padding:15px; height:80px; width: auto" alt="">
                            <h4 class="mt-3">Advanced matching capability</h4>
                        </div>
                        <div class="text-center me-4">
                            <img class="mb-3" src="{{ asset('/') }}public/front/assets/img/partner_with_us/thumbs-up.png" style="border:1px solid #D43178; border-radius: 50%; padding:15px; height:80px; width: auto" alt="">
                            <h4 class="mt-3">Holistic hiring solutions</h4>
                        </div>
                        <div class="text-center me-4">
                            <img class="mb-3" src="{{ asset('/') }}public/front/assets/img/partner_with_us/database.png" style="border:1px solid #D43178; border-radius: 50%; padding:15px; height:80px; width: auto" alt="">
                            <h4 class="mt-3">Actionable insights</h4>
                        </div>
                        <div class="text-center me-4">
                            <img class="mb-3" src="{{ asset('/') }}public/front/assets/img/partner_with_us/donation.png" style="border:1px solid #D43178; border-radius: 50%; padding:15px; height:80px; width: auto" alt="">
                            <h4 class="mt-3">Innovative and packages</h4>
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
