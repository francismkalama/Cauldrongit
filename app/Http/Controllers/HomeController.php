<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('adminindex','index');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index(){
     $images = DB::table('uploads')->where('category','slider')->get(); 
         return view('welcome')->with('image', $images);
    }

    public function adminindex()
    {
        return view('admin\adminhome');
    }

    public function aboutuspage(){
        return view('aboutus');
    }
   public function contactuspage(){
       return view('contactus');
   }
    public function mediapage(){
       return view('media');
   }
    public function teammemberspage(){
       return view('teammembers');
   }
   //finance management 
   public function budgetingpage(){
    return view('finance\budgeting');
   }
public function savingpage(){
    return view('finance\saving');
   }
public function investingpage(){
    return view('finance\investing');
   }
public function insurancepage(){
    return view('finance\insurance');
   }
public function retirementpage(){
    return view('finance\retirement');
   }
public function debtmanagepage(){
    return view('finance\debtmanagement');
   }
public function taxespage(){
    return view('finance\taxes');
   }
   //training
public function customerservicepage(){
    return view('training\customerservices');
   }
   public function insurancecoursespage(){
    return view('training\insurancecourses');
   }
   public function insuranceprdctpage(){
    return view('training\insuranceprodcts');
   }
   public function personalfpage(){
    return view('training\personalfinance');
   }
   public function fraudpage(){
    return view('training\frauddetection');
   }
   //talent search
     public function careergrowthpage(){
    return view('talentsearch\careergrowth');
   }
    public function productivitypage(){
    return view('talentsearch\productivity');
   }
    public function joblosspage(){
    return view('talentsearch\jobloss');
   }
    public function choosecareerpage(){
    return view('talentsearch\careerchoice');
   }
   //salesmanagement
   public function recruitingtpage(){
    return view('salesmanagement\recruiting');
   } 
   public function sellingskillspage(){
    return view('salesmanagement\sellingskills');
   } 
   public function leadershippage(){
    return view('salesmanagement\leadership');
   } 
   public function crosssellingpage(){
    return view('salesmanagement\crosselling');
   }  





   
}
