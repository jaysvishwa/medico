<?php

namespace App\Http\Controllers\Admin\Appointment;

use App\Models\Appointment;
use App\Models\User;
use App\Models\Option;
use App\Models\Billing;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Model;

class AppointmentController extends Controller
{
    
    public function index()
    {
        //$appointments = Appointment::with('user','billing')->get();
        $appointments = Appointment::all();
        //dd($appointments);
        return request()-json(200,$appointments);
        
    }

   
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        //
    }

  
    public function show($id)
    {
        //
    }

   
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

   
    public function destroy($id)
    {
        //
    }

}
