<!doctype html>
<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ISOL</title>


    <link rel="stylesheet" href="{{asset('/')}}public/front/assets/vendor/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                <h2>Event</h2>
                @include('flash_message')
            </div>
        </div>
    </section>

    <!-- ======= About Section ======= -->

    <section class="">

        <div class="container pt-4">
            <div class="row ">
                @foreach($job_list as $user)
                <?php  
                
                $date = strtotime($user->date);

$newformatdate = date('d',$date);
$newformatmonth = date('F',$date);

$conditionDate = date('Y-m-d',$date);
                
                
                ?>
                
                @if(date('Y-m-d') >$conditionDate)
                
                @else
                <div class="col-lg-6 col-md-6 col-sm-12 col-12 mb-4">
                    <div class="event mb-3" >
                        <div class="event--front d-flex">
                            <div class="event__date" style="margin-right: 30px;">
                                <h3>{{$newformatdate}} <span>{{$newformatmonth}}</span></h3>
                            </div>
                            <div class="event__content">
                                <span class="tag mb-2">Event Tag</span>
                                <h3 class="event-title mb-2">{{$user->title}}</h3>
                                <div class="event__content--meta mb-3">
                                    <span><i class="fa fa-clock-o"></i>  {{$user->time}}</span>
                                    <span><i class="fa fa-user"></i>  {{$user->speaker}}</span>
                                </div>
                                @if($user->status == 1)
                                
            
                                <a data-mtitle="{{$user->title}}"  data-mid="{{$user->id}}" id="bookButton{{$user->id}}" class="btn btn-secondary">Book Your Seat</a>
                                
         


                                @else
                                
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
              

            </div>
        </div>
    </section>
<div class="modal" id="myModalnews" style="z-index: 999999">
    <div class="modal-dialog modal-dialog-centered modal-xl" >
        <div class="modal-content" style="background-color:white !important;">
            <div class="modal-header">
                 <h1 style="font-size: 40px; color: black" id="mheader"></h1>
                <button type="button" style="background-color: white !important" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                
                  <form  action="{{ route('postEventData') }}" method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">
                                        @csrf
                                           <div class="row">

                                              <div class="col-lg-12">
                                         


                                                  <div class="row mt-3">

                                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                                        <label for="name" style="color:black;">Name</label>
                                                        <input type="text" required class="form-control form-control-sm " name="name"/>
<input type="hidden" required id="mmid" class="form-control form-control-sm " name="id"/>
                                                    </div>

                                                 

                                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                                        <label for="name" style="color:black;">Email</label>
                                                        <input type="email"  class="form-control form-control-sm " name="email"/>

                                                    </div>


                                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                                        <label for="name" style="color:black;">Phone</label>
                                                        <input type="text" required class="form-control form-control-sm" name="phone"/>

                                                    </div>


                                                    <div class="form-group col-md-12 col-sm-12 mt-3">
                                                        <label for="name" style="color:black;">Address</label>
                                                        <input type="text" required class="form-control form-control-sm " name="address"/>

                                                    </div>
                                                  
                                                    
                                                  

                                                  </div>

                                                 
                                              </div>



                                              <div class="col-lg-12 mt-5">

                                                              <button type="submit" class="btn btn-primary  waves-effect  waves-light mr-1">
                                                                 Submit
                                                              </button>

                                              </div>
                                          </div> <!-- end col -->
                                      </form>
               
            </div>
        </div>
    </div>
</div>
    <!-- End Mission Vision Section -->
</main>


<!-- ======= Footer ======= -->
@include('front.include.footer')


<script src="{{ asset('/') }}public/front/assets/js/jquery-3.5.1.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/js/navik.menu.js"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/fullView/fullview.js"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/slick/slick.js" type="text/javascript" charset="utf-8"></script>
<script src="{{ asset('/') }}public/front/assets/vendor/owlCarousel/owl.carousel.js"></script>
<script>
    $(document).ready(function () {
        
        $("[id^=bookButton]").click(function(){
        var id = $(this).data('mid');
        var title = $(this).data('mtitle');
        
       // alert(title);
  $("#myModalnews").modal('show');
  
  $("#mheader").html(title);
  $("#mmid").val(id);
  
});

        
    });
</script>
</body>
</html>
