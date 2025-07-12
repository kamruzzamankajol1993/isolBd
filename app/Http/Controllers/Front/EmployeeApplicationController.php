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
use PDF;
use Carbon;
use Response;
use App\Models\EmployeeApplication;
use App\Models\EmployeeDocumentInformation;
use App\Models\EmployeeDocumentTwo;
use App\Models\EmployeeHistoryAndEducation;
use App\Models\EmployeeLanguage;
use App\Models\RecruitmentAgencyPart;
class EmployeeApplicationController extends Controller
{
    public function employeeApplicationStore(Request $request){

        //dd($request->all());

        if ($request->hasfile('applicant_photo')) {
            $file = $request->file('applicant_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(1000000, 9999999).time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $appImage = 'public/uploads/' . $filename;
        }else{
            $appImage =null;

        }

        if ($request->hasfile('applicant_signature')) {
            $file = $request->file('applicant_signature');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(1000000, 9999999).time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $appSign = 'public/uploads/' . $filename;
        }else{
            $appSign =null;

        }

        $input = $request->all();
        $input['status'] = 'review';
        $input['applicant_photo'] = $appImage;
        $input['applicant_signature'] = $appSign;
        try{
            DB::beginTransaction();

           $applicationEmployee =  EmployeeApplication::create($input);

           $input['employee_application_id'] = $applicationEmployee->id;

           $employeeDocumentInformation =  EmployeeDocumentInformation::create($input);
           $employeeDocumentTwo =  EmployeeDocumentTwo::create($input);
           $employeeHistoryAndEducation =  EmployeeHistoryAndEducation::create($input);
           $employeeLanguage =  EmployeeLanguage::create($input);

        DB::commit();
        return redirect()->route('employeeApplicationEdit',base64_encode($applicationEmployee->id))->with('success','Please Review Your Information!');
    } catch (\Exception $e) {
        DB::rollBack();
        return $e;
    }


    }


    public function employeeApplicationEdit($id){
        try{
        $idDecode = base64_decode($id);

        $getReviewData= EmployeeApplication::where('id',$idDecode)->first();

        $employeeDocumentInformation= EmployeeDocumentInformation::where('employee_application_id',$idDecode)->first();
        $employeeDocumentTwo= EmployeeDocumentTwo::where('employee_application_id',$idDecode)->first();
        $employeeHistoryAndEducation= EmployeeHistoryAndEducation::where('employee_application_id',$idDecode)->first();
        $employeeLanguage= EmployeeLanguage::where('employee_application_id',$idDecode)->first();


        return view('front.employeeApplicationEdit',compact('getReviewData','employeeDocumentInformation','employeeDocumentTwo','employeeHistoryAndEducation','employeeLanguage'));
    } catch (\Exception $e) {
        return $e;
    }
    
    }

    public function employeeApplicationUpdate(Request $request,$id){
        //dd($request->all());

        if ($request->hasfile('applicant_photo')) {
            $file = $request->file('applicant_photo');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(1000000, 9999999).time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $appImage = 'public/uploads/' . $filename;
        }else{
            $appImage =EmployeeApplication::where('id',$id)->value('applicant_photo');

        }

        if ($request->hasfile('applicant_signature')) {
            $file = $request->file('applicant_signature');
            $extension = $file->getClientOriginalExtension();
            $filename = mt_rand(1000000, 9999999).time() . '.' . $extension;
            $file->move('public/uploads/', $filename);
            $appSign = 'public/uploads/' . $filename;
        }else{
            $appSign =EmployeeApplication::where('id',$id)->value('applicant_signature');

        }


        $input = $request->all();
        $input['status'] = 'pending';
        $input['applicant_photo'] = $appImage;
        $input['applicant_signature'] = $appSign;
        try{
        
           $applicationEmployee =  EmployeeApplication::findOrFail($id);
           $applicationEmployee->fill($input)->save();

           $input['employee_application_id'] = $applicationEmployee->id;

           $employeeDocumentInformation =  EmployeeDocumentInformation::findOrFail($request->docId);
           $employeeDocumentInformation->fill($input)->save();

           $employeeDocumentTwo =  EmployeeDocumentTwo::findOrFail($request->docIdTwo);
           $employeeDocumentTwo->fill($input)->save();

           $employeeHistoryAndEducation =  EmployeeHistoryAndEducation::findOrFail($request->employeeHisId);
           $employeeHistoryAndEducation->fill($input)->save();

           $employeeLanguage =  EmployeeLanguage::findOrFail($request->lanId);
           $employeeLanguage->fill($input)->save();

        DB::commit();
        return redirect()->route('employeeApplicationPdf',base64_encode($applicationEmployee->id))->with('success','Submit Successfully!');
    } catch (\Exception $e) {
        DB::rollBack();
        return $e;
    }
    }

    public function employeeApplicationPdf($id){

        try{
            $idDecode = base64_decode($id);
    
            $getReviewData= EmployeeApplication::where('id',$idDecode)->first();
    
            $employeeDocumentInformation= EmployeeDocumentInformation::where('employee_application_id',$idDecode)->first();
            $employeeDocumentTwo= EmployeeDocumentTwo::where('employee_application_id',$idDecode)->first();
            $employeeHistoryAndEducation= EmployeeHistoryAndEducation::where('employee_application_id',$idDecode)->first();
            $employeeLanguage= EmployeeLanguage::where('employee_application_id',$idDecode)->first();
            
            $file_Name_Custome = $getReviewData->first_name.$getReviewData->last_name.$employeeDocumentInformation->paNumber;
            
            $pdf=PDF::loadView('front.employeeApplicationPdf',['getReviewData'=>$getReviewData,'employeeDocumentInformation'=>$employeeDocumentInformation,'employeeDocumentTwo'=>$employeeDocumentTwo,'employeeHistoryAndEducation'=>$employeeHistoryAndEducation,'employeeLanguage'=>$employeeLanguage],[],['format' => 'A4']);
            return $pdf->stream($file_Name_Custome.''.'.pdf');
    
           
        } catch (\Exception $e) {
            return $e;
        }

    }
}
