<div class="navik-header header-shadow center-menu-1 header-opacity">
    <div class="container-fluid">
        <div class="d-none d-lg-block text-center">
            <h1 class="header_text">
                <span>I</span>nterworld
                <span>S</span>hipping
                <span>O</span>verseas
                <span>L</span>imited
            </h1>
            <p style="color: white; font-weight: bold; font-size: 16px;margin:0">(An international certified agency for professional recruitment)</p>
        </div>

        <!-- Navik header -->
        <div class="navik-header-container">

            <!--Logo-->
            <div class="logo" data-mobile-logo="{{ asset('/') }}public/front/assets/img/logo.png" data-sticky-logo="{{ asset('/') }}public/front/assets/img/logo.png">
                <a href="{{ route('index') }}"><img src="{{ asset('/') }}public/front/assets/img/logo.png" alt="logo"/></a>
            </div>

            <!-- Burger menu -->
            <div class="burger-menu">
                <div class="line-menu line-half first-line"></div>
                <div class="line-menu"></div>
                <div class="line-menu line-half last-line"></div>
            </div>

            <!--Navigation menu-->
            <nav class="navik-menu menu-caret submenu-top-border submenu-scale">
                <ul>
                    <li><a href="{{ route('index') }}" class="other_button"> <span class="home_box">H</span>ome</a></li>
                    <li><a href="{{ route('how_it_work') }}" class="other_button">How It Works</a></li>
                    <li ><a href="#" class="other_button">Why Us</a>
                        <ul>
                            <li ><a href="{{ route('mission') }}" >Mission</a></li>
                            <li><a href="{{ route('vision') }}">Vision</a></li>
                            <li><a href="{{ route('values') }}">Values</a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">About ISOL</a>
                        <ul>
                            <li><a href="{{ route('our_experties') }}">Expertise</a></li>
                            <li><a href="{{ route('our_services') }}">Service</a></li>
                            <li><a href="{{ route('our_accreditations') }}">Accreditations</a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">Employer</a>
                        <ul>
                            <li><a href="{{ route('post_a_job') }}">Partner with us</a></li>
                            <li><a href="{{ route('crew_cv_searching') }}">Crew cv searching</a></li>
                            <li><a href="{{ route('top_notch') }}">Top notch candidate</a></li>
                            <li><a href="{{ route('hierarchy') }}">Hierarchy</a></li>
                        </ul>
                    </li>



                </ul>
                <ul>
                    <li ><a href="#" class="other_button">Crew Portal</a>
                        <ul>
                            <li><a href="{{ route('crew_login') }}">Login</a></li>
                            <li><a href="{{ route('help24_7') }}">Help 24/7</a></li>
                            <li><a href="{{ route('urgent_vacancy') }}">Urgent Vacancy</a></li>
                            <li><a href="{{ route('hiring_process') }}">Hiring Process</a></li>
                            <li><a href="{{ route('career_navigation') }}">Career Navigation</a></li>
                            <li><a href="#">Find Job</a>
                                <ul>
                                    @foreach($jobCategoryList as $jobCategoryLists)
                                    <li><a href="{{ route('job_category_wise',$jobCategoryLists->name) }}">{{ $jobCategoryLists->name }}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">Insight</a>
                        <ul>
                            <li><a href="{{ route('event') }}">Event</a></li>
                            <li><a target="_blank" href="{{ $ins_blog }}">Blog</a></li>
                            <li><a target="_blank" href="{{route('newsLetterPdf')}}">Newsletter</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </li>
                    <li ><a href="#" class="other_button">Contact</a>
                        <ul>
                            <li><a href="{{ route('interview_appointment_meeting_schedule') }}">Interview Appointment</a></li>
                            <li><a href="{{ route('Inquiry') }}">Enquiry</a></li>
                            <li><a href="{{ route('complain') }}">Complain</a></li>
                            <li><a href="{{ route('survey') }}">Survey</a></li>
                        </ul>
                    </li>
                    <li><a href="{{ route('crew_login') }}" class="other_button">Hire Employee</a></li>
                    <li><a href="https://isol.com.bd/cv_login_form" class="other_button">CV Register</a></li>
                </ul>
            </nav>

        </div>

    </div>
</div>
