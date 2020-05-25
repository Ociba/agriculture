<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\ExaminationTreatment;
use App\SignsSymptoms;
use App\Disease;
use App\Drug;
use App\Week;
use App\Month;
use App\Weight;
use App\Product;


class ExaminationTreatmentController extends Controller
{
    //
    public function addExaminationTreatmentForm(){
        $products= Product::select('product','id')->get();
        $get_signs_symptom= SignsSymptoms::select('signs_symptoms','id')->get();
        $get_diseases =Disease::select('disease_name','id')->get();
        $get_drugs =Drug::select('drug_name','id')->get();
        $get_week =Week::select('week','id')->get();
        $get_month =Month::select('month','id')->get();
        $get_weight =Weight::select('weight','id')->get();
        return view('admin.examinationandtreatment-form',compact('get_signs_symptom','get_diseases','get_drugs',
                      'get_week','get_month','get_weight','products'));
    }
    public function editExaminationTreatment($id){
        $edit_examination_and_treatment =ExaminationTreatment::where('id',$id)->get();
        $product= Product::select('product','id')->get();
        $get_signs_symptomss= SignsSymptoms::select('signs_symptoms','id')->get();
        $get_diseasess =Disease::select('disease_name','id')->get();
        $get_drugg =Drug::select('drug_name','id')->get();
        $get_weeks =Week::select('week','id')->get();
        $get_months =Month::select('month','id')->get();
        $get_weights =Weight::select('weight','id')->get();
        return view('admin.edit-examination-and-treatment-form',compact('edit_examination_and_treatment','product',
        'get_signs_symptomss','get_diseasess','get_drugg','get_weeks','get_months','get_weights'));
    }
    public function createExaminationTreatment(Request $request){
        if(empty($request->bill)){
            return redirect()->back()->withErrors("Bill cannot be null");
        }
        if(empty($request->deposit)){
            return redirect()->back()->withErrors("Deposit cannot be null");
        }
        if(empty($request->balance)){
            return redirect()->back()->withErrors("Balance cannot be null");
        }
        if(SignsSymptoms::where(\strtolower('signs_symptoms'), strtolower($request->signs_symptoms))->exists()){
            $get_signs_symptoms= SignsSymptoms::where("signs_symptoms", $request->signs_symptoms)->value('id');
          }
          else{
            SignsSymptoms::create(array('signs_symptoms'=>$request->signs_symptoms,
           'user_id'=>Auth::user()->id
           ));
           
          }
          if(Disease::where(\strtolower('disease_name'), strtolower($request->disease_name))->exists()){
            $get_disease= Disease::where("disease_name", $request->disease_name)->value('id');
          }
          else{
            Disease::create(array('disease_name'=>$request->disease_name,
           'user_id'=>Auth::user()->id
           ));
           
          }

          if(Drug::where(\strtolower('drug_name'), strtolower($request->drug_name))->exists()){
            $get_disease= Drug::where("drug_name", $request->drug_name)->value('id');
          }
          else{
            Drug::create(array('drug_name'=>$request->drug_name,
           'user_id'=>Auth::user()->id
           ));
           
          }
          if(Product::where(\strtolower('product'), strtolower($request->product))->exists()){
            $get_product= Product::where("product", $request->product)->value('id');
          }
          else{
            Product::create(array('product'=>$request->product,
           'user_id'=>Auth::user()->id
           ));
           
          }
          if(Weight::where(\strtolower('weight'), strtolower($request->weight))->exists()){
            $get_weight= Weight::where("weight", $request->weight)->value('id');
          }
          else{
            Weight::create(array('weight'=>$request->weight,
           'user_id'=>Auth::user()->id
           ));
           
          }
          if(Week::where(\strtolower('week'), strtolower($request->week))->exists()){
            $get_week= Week::where("week", $request->week)->value('id');
          }
          else{
            Week::create(array('week'=>$request->week,
           'user_id'=>Auth::user()->id
           ));
           
          }
          if(Month::where(\strtolower('month'), strtolower($request->month))->exists()){
            $get_month= Month::where("month", $request->month)->value('id');
          }
          else{
            Month::create(array('month'=>$request->month,
           'user_id'=>Auth::user()->id
           ));
           
          }
          $get_month_id=Month::where(\strtolower("month"), strtolower($request->month))->value('id');
          $get_week_id=Week::where(\strtolower("week"), strtolower($request->week))->value('id');
          $get_weight_id=Weight::where(\strtolower("weight"), strtolower($request->weight))->value('id');
          $get_product_id=Product::where(\strtolower("product"), strtolower($request->product))->value('id');
          $get_drug_id=Drug::where(\strtolower("drug_name"), strtolower($request->drug_name))->value('id');
          $get_disease_id=Disease::where(\strtolower("disease_name"), strtolower($request->disease_name))->value('id');
          $get_signs_symptoms_id= SignsSymptoms::where(\strtolower("signs_symptoms"), strtolower($request->signs_symptoms))->value('id');
        ExaminationTreatment::create(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'signs_symptom_id'=>$get_signs_symptoms_id,
            'weight_id'=>$get_weight_id,
            'disease_id'=>$get_disease_id,
            'drug_id'=>$get_drug_id,
            'week_id'=>$get_week_id,
            'month_id'=>$get_month_id,
            'bill'=>$request->bill,
            'deposit'=>$request->deposit,
            'balance'=>$request->balance
        ));
        return Redirect()->back()->with('message',"ExaminationTreatment details has been updated Succesfully");
    }
    public function displayExaminationTreatment(){
        $show_all =ExaminationTreatment::join('users','examination_treatments.user_id','users.id')
        ->join('signs_symptoms','examination_treatments.signs_symptom_id','signs_symptoms.id')
        ->join('weights','examination_treatments.weight_id','weights.id')
        ->join('products','examination_treatments.product_id','products.id')
        ->join('diseases','examination_treatments.disease_id','diseases.id')
        ->join('drugs','examination_treatments.drug_id','drugs.id')
        ->join('weeks','examination_treatments.week_id','weeks.id')
        ->join('months','examination_treatments.month_id','months.id')
        ->where('examination_treatments.status','active')
        ->select('users.name','signs_symptoms.signs_symptoms','weights.weight','diseases.disease_name','drugs.drug_name',
                 'weeks.week','months.month','examination_treatments.bill','examination_treatments.deposit',
                 'examination_treatments.balance','examination_treatments.id','products.product')
        ->paginate('10');
        return view('admin.examine_and_treat_table',compact('show_all'));
    }
    public function searchExaminationTreatment(Request $request){
        $show_all =ExaminationTreatment::jpoin('users','examination_treatments.user_id','users.id')
        ->join('signs_symptoms','examination_treatments.signs_symptom_id','signs_symptoms.id')
        ->join('weights','examination_treatments.weight_id','weights.id')
        ->join('diseases','examination_treatments.disease_id','diseases.id')
        ->join('drugs','examination_treatments.drug_id','drugs.id')
        ->join('weeks','examination_treatments.week_id','weeks.id')
        ->join('months','examination_treatments.month_id','months.id')
        ->where('examination_treatments.status','active')
        ->orwhere('examination_treatments.signs_and_symptom',$request->signs_and_symptom)
        ->orwhere('users.name',$request->signs_and_symptom)
        ->orwhere('examination_treatments.prescription',$request->signs_and_symptom)
        ->select('users.name','signs_symptoms.signs_symptoms','weights.weight','diseases.disease_name','drugs.drug_name',
                 'weeks.week','months.month','examination_treatments.bill','examination_treatments.deposit',
                 'examination_treatments.balance','examination_treatments.id','products.product')
        ->paginate('10');
        return view('admin.examine_and_treat_table',compact('show_all'));
    }
    public function updateExaminationTreatmentInformation($id, Request $request){
        $get_month_id=Month::where(\strtolower("month"), strtolower($request->month))->value('id');
        $get_week_id=Week::where(\strtolower("week"), strtolower($request->week))->value('id');
        $get_weight_id=Weight::where(\strtolower("weight"), strtolower($request->weight))->value('id');
        $get_product_id=Product::where(\strtolower("product"), strtolower($request->product))->value('id');
        $get_drug_id=Drug::where(\strtolower("drug_name"), strtolower($request->drug_name))->value('id');
        $get_disease_id=Disease::where(\strtolower("disease_name"), strtolower($request->disease_name))->value('id');
        $get_signs_symptoms_id= SignsSymptoms::where(\strtolower("signs_symptoms"), strtolower($request->signs_symptoms))->value('id');
        ExaminationTreatment::where('id',$id)->update(array(
            'user_id'=>Auth::user()->id,
            'product_id'=>$get_product_id,
            'signs_symptom_id'=>$get_signs_symptoms_id,
            'weight_id'=>$get_weight_id,
            'disease_id'=>$get_disease_id,
            'drug_id'=>$get_drug_id,
            'week_id'=>$get_week_id,
            'month_id'=>$get_month_id,
            'bill'=>$request->bill,
            'deposit'=>$request->deposit,
            'balance'=>$request->balance
        ));
        return Redirect()->back()->withErrors("ExaminationTreatment details has been updated Succesfully");
    }
    public function deleteExaminationTreatment($id){
        ExaminationTreatment::where('id',$id)->update(array('status'=>'deleted'));
        return Redirect()->back()->withErrors("ExaminationTreatment details has been deleted Succesfully");
    }
}
