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
use App\Models\NewsReceiverList;
use App\Models\VesselOrWorkPlace;
use App\Models\DreamJobPosition;
use App\Models\DreamJobSector;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;    
use App\Models\DreamJobDepartment;
class SearchController extends Controller
{

    public function addNewsReceiver(Request $request){

        //dd($request->all());


        $addAllData = new NewsReceiverList();
        $addAllData->name = $request->name;
        $addAllData->phone = $request->phone;
        $addAllData->email = $request->email;
        $addAllData->save();

        return 1;



    }
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

 // Start with a base query, eager loading relationships for efficiency
        $query = Job::query()->with(['position', 'department', 'jobSector', 'vesselOrWorkPlace']);

        // Check if the main text search input has a value.
        if ($request->filled('job_title_search')) {
            // Priority 1: If the main search bar is used, ignore all dropdown filters.
            $searchTerm = $request->input('job_title_search');

            $query->where(function ($q) use ($searchTerm) {
                // Search in the job position's name (Job Title)
                $q->whereHas('position', function ($subQuery) use ($searchTerm) {
                    $subQuery->where('name', 'LIKE', "%{$searchTerm}%");
                })
                // Also search in the job sector's name (Job Category)
                ->orWhereHas('jobSector', function ($subQuery) use ($searchTerm) {
                    $subQuery->where('name', 'LIKE', "%{$searchTerm}%");
                });
            });

        } else {
            // Priority 2: If the main search bar is empty, filter by the selected dropdowns.
            // This will apply filters cumulatively for any dropdowns that have a value.
            $query->when($request->input('job_sector_id'), function ($q, $sectorId) {
                return $q->where('job_sector_id', $sectorId);
            })
            ->when($request->input('vessel_or_work_place_id'), function ($q, $vesselId) {
                return $q->where('vessel_or_work_place_id', $vesselId);
            })
            ->when($request->input('job_department_id'), function ($q, $departmentId) {
                return $q->where('job_department_id', $departmentId);
            })
            ->when($request->input('job_title_id'), function ($q, $titleId) {
                return $q->where('job_title_id', $titleId);
            });
        }

        // Get the results, paginate them, and pass them to the results view
        $jobs = $query->latest()->paginate(10);

        // Pass the search terms to the view so they can be displayed
        $searchTerms = $request->all();

      //  return view('front.search_results', compact('jobs', 'searchTerms'));
 $locationList = DB::table('locations')->get();
        $contractList = DB::table('contact_types')->get();

        $vesselOrWorkPlaceList = VesselOrWorkPlace::latest()->get();
        $jobTitleList = DreamJobPosition::latest()->get();
        $jobDepartmentList = DreamJobDepartment::latest()->get();
        $jobCategoryList = DreamJobSector::latest()->get();
            // dd( $sJobTit);

         return view('front.job_search_page',compact(
 'jobs',
            'searchTerms',
            'locationList',
            'contractList',
            'vesselOrWorkPlaceList',
            'jobTitleList',
            'jobDepartmentList',
            'jobCategoryList'
        ));

    }
}
