<?php

namespace App\Http\Controllers\Admin\Billing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Appointment;
use App\Models\User;
use App\Models\Option;
use App\Models\Billing;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Model;
use DB;

class BillingController extends Controller
{
    
    public function index(){       
        return view('admin/billing/billing');
    }
    
    public function allBilling(){       
        
        //return 'All Billing';
        $billing =Billing::orderBy('id','desc')->with('user','appointment')->paginate(4);
        return request()->json(200,$billing);
    }

 
    public function create(){
        //
    }

  
    public function store(Request $request){
        //
    }

    
    public function show($id){
        //
    }

   
    public function edit($id){
        //
    }

   
    public function update(Request $request, $id){
        //
    }

   
    public function destroy($id){
        //
    }
}
