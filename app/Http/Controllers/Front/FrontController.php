<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
use App\Models\PartnerWithUs;
use App\Models\JobSeeker;
use App\Models\Job;
use DB;
use Carbon;
use Response;
use App\Models\VesselOrWorkPlace;
use App\Models\DreamJobPosition;
use App\Models\DreamJobSector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;    
use App\Models\DreamJobDepartment;
class FrontController extends Controller
{

     public function getVesselsBySector($sector_id)
    {
        $vessels = VesselOrWorkPlace::where('dream_job_sector_id', $sector_id)
                                    ->select('id', 'name')
                                    ->get();
        return response()->json($vessels);
    }

    /**
     * Fetches positions/titles based on the selected department.
     *
     * @param  int  $department_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getPositionsByDepartment($department_id)
    {
        $positions = DreamJobPosition::where('dream_job_department_id', $department_id)
                                     ->select('id', 'name')
                                     ->get();
        return response()->json($positions);
    }

     public function getAutoSuggestions(Request $request)
    {
        $query = $request->get('term');
        if (strlen($query) < 1) {
            return response()->json([]);
        }

        $suggestions = [];

        // Search in Sectors (Job Categories)
        $sectors = DreamJobSector::where('name', 'LIKE', "%{$query}%")->limit(3)->get();
        foreach ($sectors as $sector) {
            $suggestions[] = [
                'label'         => $sector->name,
                'type'          => 'Sector',
                'sector_id'     => $sector->id,
                'department_id' => null,
                'position_id'   => null,
            ];
        }

        // Search in Positions (Job Titles)
        $positions = DreamJobPosition::where('name', 'LIKE', "%{$query}%")
            ->limit(7)
            ->get();

        foreach ($positions as $position) {
            // Add the position to suggestions
            $suggestions[] = [
                'label'         => $position->name,
                'type'          => 'Position',
                'sector_id'     => null, // Sector cannot be determined directly from position
                'department_id' => $position->dream_job_department_id,
                'position_id'   => $position->id,
            ];
        }

        return response()->json($suggestions);
    }

    public function informationSubmitForm(){
        return view('front.informationSubmitForm');
        }
    public function newsLetterPdf(){


    $get_file_data = DB::table('demoPdf')->where('id',2)->value('pdffile');

    $file_path = url('public/'.$get_file_data);
                            $filename  = pathinfo($file_path, PATHINFO_FILENAME);

    $file= public_path('/'). $get_file_data;

    $headers = array(
              'Content-Type: application/pdf',
            );

    // return Response::download($file,$filename.'.pdf', $headers);

    return Response::make(file_get_contents($file), 200, [
        'content-type'=>'application/pdf',
    ]);


   }


 public function demoFormat(){


    $get_file_data = DB::table('demoPdf')->where('id',1)->value('pdffile');

    $file_path = url('public/'.$get_file_data);
                            $filename  = pathinfo($file_path, PATHINFO_FILENAME);

    $file= public_path('/'). $get_file_data;

    $headers = array(
              'Content-Type: application/pdf',
            );

    // return Response::download($file,$filename.'.pdf', $headers);

    return Response::make(file_get_contents($file), 200, [
        'content-type'=>'application/pdf',
    ]);


   }
   
   
   public function interview_appointment_meeting_schedulePost(Request $request){
       
       
       if ($request->hasfile('cv')) {
            $file = $request->file('cv');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $cv = 'uploads/' . $filename;
        }else{
            
            $cv =0;
        }
       
       
        DB::table('m_schedules')->insert([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'mobile_number' => $request->mobile_number,
    'email_address' => $request->email_address,
    'msg' => $request->msg,
    'cv' => $cv,
    "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
    
]);

  return redirect()->back()->with('success','Submit successfully!');
       
   }
    
    
     public function InquiryPost(Request $request){
        
        //dd($request->all());
        
        DB::table('inquiries')->insert([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'mobile_number' => $request->mobile_number,
    'email_address' => $request->email_address,
    'msg' => $request->msg,
    "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
    
]);

  return redirect()->back()->with('success','Submit successfully!');
    }
    
    public function complainPost(Request $request){
        
        //dd($request->all());
        
        DB::table('complains')->insert([
    'first_name' => $request->first_name,
    'last_name' => $request->last_name,
    'mobile_number' => $request->mobile_number,
    'email_address' => $request->email_address,
    'subject' => $request->subject,
    'msg' => $request->msg,
    "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
    
]);

  return redirect()->back()->with('success','Submit successfully!');
    }
    
    
    public function surveyPost(Request $request){
        
        //dd($request->all());
        
        DB::table('surveys')->insert([
    'employee_status' => $request->employee_status,
    'duration' => $request->duration,
    'enjoy_rating' => $request->enjoy_rating,
    'encourage_rating' => $request->encourage_rating,
    'teamwork_rating' => $request->teamwork_rating,
    'respect_rating' => $request->respect_rating,
    'listen_rating' => $request->listen_rating,
    'support_rating' => $request->support_rating,
    'do_not_offer' => $request->do_not_offer,
    'onBoard' => $request->onBoard,
    'contract' => $request->contract,
    'benefit' => implode(",",$request->benefit),
    'loyal' => implode(",",$request->loyal),
    'leaving' => implode(",",$request->leaving),
    "created_at" =>  \Carbon\Carbon::now(), # new \Datetime()
            "updated_at" => \Carbon\Carbon::now(),  # new \Datetime()
    
]);

  return redirect()->back()->with('success','Submit successfully!');
    }

    public function job_category_wise($id){


        $jobListAll = DB::table('jobs')
        ->where('job_category_id',$id)
         ->latest()->get();


         $locationList = DB::table('locations')->get();
         $contractList = DB::table('contact_types')->get();

         $headline_list = Jobtitle::get();
         $headline_list2 = Jobdepartment::get();
         $headline_list1 = Jobcategory::get();

             $sJobCat = $id;
             $sJobDep = '';
             $sJobTit = '';

         return view('front.job_search_page',compact(

            'jobListAll',
            'headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList',
            'sJobCat',
            'sJobDep',
            'sJobTit'
        ));


    }

    public function interview_appointment_meeting_schedule(){
         return view('front.interview_appointment_meeting_schedule');
           }
           
    public function complain(){
         return view('front.complain');
           }
           
   public function Inquiry(){
         return view('front.Inquiry');
           }
           
    public function survey(){
         return view('front.survey');
           }
           
    public function fraud_warning(){
         return view('front.fraud_warning');
           }
           
    

   public function privacy_policy(){
         return view('front.privacy_policy');
           }

public function recruitment(){
         return view('front.recruitment_procedures');
           }
    public function terms_condition(){
         return view('front.terms_condition');
           }

    public function job_details($slug)
    {
        try {
            // Find the job by its slug and eager load all necessary relationships for efficiency.
            $job = Job::where('job_title_slug', $slug)
                        ->with(['position', 'department', 'jobSector', 'vesselOrWorkPlace'])
                        ->firstOrFail();

            // Pass the job object to the view.
            return view('front.job_details', compact('job'));

        } catch (\Exception $e) {
            // If the job is not found, redirect back with an error message.
            return redirect()->route('mainSearch')->with('error', 'The requested job vacancy was not found.');
        }
    }
    public function index(){

        $headline_list = Jobtitle::get();
        $headline_list2 = Jobdepartment::get();
        $headline_list1 = Jobcategory::get();

        return view('front.index',compact('headline_list','headline_list1','headline_list2'));
    }


    public function get_dp_name_from_cat(Request $request){

        $get_dp = Jobdepartment::where('cat_id',$request->cat_name)->get();

     $data = view('front.get_dp_name_from_cat',compact('get_dp'))->render();
     return response()->json($data);
 }


 public function get_title_name_from_dp(Request $request){

    $get_dp = Jobtitle::where('dp_id',$request->cat_name)->get();

 $data = view('front.get_title_name_from_dp',compact('get_dp'))->render();
 return response()->json($data);
}


public function how_it_work(){


    return view('front.how_it_work');

}


public function mission(){


    return view('front.mission');

}


public function vision(){


    return view('front.vision');

}


public function values(){


    return view('front.values');

}


public function our_accreditations(){


    return view('front.our_accreditations');

}


public function our_experties(){


    return view('front.our_experties');

}

public function our_services(){
return view('front.our_services');
}


public function post_a_job(){
    return view('front.post_a_job');
    }



    public function sendMessageFromPartner(Request $request){


        $save = new PartnerWithUs;
        $save->name = $request->name;
        $save->company_name	 = $request->companyName;
        $save->state = $request->state;
        $save->country = $request->country;
        $save->email = $request->email;
        $save->phone = $request->phoneNumber;
        $save->des = $request->des;
        $save->status = 'Pending';
        $save->save();

        return $data = 1;


    }

    public function jobSeekerPartOnePost(Request $request){
        //JobSeeker
        //dd($request->all());

        if(empty($request->family_members_country)){
            $arr_all = 'null';
        }else{
        $arr_all = implode(",",$request->family_members_country);
        }

        $save = new JobSeeker;
        $save->your_self = $request->your_self;
        $save->seaman_book_or_bd_cdc	 = $request->seaman_book_or_bd_cdc;
        $save->seaman_book_or_bd_cdc_detail = $request->seaman_book_or_bd_cdc_detail;
        $save->password_valid_till_one_year = $request->password_valid_till_one_year;
        $save->full_vaccinated_for_covid = $request->full_vaccinated_for_covid;
        $save->placement_onboard_considered = $request->placement_onboard_considered;
        $save->ielts_score = $request->ielts_score;
        $save->ielts_score_des = $request->ielts_score_des;
        $save->work_experience = $request->work_experience;
        $save->work_experience_des = $request->work_experience_des;
        $save->settled_country = $request->settled_country;
        $save->interested_to_work_on_ship = $request->interested_to_work_on_ship;
        $save->relative_work_on_ship = $request->relative_work_on_ship;
        $save->relative_work_on_ship_des = $request->relative_work_on_ship_des;


        $save->pay_isol_or_other = $request->pay_isol_or_other;
        $save->pay_third_party = $request->pay_third_party;
        $save->fill_up_by_assists = $request->fill_up_by_assists;
        $save->family_members_country = $arr_all;
        $save->assists_and_family_des = $request->assists_and_family_des;
        $save->expected_salary = $request->expected_salary;
        $save->hear_about_us = $request->hear_about_us;
        $save->married_or_not = $request->married_or_not;
        $save->qualification = $request->qualification;
        $save->hospitali_course = $request->hospitali_course;
        $save->sea_motion_work = $request->sea_motion_work;
        $save->get_us_visa = $request->get_us_visa;
        $save->visa_cancelled_or_not = $request->visa_cancelled_or_not;

        $save->refused_us_visa = $request->refused_us_visa;


        $save->travel_country = $request->travel_country;
        $save->terrorist_organization_member = $request->terrorist_organization_member;
        $save->police_clearance_certificate = $request->police_clearance_certificate;
        $save->illegal_activity = $request->illegal_activity;
        $save->status = 'Pending';

        $save->arrested = $request->arrested;
        $save->mental_or_physical_disorder = $request->mental_or_physical_disorder;
        $save->disease = $request->disease;
        $save->insurgent_organization = $request->insurgent_organization;
        $save->served_military = $request->served_military;
        $save->charitable_organization = $request->charitable_organization;
        $save->save();

        $mainId = $save->id;


        return redirect()->route('jobSeekerPartTwo',base64_encode($mainId))->with('success','Created successfully!');

    }



    public function jobSeekerPartOnePostEdit(Request $request){
        if(empty($request->family_members_country)){
            $arr_all = 'null';
        }else{
        $arr_all = implode(",",$request->family_members_country);
        }

        $save = JobSeeker::find($request->id);
        $save->your_self = $request->your_self;
        $save->seaman_book_or_bd_cdc	 = $request->seaman_book_or_bd_cdc;
        $save->seaman_book_or_bd_cdc_detail = $request->seaman_book_or_bd_cdc_detail;
        $save->password_valid_till_one_year = $request->password_valid_till_one_year;
        $save->full_vaccinated_for_covid = $request->full_vaccinated_for_covid;
        $save->placement_onboard_considered = $request->placement_onboard_considered;
        $save->ielts_score = $request->ielts_score;
        $save->ielts_score_des = $request->ielts_score_des;
        $save->work_experience = $request->work_experience;
        $save->work_experience_des = $request->work_experience_des;
        $save->settled_country = $request->settled_country;
        $save->interested_to_work_on_ship = $request->interested_to_work_on_ship;
        $save->relative_work_on_ship = $request->relative_work_on_ship;
        $save->relative_work_on_ship_des = $request->relative_work_on_ship_des;


        $save->pay_isol_or_other = $request->pay_isol_or_other;
        $save->pay_third_party = $request->pay_third_party;
        $save->fill_up_by_assists = $request->fill_up_by_assists;
        $save->family_members_country = $arr_all;
        $save->assists_and_family_des = $request->assists_and_family_des;
        $save->expected_salary = $request->expected_salary;
        $save->hear_about_us = $request->hear_about_us;
        $save->married_or_not = $request->married_or_not;
        $save->qualification = $request->qualification;
        $save->hospitali_course = $request->hospitali_course;
        $save->sea_motion_work = $request->sea_motion_work;
        $save->get_us_visa = $request->get_us_visa;
        $save->visa_cancelled_or_not = $request->visa_cancelled_or_not;

        $save->refused_us_visa = $request->refused_us_visa;


        $save->travel_country = $request->travel_country;
        $save->terrorist_organization_member = $request->terrorist_organization_member;
        $save->police_clearance_certificate = $request->police_clearance_certificate;
        $save->illegal_activity = $request->illegal_activity;

        $save->arrested = $request->arrested;
        $save->mental_or_physical_disorder = $request->mental_or_physical_disorder;
        $save->disease = $request->disease;
        $save->insurgent_organization = $request->insurgent_organization;
        $save->served_military = $request->served_military;
        $save->charitable_organization = $request->charitable_organization;
        $save->save();

        $mainId = $save->id;


        return redirect()->route('jobSeekerPartTwo',base64_encode($mainId))->with('success','Created successfully!');

    }


    public function jobSeekerPartTwo($id){

        $enCode = $id;
        $decode = base64_decode($enCode);
        return view('front.cv_login_main',compact('enCode','decode'));

    }


    public function jobSeekerPartOne($id){

       $jobSeekerList = JobSeeker::where('id',base64_decode($id))->first();
       return view('front.jobSeekerPartOne',compact('jobSeekerList'));
    }

    public function jobSeekerPartTwoPost(Request $request){


        //dd($request->all());


        $save = JobSeeker::find($request->id);
        $save->first_name = $request->first_name;
        $save->last_name	 = $request->last_name;
        $save->email_address = $request->email_address;
        $save->phone = $request->phone;
        $save->personal_summary = $request->personal_summary;
        $save->team = $request->team;
        $save->ritz_carlton_brand_work = $request->ritz_carlton_brand_work;
        $save->valid_schengen_visa = $request->valid_schengen_visa;
        $save->gender = $request->gender;
        $save->gender_identity = $request->gender_identity;
        $save->nationality = $request->nationality;
        $save->martial_status = $request->martial_status;
        $save->age_bracket = $request->age_bracket;
        $save->disability = $request->disability;
        $save->veteran_status = $request->veteran_status;
        $save->preferred_pronouns = $request->preferred_pronouns;

        if ($request->hasfile('cv')) {
            $file = $request->file('cv');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $save->cv = 'uploads/' . $filename;
        }
        $save->save();
        return redirect()->route('cv_login_form')->with('success','submit successfully!');
    }
    
    public function postEventData(Request $request){
        $data = array(
            "event_id" => $request->id,
            "name" => $request->name,
            "phone" => $request->phone,
            "address" => $request->address,
            "email" => $request->email,
            "created_at"=> Carbon\Carbon::now(),"updated_at"=> Carbon\Carbon::now());
DB::table('event_book')->insert($data);

return redirect()->back()->with('success','submit successfully!');
    }


public function crew_cv_searching(){
        return view('front.crew_cv_searching');
        }

    public function top_notch(){
            return view('front.top_notch');
            }
            public function hierarchy(){
                return view('front.hierarchy');
                }
                public function crew_login(){
                    return view('front.crew_login');
                    }
                    public function help24_7(){
                        return view('front.help24_7');
                        }
                        public function urgent_vacancy(){
                             $jobListAll = DB::table('jobs')
        ->where('urgent_vacancy',1)
        ->where('status',1)->latest()->get();
        
        
        
        
        $locationList = DB::table('locations')->get();
        $contractList = DB::table('contact_types')->get();

        $headline_list = Jobtitle::get();
        $headline_list2 = Jobdepartment::get();
        $headline_list1 = Jobcategory::get();
        
        
                            return view('front.urgent_vacancy',compact('headline_list1','headline_list2','headline_list','jobListAll','locationList','contractList'));
                            }

                            public function hiring_process(){
                                return view('front.hiring_process');
                                }
                                public function career_navigation(){
                                    return view('front.career_navigation');
                                    }


                                    public function cruiseship(){
                                        return view('front.cruiseship');
                                        }

                    public function megayacht(){
                                            return view('front.megayacht');
                                            }


                            public function river_cruise(){
                                                return view('front.river_cruise');
                                                }


                        public function private_jets(){
                                                    return view('front.private_jets');
                                                    }


                            public function hotel_ressort(){
                                                        return view('front.hotel_ressort');
                                                        }



                            public function merchant_navy(){
                                                            return view('front.merchant_navy');
                                                            }


                                public function offshore(){
                                                                return view('front.offshore');
                                                                }


                                public function world_butler(){
                                                                    return view('front.world_butler');
                                                                    }



                                                                    public function event(){
                                                                        $job_list = DB::table('event')->where('status',1)->latest()->get();
                                                                        return view('front.event',compact('job_list'));
                                                                        }




                                                                        public function blog(){
                                                                            return view('front.blog');
                                                                            }


                                                                            public function faq(){
                                                                                return view('front.faq');
                                                                                }


}
