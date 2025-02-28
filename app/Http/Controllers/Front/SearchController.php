<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
use App\Models\PartnerWithUs;
use App\Models\JobSeeker;
use DB;
class SearchController extends Controller
{
    public function jobPageSearch(Request $request){

        $locationList = DB::table('locations')->get();
        $contractList = DB::table('contact_types')->get();

        $headline_list = Jobtitle::get();
        $headline_list2 = Jobdepartment::get();
        $headline_list1 = Jobcategory::get();

        //dd($request->all());


        if(empty($request->job_category) && empty($request->job_department) && empty($request->job_title) && empty($request->job_area) && empty($request->job_duration)){

            return redirect()->back()->with('error','You did not select anything');

        }elseif(empty($request->job_department) && empty($request->job_title) && empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')->where('job_category_id',$request->job_category)
                                                 ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_title) && empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
                       ->where('job_department_id', 'LIKE', "%$request->job_department%")
                        ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_department) && empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_title_id',$request->job_title)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_department) && empty($request->job_title) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')->where('job_location',$request->job_area)
                         ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_department) && empty($request->job_title) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_title) && empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_department_id', 'LIKE', "%$request->job_department%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_department) && empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_title_id', 'LIKE', "%$request->job_title%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_department) && empty($request->job_title) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_location', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_department) && empty($request->job_title) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_contract_type', 'LIKE', "%$request->job_duration%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_title) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_contract_type', 'LIKE', "%$request->job_duration%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_title) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_location', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_title_id', 'LIKE', "%$request->job_title%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_department) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_location',$request->job_area)
            ->where('job_title_id', 'LIKE', "%$request->job_title%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_department) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_contract_type',$request->job_duration)
            ->where('job_title_id', 'LIKE', "%$request->job_title%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_department) && empty($request->job_title)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_contract_type',$request->job_duration)
            ->where('job_location', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }
        elseif(empty($request->job_category) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_title_id',$request->job_title)
            ->where('job_contract_type',$request->job_duration)
            ->where('job_location', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_title)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_contract_type',$request->job_duration)
            ->where('job_location', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_contract_type',$request->job_duration)
            ->where('job_title_id',$request->job_title)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_location',$request->job_area)
            ->where('job_title_id',$request->job_title)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_department) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_location',$request->job_area)
            ->where('job_title_id',$request->job_title)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_department) && empty($request->job_title)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_location',$request->job_area)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_department) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_title_id',$request->job_title)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_title) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_department_id',$request->job_department)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_title) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_department_id',$request->job_department)
            ->where('job_location',$request->job_area)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_area) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category)
            ->where('job_department_id',$request->job_department)
            ->where('job_title_id',$request->job_title)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_category)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_department_id',$request->job_department)
            ->where('job_title_id',$request->job_title)
            ->where('job_location',$request->job_area)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


             return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
             'headline_list1',
             'headline_list2',
             'locationList',
             'contractList'));

        }elseif(empty($request->job_department)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category_id)
            ->where('job_title_id',$request->job_title)
            ->where('job_location',$request->job_area)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_title)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category_id)
            ->where('job_department_id',$request->job_department)
            ->where('job_location',$request->job_area)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category_id)
            ->where('job_department_id',$request->job_department)
            ->where('job_title_id',$request->job_title)
            ->where('job_contract_type',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }elseif(empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category_id)
            ->where('job_department_id',$request->job_department)
            ->where('job_title_id',$request->job_title)
            ->where('job_location',$request->job_area)
            ->latest()->get();

            $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
            'headline_list1',
            'headline_list2',
            'locationList',
            'contractList'));

        }else{

            $jobListAllSearch = DB::table('jobs')
            ->where('job_category_id',$request->job_category_id)
            ->orWhere('job_department_id',$request->job_department)
            ->orWhere('job_title_id',$request->job_title)
            ->orWhere('job_location',$request->job_area)
            ->orWhere('job_contract_type',$request->job_duration)
             ->latest()->get();

             $searchData= [$request->job_category,$request->job_department,$request->job_title,$request->job_duration,$request->job_area];


             return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list',
             'headline_list1',
             'headline_list2',
             'locationList',
             'contractList'));

        }


       // if()
    }



    public function mainSearch(Request $request){

//dd($request->all());
        $jobListAll = DB::table('jobs')
        ->where('job_category_id', 'LIKE', "%$request->job_category_id%")
        ->orWhere('job_department_id', 'LIKE', "%$request->job_department_id%")
        ->orWhere('job_title_id', 'LIKE', "%$request->jobjob_title_id_area%")
         ->latest()->get();


         $locationList = DB::table('locations')->get();
         $contractList = DB::table('contact_types')->get();

         $headline_list = Jobtitle::get();
         $headline_list2 = Jobdepartment::get();
         $headline_list1 = Jobcategory::get();

             $sJobCat = $request->job_category_id;
             $sJobDep = $request->job_department_id;
             $sJobTit = $request->jobjob_title_id_area;

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
}
