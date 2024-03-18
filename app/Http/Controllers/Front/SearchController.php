<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Jobtitle;
class SearchController extends Controller
{
    public function jobPageSearch(Request $request){
        $headline_list = Jobtitle::select('name')
        ->groupBy('name')
        ->get();

        //dd($request->all());


        if(empty($request->job_title_id) && empty($request->job_type) && empty($request->job_area) && empty($request->job_duration)){

            return redirect()->back()->with('error','You did not select anything');

        }elseif(empty($request->job_title_id) && empty($request->job_type) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')->where('duration',$request->job_duration)->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_title_id) && empty($request->job_type) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_area', 'LIKE', "%$request->job_area%")->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_title_id) && empty($request->job_duration) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')->where('job_type',$request->job_type)->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_type) && empty($request->job_duration) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')->where('job_title_id',$request->job_title_id)->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_duration) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_title_id',$request->job_title_id)
            ->where('job_type',$request->job_type)
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_type) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_title_id',$request->job_title_id)
            ->where('duration',$request->job_duration)
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_type) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_title_id',$request->job_title_id)
            //->where('duration',$request->job_duration)
            ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_title_id) && empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
            ->where('duration',$request->job_duration)
            ->where('job_type',$request->job_type)
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_title_id) && empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_type',$request->job_type)
            //->where('duration',$request->job_duration)
            ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_title_id) && empty($request->job_type)){

            $jobListAllSearch = DB::table('jobs')
           // ->where('job_type',$request->job_type)
            ->where('duration',$request->job_duration)
            ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_title_id)){

            $jobListAllSearch = DB::table('jobs')
            ->where('job_type',$request->job_type)
            ->where('duration',$request->job_duration)
            ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


             return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_type)){

            $jobListAllSearch = DB::table('jobs')
           ->where('job_title_id',$request->job_title_id)
            ->where('duration',$request->job_duration)
            ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_duration)){

            $jobListAllSearch = DB::table('jobs')
           ->where('job_title_id',$request->job_title_id)
            ->where('job_type',$request->job_type)
            ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }elseif(empty($request->job_area)){

            $jobListAllSearch = DB::table('jobs')
           ->where('job_title_id',$request->job_title_id)
            ->where('job_type',$request->job_type)
            ->where('duration',$request->job_duration)
           // ->where('job_area', 'LIKE', "%$request->job_area%")
            ->latest()->get();

            $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


            return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

        }else{

            $jobListAllSearch = DB::table('jobs')
            ->where('job_title_id',$request->job_title_id)
             ->where('job_type',$request->job_type)
             ->where('duration',$request->job_duration)
            ->where('job_area', 'LIKE', "%$request->job_area%")
             ->latest()->get();

             $searchData= [$request->job_title_id,$request->job_type,$request->job_duration,$request->job_area];


             return view('front.jobPageSearch',compact('searchData','jobListAllSearch','headline_list'));

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



         $headline_list = Jobtitle::select('name')
         ->groupBy('name')
         ->get();
      
         return view('front.job_search_page',compact('jobListAll','headline_list'));

    }
}
