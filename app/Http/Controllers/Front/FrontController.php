<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jobtitle;
use App\Models\Jobdepartment;
use App\Models\Jobcategory;
use App\Models\PartnerWithUs;
class FrontController extends Controller
{
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
        $save->save();

        return $data = 1;


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
                            return view('front.urgent_vacancy');
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
                                                                        return view('front.event');
                                                                        }




                                                                        public function blog(){
                                                                            return view('front.blog');
                                                                            }


                                                                            public function faq(){
                                                                                return view('front.faq');
                                                                                }


}
