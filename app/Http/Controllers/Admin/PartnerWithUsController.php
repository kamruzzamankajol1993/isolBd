<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PartnerWithUs;
class PartnerWithUsController extends Controller
{
    public function index(){

        $partnerWithUs = PartnerWithUs::latest()->get();
        return view('backend.partnerWithUs.index',['partnerWithUs'=>$partnerWithUs]);
    }


    public function destroy($id)
    {

        $admins = PartnerWithUs::find($id);
        if (!is_null($admins)) {
            $admins->delete();
        }


        return back()->with('error','Deleted successfully!');
    }
}
