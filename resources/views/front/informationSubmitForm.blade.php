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

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.14.1/themes/base/jquery-ui.css">
    <!--    slick slider-->
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/assets/vendor/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/')}}public/front/assets/vendor/slick/slick-theme.css">

    <link
        href="https://fonts.googleapis.com/css?family=Fira+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> <!-- Google fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> <!-- Google fonts -->

    <style>
    .form-container {
        background-color: #fff;
        color: black;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .form-container h1 {
        text-align: center;
        color: #2c3e50;
    }

    .section {
        margin-bottom: 20px;
    }

    .file-upload {
        margin-top: 20px;
    }

    .btn-submit {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-submit:hover {
        background-color: #45a049;
    }
    .parsley-required{

margin-top:10px;
}

.box

{

width:100%;

max-width:600px;

background-color:#f9f9f9;

border:1px solid #ccc;

border-radius:5px;

padding:16px;

margin:0 auto;

}

input.parsley-success,

select.parsley-success,

textarea.parsley-success {

color: #468847;

background-color: #DFF0D8;

border: 1px solid #D6E9C6;

}

input.parsley-error,

select.parsley-error,

textarea.parsley-error {

color: #B94A48;

background-color: #F2DEDE;

border: 1px solid #EED3D7;

}


.parsley-errors-list {

margin: 2px 0 3px;

padding: 0;

list-style-type: none;

font-size: 0.9em;

line-height: 0.9em;

opacity: 0;


transition: all .3s ease-in;

-o-transition: all .3s ease-in;

-moz-transition: all .3s ease-in;

-webkit-transition: all .3s ease-in;

}


.parsley-errors-list.filled {

opacity: 1;

}



.error,.parsley-type, .parsley-required, .parsley-equalto, .parsley-pattern, .parsley-length{

color:#ff0000;

}
    </style>
    <link rel="stylesheet" href="https://parsleyjs.org/src/parsley.css">
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
                    <h2>Form</h2>
                </div>
            </div>
        </section>

        <!-- ======= About Section ======= -->

        <section id="blog" class="blog">
            <div class="container mt-5">
                <div class="form-container">
                    <h1>Application for Employment</h1>
                    <p>Please complete this form in its entirety</p>

                    <form class="form-control" action="{{route('employeeApplicationStore')}}" method="post" enctype="multipart/form-data" id="form" data-parsley-validate="">
                        @csrf
                        <!-- Personal Information Section -->
                        <div class="section">
                            <h3>1. Personal Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="first_name" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="middle_name" class="form-label">Middle Name(s)</label>
                                    <input type="text" class="form-control" id="middle_name" name="middle_name">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="birth_date" class="form-label">Date of Birth (mm/dd/yyyy)</label>
                                    <input type="text" class="form-control datepicker" id="birth_date" name="dob" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="birth_place" class="form-label">Birth Place (city)</label>
                                    <input type="text" class="form-control " id="birth_place" name="birth_place_city"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country_of_birth" class="form-label">Country of Birth</label>
                                    <input type="text" class="form-control" id="country_of_birth"
                                        name="birth_place_country" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="nationality" class="form-label">Nationality</label>
                                    <input type="text" class="form-control" id="nationality" name="nationality"
                                        required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Gender</label><br>
                                    <input type="radio" id="male" name="gender" value="male" required>
                                    <label for="male">Male</label>
                                    <input type="radio" id="female" name="gender" value="female" required>
                                    <label for="female">Female</label>
                                    <input type="radio" id="binary" name="gender" value="binary" required>
                                    <label for="binary">Binary</label>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="weight" class="form-label">Weight</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" name="weight_unit" id="" required>
                                                <option value="Lbs">Lbs</option>
                                                <option value="Kgs">Kgs</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="weight" name="weight" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="height" class="form-label">Height</label>
                                        </div>
                                        <div class="col-4">
                                            <select class="form-select" name="height_unit" id="" required>
                                                <option value="feet">feet</option>
                                                <option value="inch">inch</option>
                                                <option value="cm">cm</option>
                                            </select>
                                        </div>
                                        <div class="col-8">
                                            <input type="text" class="form-control" id="height" name="height" required>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="hair_color" class="form-label">Hair Color</label>
                                    <input type="text" class="form-control" id="hair_color" name="hair_color" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="eye_color" class="form-label">Eye Color</label>
                                    <input type="text" class="form-control" id="eye_color" name="eye_color" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Do you have tattoos?</label><br>
                                    <input type="radio" id="tatoo_yes" name="tattoo" value="tatoo_yes" required>
                                    <label for="tatoo_yes">Yes</label>
                                    <input type="radio" id="tatoo_no" name="tattoo" value="tatoo_no" required>
                                    <label for="tatoo_no">No</label>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label class="form-label">Are the tattoos visible when
                                        wearing short-sleeved shirts, shorts, or skirts?</label><br>
                                    <input type="radio" id="tatoo_visible_yes" name="tattoo_visible" required
                                        value="tatoo_visible_yes">
                                    <label for="tatoo_visible_yes">Yes</label>
                                    <input type="radio" id="tatoo_visible_no" name="tattoo_visible" required
                                        value="tatoo_visible_no">
                                    <label for="tatoo_visible_no">No</label>
                                </div>
                            </div>
                        </div>

                        <!-- Contact Information Section -->
                        <div class="section">
                            <h3>2. Contact Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="street_1" class="form-label">Street 1</label>
                                    <input type="text" class="form-control" id="street_1" name="street_one" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="street_2" class="form-label">Street 2</label>
                                    <input type="text" class="form-control" id="street_2" name="street_two">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="city" class="form-label">City</label>
                                    <input type="text" class="form-control" id="city" name="city" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="state" class="form-label">State/Province</label>
                                    <input type="text" class="form-control" id="state" name="state">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="zip" class="form-label">Zip/Postal Code</label>
                                    <input type="text" class="form-control" id="zip" name="postal_code" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="country" class="form-label">Country</label>
                                    <input type="text" class="form-control" id="country" name="country" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="home_phone" class="form-label">Home Phone</label>
                                    <input type="text" class="form-control" id="home_phone" name="home_phone" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mobile_phone" class="form-label">Mobile Phone</label>
                                    <input type="text" class="form-control" id="mobile_phone" name="mobile_phone" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail Address</label>
                                <input type="email" class="form-control" id="email" name="email_address" required>
                            </div>

                            <div class="mb-3">
                                <label for="home_airport" class="form-label">Home Airport</label>
                                <input type="text" class="form-control" id="home_airport" name="home_airport" required>
                            </div>
                        </div>

                        <!-- Dependent Information Section -->
                        <div class="section">
                            <h3>3. Dependent Information</h3>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="marital_status" class="form-label">Marital Status</label>
                                    <select class="form-select" id="marital_status" name="matrial_status" required>
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="divorced">Divorced</option>
                                        <option value="widowed">Widowed</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="children_under_18" class="form-label">Number of children under 18
                                        years of age?</label>
                                    <input type="number" class="form-control" id="children_under_18"
                                        name="children_under_18" min="0" required>
                                </div>
                            </div>
                        </div>

                        <!-- Emergency Contact Information Section -->
                        <div class="section">
                            <h3>Emergency Contact Information</h3>
                            <p>In the event of an emergency, I would like the company to contact the following
                                person or persons:</p>

                            <!-- Emergency Contact Person 1 -->
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="emergency_person_1" class="form-label">Person 1</label>
                                    <input type="text" class="form-control" id="emergency_person_1"
                                        name="emergency_contact_person_one" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="relationship_1" class="form-label">Relationship</label>
                                    <input type="text" class="form-control" id="relationship_1" required name="relation_with_emergency_contact_person_one">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="home_phone_1" class="form-label">Home Phone</label>
                                    <input type="text" class="form-control" id="home_phone_1" name="emergency_contact_person_one_home_phone" required>
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="mobile_phone_1" class="form-label">Mobile Phone</label>
                                    <input type="text" class="form-control" id="mobile_phone_1" name="emergency_contact_person_one_mobile_phone" required>
                                </div>

                                <div class="col-md-4 mb-3">
                                    <label for="email_1" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email_1"  name="emergency_contact_person_one_email" required>
                                </div>
                            </div>

                            <!-- Emergency Contact Person 2 -->
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <label for="emergency_person_2" class="form-label">Person 2</label>
                                    <input type="text" class="form-control" id="emergency_person_2"
                                        name="emergency_contact_person_two">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="relationship_2" class="form-label">Relationship</label>
                                    <input type="text" class="form-control" id="relationship_2" name="relation_with_emergency_contact_person_two">
                                </div>
                                <div class="col-md-4 mb-3">
                                    <label for="email_2" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email_2"  name="emergency_contact_person_two_email" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="home_phone_2" class="form-label">Home Phone</label>
                                    <input type="text" class="form-control" id="home_phone_2" name="emergency_contact_person_two_home_phone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="mobile_phone_2" class="form-label">Mobile Phone</label>
                                    <input type="text" class="form-control" id="mobile_phone_2" name="emergency_contact_person_two_mobile_phone">
                                </div>
                            </div>
                        </div>

                        <div class="section">
                            <h3>4. Position Desired</h3>
                       
                                <div class="form-row">
                                    <div class="col-md-6 form-group">
                                        <label for="position">Position Desired:</label>
                                        <input type="text" name="desired_position" required class="form-control" id="position">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="salary">Salary Desired (USD):</label>
                                        <input type="text" name="desired_salary" required class="form-control" id="salary">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Have you worked on cruise ships before?</label><br>
                                    <input type="radio" id="workedYes" name="worked_on_cruise_ship" value="yes"> Yes
                                    <input type="radio" id="workedNo" name="worked_on_cruise_ship" value="no"> No
                                </div>

                                <div class="form-group" id="lastCompany" >
                                    <label for="company">If yes, list last company:</label>
                                    <input type="text" name="last_company" class="form-control" id="company">
                                </div>

                                <h4>5. Documentation Information</h4>

                                <!-- Passport Information Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th colspan="4">Passport Information</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Passport Number:</td>
                                            <td><input type="text" class="form-control" name="paNumber" required></td>
                                            <td>Passport Nationality:</td>
                                            <td><input type="text" class="form-control" name="paNationality" required></td>
                                        </tr>
                                        <tr>
                                            <td>Date of Issue (mm/dd/yyyy):</td>
                                            <td><input type="text" class="form-control datepicker" required name="paIissueDate"></td>
                                            <td>Place of Issue:</td>
                                            <td><input type="text" class="form-control" required name="paIissuePlace"></td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">Date of Expiration (mm/dd/yyyy):</td>
                                            <td colspan="2"><input type="text" class="form-control datepicker"  required name="paExpireDate"></td>
                                            
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Crew Visas Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Visa No</th>
                                            <th>Visa Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>C1/D</td>
                                            <td><input type="radio" name="c1DStatus" value="yes" > Yes
                                                <input type="radio" name="c1DStatus" value="no" > No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" name="c1DExpireDate"></td>
                                            <td><input type="text"  class="form-control" name="c1DVisaNo"></td>
                                            <td><input type="text"  class="form-control" name="c1DVisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>C1</td>
                                            <td><input type="radio"  name="c1Status" value="yes"> Yes
                                                <input type="radio"  name="c1Status" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" name="c1ExpireDate"></td>
                                            <td><input type="text"  class="form-control" name="c1VisaNo"></td>
                                            <td><input type="text"  class="form-control" name="c1VisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>D</td>
                                            <td><input type="radio"  name="dStatus" value="yes"> Yes
                                                <input type="radio"  name="dStatus" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" name="dExpireDate"></td>
                                            <td><input type="text"  class="form-control" name="dVisaNo"></td>
                                            <td><input type="text"  class="form-control" name="dVisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>Schengen</td>
                                            <td><input type="radio"  name="sStatus" value="yes"> Yes
                                                <input type="radio" name="sStatus" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" name="sVxpireDate"></td>
                                            <td><input type="text"  class="form-control" name="sVisaNo"></td>
                                            <td><input type="text"  class="form-control" name="sVisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>Other 1</td>
                                            <td><input type="radio"   name="other1Status" value="yes"> Yes
                                                <input type="radio"  name="other1Status" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" name="other1ExpireDate"></td>
                                            <td><input type="text"  class="form-control" name="other1VisaNo"></td>
                                            <td><input type="text"  class="form-control" name="other1VisaType"></td>
                                        </tr>
                                        <tr>
                                            <td>Other 2</td>
                                            <td><input type="radio"  name="other2Status" value="yes"> Yes
                                                <input type="radio"  name="other2Status" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker" name="other2ExpireDate"></td>
                                            <td><input type="text"  class="form-control" name="other2VisaNo"></td>
                                            <td><input type="text"  class="form-control" name="other2VisaType"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- STCW Certification Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Certificate Number</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Elementary First Aid (BST)</td>
                                            <td><input type="checkbox" value="1"  name="fiAidStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="fiAidExpireDate"></td>
                                            <td><input type="text"  class="form-control"
                                                    name="fiAidcertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Fire Prevention & Fire Fighting (BST)</td>
                                            <td><input type="checkbox" value="1"  name="fPAndFStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="fPAndFExpire_date">
                                            </td>
                                            <td><input type="text"  class="form-control"
                                                    name="fPAndFCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Personal Safety & Social Responsibility (BST)</td>
                                            <td><input type="checkbox" value="1"  name="pSSRStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="pSSRExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control"
                                                    name="pSSRCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Personal Survival Techniques (BST)</td>
                                            <td><input type="checkbox" value="1"  name="pStStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="pStExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control"
                                                    name="pStCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Crowd Management & Passenger Safety (BST)</td>
                                            <td><input type="checkbox" value="1"  name="cMPSStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="cMPSExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control"
                                                    name="cMPSCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Crisis Management & Human Behavior (BST)</td>
                                            <td><input type="checkbox" value="1" name="crMHBStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="crMHBExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control"
                                                    name="crMHBCertificateNo"></td>
                                        </tr>
                                        <tr>
                                            <td>Security Awareness (BST)</td>
                                            <td><input type="checkbox" value="1" name="sAStatus"></td>
                                            <td><input type="text"  class="form-control datepicker" name="sAExpireDate">
                                            </td>
                                            <td><input type="text"  class="form-control"
                                                    name="sACertificateNo"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Seaman's Books Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Number</th>
                                            <th>Nationality</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>National</td>
                                            <td><input type="radio"  name="nationalStatus" value="yes"> Yes
                                                <input type="radio"  name="nationalStatus" value="no"> No
                                            </td>
                                            <td><input type="text" required  class="form-control datepicker" name="nationalExpireDate"></td>
                                            <td><input type="text" required  class="form-control" name="nationalNumber"></td>
                                            <td><input type="text" required  class="form-control" name="nationalNationality">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Flag State 1</td>
                                            <td><input type="radio"  name="flagStateOneStatus" value="yes"> Yes
                                                <input type="radio"  name="flagStateOneStatus" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker"
                                                    name="flagStateOneExpireDate"></td>
                                            <td><input type="text"  class="form-control"
                                                    name="flagStateOneNumber"></td>
                                            <td><input type="text"  class="form-control"
                                                    name="flagStateOneNationality"></td>
                                        </tr>
                                        <tr>
                                            <td>Flag State 2</td>
                                            <td><input type="radio"  name="flagStateTwoStatus" value="yes"> Yes
                                                <input type="radio"  name="flagStateTwoStatus" value="no"> No
                                            </td>
                                            <td><input type="text"  class="form-control datepicker"
                                                    name="flagStateTwoExpireDate"></td>
                                            <td><input type="text"  class="form-control"
                                                    name="flagStateTwoNumber"></td>
                                            <td><input type="text"  class="form-control"
                                                    name="flagStateTwoNationality"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Other Certificates Section -->
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Yes/No</th>
                                            <th>Date of Issue (mm/dd/yyyy)</th>
                                            <th>Date of Expiration (mm/dd/yyyy)</th>
                                            <th>Comments</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ship's Cook</td>
                                            <td><input type="checkbox" value="1" name="shipCookStatus"></td>
                                            <td><input type="text" class="form-control datepicker" name="shipCookIssueDate"></td>
                                            <td><input type="text" class="form-control datepicker" name="shipCookExpireDate"></td>
                                            <td><textarea class="form-control" name="shipCookComment"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Other 1</td>
                                            <td><input type="checkbox" value="1" name="other1Status"></td>
                                            <td><input type="text" class="form-control datepicker" name="other1IssueDate"></td>
                                            <td><input type="text" class="form-control datepicker" name="other1ExpireDate"></td>
                                            <td><textarea class="form-control" name="other1Comment"></textarea></td>
                                        </tr>
                                        <tr>
                                            <td>Other 2</td>
                                            <td><input type="checkbox" value="1" name="other2Status"></td>
                                            <td><input type="text" class="form-control datepicker" name="other2IssueDate"></td>
                                            <td><input type="text" class="form-control datepicker" name="other2ExpireDate"></td>
                                            <td><textarea class="form-control" name="other2Comment"></textarea></td>
                                        </tr>
                                    </tbody>
                                </table>
                         
                        </div>

                        <div class="section mt-5">
                            <h3>6. Employment History</h3>
                           
                                <!-- Employment History -->
                                <div class="form-group">
                                    <label>List most recent employer first</label>
                                </div>
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="form-label">Employer/Company Name:</label>
                                                <input type="text" class="form-control" name="employer_or_company_name_one">
                                            </td>
                                            <td>
                                                <label class="form-label">Company Phone No:</label>
                                                <input type="text" class="form-control" name="companyone_phone">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Position Held:</label>
                                                <input type="text" class="form-control" name="companyone_position_in_company">
                                            </td>
                                            <td>
                                                <label class="form-label">Supervisor Name:</label>
                                                <input type="text" class="form-control" name="companyone_supervisor_name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">From (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" name="companyone_work_start_date">
                                            </td>
                                            <td>
                                                <label class="form-label">To (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" name="companyone_work_end_date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Starting Salary in USD:</label>
                                                <input type="text" class="form-control" name="companyone_start_salary_usd">
                                            </td>
                                            <td>
                                                <label class="form-label">Ending Salary in USD:</label>
                                                <input type="text" class="form-control" name="companyone_end_salary_usd">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label class="form-label">Reason for Leaving:</label>
                                                <input type="text" class="form-control" name="companyone_leave_reason">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Second Employer (Repeat the Same Table Structure) -->
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <label class="form-label">Employer/Company Name:</label>
                                                <input type="text" class="form-control" name="employer_or_company_name_two">
                                            </td>
                                            <td>
                                                <label class="form-label">Company Phone No:</label>
                                                <input type="text" class="form-control" name="companytwo_phone">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Position Held:</label>
                                                <input type="text" class="form-control" name="companytwo_position_in_company">
                                            </td>
                                            <td>
                                                <label class="form-label">Supervisor Name:</label>
                                                <input type="text" class="form-control" name="companytwo_supervisor_name">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">From (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" name="companytwo_work_start_date">
                                            </td>
                                            <td>
                                                <label class="form-label">To (mm/dd/yyyy):</label>
                                                <input type="text" class="form-control datepicker" name="companytwo_work_end_date">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="form-label">Starting Salary in USD:</label>
                                                <input type="text" class="form-control" name="companytwo_start_salary_usd">
                                            </td>
                                            <td>
                                                <label class="form-label">Ending Salary in USD:</label>
                                                <input type="text" class="form-control" name="companytwo_end_salary_usd">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td colspan="2">
                                                <label class="form-label">Reason for Leaving:</label>
                                                <input type="text" class="form-control" name="companytwo_leave_reason">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Education Section -->
                                <h3>7. Education</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>School Name and City</th>
                                            <th>No. of Years</th>
                                            <th>From (mm/dd/yyyy)</th>
                                            <th>To (mm/dd/yyyy)</th>
                                            <th>Major/Diploma</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>High School: </td>
                                            <td><input type="text" required class="form-control" name="high_school_name"></td>
                                            <td><input type="text" required class="form-control" name="years_in_high_school"></td>
                                            <td><input type="text" required class="form-control datepicker" name="high_school_start_year"></td>
                                            <td><input type="text" required  class="form-control datepicker" name="high_school_end_year"></td>
                                            <td><input type="text" required class="form-control" name="high_school_major"></td>
                                        </tr>
                                        <tr>
                                            <td>College:</td>
                                            <td><input type="text" required class="form-control" name="college_name"></td>
                                            <td><input type="text" required class="form-control" name="years_in_college"></td>
                                            <td><input type="text" required class="form-control datepicker" name="college_start_year"></td>
                                            <td><input type="text" required class="form-control datepicker" name="college_end_year"></td>
                                            <td><input type="text"required class="form-control" name="college_major"></td>
                                        </tr>
                                        <tr>
                                            <td>University:</td>
                                            <td><input type="text" class="form-control" name="university_name"></td>
                                            <td><input type="text" class="form-control" name="years_in_university"></td>
                                            <td><input type="text" class="form-control datepicker" name="university_start_year"></td>
                                            <td><input type="text" class="form-control datepicker" name="university_end_year"></td>
                                            <td><input type="text" class="form-control" name="university_major"></td>
                                        </tr>
                                        <tr>
                                            <td>Apprenticeship:</td>
                                            <td><input type="text" class="form-control" name="apprenticeship_name"></td>
                                            <td><input type="text" class="form-control" name="years_in_apprenticeship"></td>
                                            <td><input type="text" class="form-control datepicker" name="apprenticeship_start_year"></td>
                                            <td><input type="text" class="form-control datepicker" name="apprenticeship_end_year"></td>
                                            <td><input type="text" class="form-control" name="apprenticeship_major"></td>
                                        </tr>
                                        <tr>
                                            <td>Other:</td>
                                            <td><input type="text" class="form-control" name="other_name"></td>
                                            <td><input type="text" class="form-control" name="years_in_other"></td>
                                            <td><input type="text" class="form-control datepicker" name="other_start_year"></td>
                                            <td><input type="text" class="form-control datepicker" name="other_end_year"></td>
                                            <td><input type="text" class="form-control" name="other_major"></td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Languages Section -->
                                <h3>8. Languages</h3>
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Language</th>
                                            <th>Proficiency Level Speak:</th>
                                            <th>Proficiency Level Write:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>English (mandatory)</td>
                                            <td><input type="radio" required name="english_speak_level" value="Beginner"> Beginner
                                                <input type="radio" required name="english_speak_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" required name="english_speak_level" value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" required name="english_writting_level" value="Beginner"> Beginner
                                                <input type="radio" required name="english_writting_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" required name="english_writting_level" value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Spanish</td>
                                            <td><input type="radio" name="spanish_speak_level" value="Beginner"> Beginner
                                                <input type="radio" name="spanish_speak_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="spanish_speak_level" value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="spanish_writting_level" value="Beginner"> Beginner
                                                <input type="radio" name="spanish_writting_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="spanish_writting_level" value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>French</td>
                                            <td><input type="radio" name="french_speak_level" value="Beginner"> Beginner
                                                <input type="radio" name="french_speak_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="french_speak_level" value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="french_writting_level" value="Beginner"> Beginner
                                                <input type="radio" name="french_writting_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="french_writting_level" value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>German</td>
                                            <td><input type="radio" name="german_speak_level" value="Beginner"> Beginner
                                                <input type="radio" name="german_speak_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="german_speak_level" value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="german_writting_level" value="Beginner"> Beginner
                                                <input type="radio" name="german_writting_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="german_writting_level" value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other 1</td>
                                            <td><input type="radio" name="other1_speak_level" value="Beginner"> Beginner
                                                <input type="radio" name="other1_speak_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other1_speak_level" value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="other1_writting_level" value="Beginner"> Beginner
                                                <input type="radio" name="other1_writting_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other1_writting_level" value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Other 2</td>
                                            <td><input type="radio" name="other2_speak_level" value="Beginner"> Beginner
                                                <input type="radio" name="other2_speak_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other2_speak_level" value="Fluent"> Fluent
                                            </td>
                                            <td><input type="radio" name="other2_writting_level" value="Beginner"> Beginner
                                                <input type="radio" name="other2_writting_level" value="Intermediate">
                                                Intermediate
                                                <input type="radio" name="other2_writting_level" value="Fluent"> Fluent
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>

                                <!-- Signature Section -->
                                <div class="signature-box">
                                    <p class="mt-4">Signature of Applicant<span style="color:red;padding-left:10px;font-weight:bold;">width-300px and height-80px</span> <input accept="image/*" type="file" class="form-control" name="applicant_signature" required/></p>
                                    <p>Date (mm/dd/yyyy): <input type="text" class="form-control datepicker" name="applicant_signature_date" required/></p>
                                </div>

                                <div class="container border p-3">
                                    <h5 class="text-center fw-bold">Please do not write in the space below. This section
                                        is to be completed by the recruitment agency.</h5>

                           
                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td><label>Agency Name:</label></td>
                                                    <td><input type="text" name="agencyName" class="form-control" ></td>
                                                    <td><label>Location:</label></td>
                                                    <td><input type="text" name="agencyLocation" class="form-control" ></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Prescreened:</label></td>
                                                    <td colspan="3">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prescreenedStatus" value="yes">
                                                            <label class="form-check-label">Yes</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="prescreenedStatus" value="no">
                                                            <label class="form-check-label">No</label>
                                                        </div>
                                                        &nbsp; Name of Prescreened: <input type="text"  name="prescreenedSate"
                                                            class="form-control d-inline w-25 ms-2">
                                                        &nbsp; Date of Prescreen: <input type="text" name="prescreenedDate"
                                                            class="form-control d-inline w-25 ms-2 datepicker">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>References checked:</label></td>
                                                    <td>
                                                        <input type="checkbox" name="referencesStatus" class="form-check-input"> Yes
                                                        <input type="checkbox" name="referencesStatus" class="form-check-input ms-2"> No
                                                    </td>
                                                    <td><label>References checked by:</label></td>
                                                    <td><input type="text" name="referencesBy" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Criminal Background Check:</label></td>
                                                    <td>
                                                        <input type="checkbox" name="criminalStatus" class="form-check-input"> Yes
                                                        <input type="checkbox" name="criminalStatus" class="form-check-input ms-2"> No
                                                    </td>
                                                    <td><label>Background checked by:</label></td>
                                                    <td><input type="text" name="criminalStatus_by" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Applicant has been provided with:</label></td>
                                                    <td colspan="3">
                                                        <input type="checkbox" name="applicantProvided" class="form-check-input me-2"> Job
                                                        Description
                                                        <input type="checkbox" name="applicantProvided" class="form-check-input mx-2"> General
                                                        Crew Guide
                                                        <input type="checkbox" name="applicantProvided" class="form-check-input mx-2">
                                                        Departmental Crew Guide
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <h5 class="fw-bold mt-4">Interview Results:</h5>

                                        <table class="table table-bordered align-middle">
                                            <tbody>
                                                <tr>
                                                    <td><label>ISOL Interviewer:</label></td>
                                                    <td colspan="3"><input type="text" name="interveiwer" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Comments / Observations:</label></td>
                                                    <td colspan="3"><textarea class="form-control" name="interveiwerCommet" rows="4"></textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><label>Date:</label></td>
                                                    <td><input type="text" name="interveiwD_date" class="form-control datepicker"></td>
                                                    <td><label>Approved Position:</label></td>
                                                    <td><input type="text" name="appovePosition" class="form-control"></td>
                                                </tr>
                                                <tr>
                                                    <td><label>Approved Salary:</label></td>
                                                    <td><input type="text" name="appoveSalary" class="form-control"></td>
                                                    <td><label>Overall Rating:</label></td>
                                                    <td>
                                                        <div class="form-check form-check-inline"><input type="radio"
                                                                name="overall" class="form-check-input"> 5</div>
                                                        <div class="form-check form-check-inline"><input type="radio"
                                                                name="overall" class="form-check-input"> 4</div>
                                                        <div class="form-check form-check-inline"><input type="radio"
                                                                name="overall" class="form-check-input"> 3</div>
                                                        <div class="form-check form-check-inline"><input type="radio"
                                                                name="overall" class="form-check-input"> 2</div>
                                                        <div class="form-check form-check-inline"><input type="radio"
                                                                name="overall" class="form-check-input"> 1</div>
                                                    </td>
                                                </tr>

                                                <!-- Rating Rows -->
                                                <tr>
                                                    <th>Criteria</th>
                                                    <th colspan="3">Rating (5 = High, 1 = Low)</th>
                                                </tr>
                                               
                                                    <tr>
                                                        <td>English</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="english" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Attitude</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="attitude" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Social Skill</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="socialSkill" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Org. Fit</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="orgFit" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Tech. Prof.</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="techProf" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Grooming</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="grooming" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Energy</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="energy" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                                      <tr>
                                                        <td>Confidence</td>
                                                        <td colspan="3">
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="5" class="form-check-input"> 5</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="4" class="form-check-input"> 4</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="3" class="form-check-input"> 3</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="2" class="form-check-input"> 2</div>
                                                          <div class="form-check form-check-inline"><input type="radio" name="confidence" value="1" class="form-check-input"> 1</div>
                                                        </td>
                                                      </tr>
                                               
                                               
                                            </tbody>
                                        </table>
                                    
                                </div>
                           
                        </div>

                        <!-- File Upload -->
                        <div class="file-upload mb-3">
                            <label for="file-upload" class="form-label">Attach Photo Here</label>
                            <input type="file" accept="image/*" class="form-control" id="file-upload" name="applicant_photo" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="btn btn-primary w-100 btn-submit">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>


    <!-- ======= Footer ======= -->
   @include('front.include.footer')

    <script src="{{asset('/')}}public/front/assets/js/jquery-3.5.1.min.js"></script>
    <script src="{{asset('/')}}public/front/assets/js/navik.menu.js"></script>
    <script src="https://code.jquery.com/ui/1.14.1/jquery-ui.js"></script>
    <script src="{{ asset('/')}}public/parsely1.js"></script>
    <script>
         $( function() {
     $( ".datepicker" ).datepicker({
         dateFormat: "mm/dd/yy"
         ,	duration: "fast"
     });
 } );
        </script>
      </head>
</body>

</html>