<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\AppointmentTable;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\DashboardController;

class DashboardController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function appointment()
    {
        return view('admin.appointment');
    }



    // Ye Jo turn hai, aap smjhe ye Data ko Table main view krne ke liye hai
    public function readAppointment()
    {
        $appointments = AppointmentTable::all();
        return view('admin.appointment', compact('appointments'));
    }

    // Delete Section
    public function deleteAppointment($id)
    {
        $delete = AppointmentTable::find($id);
        $delete        ->          delete();
        return redirect('admin.appointment', compact('appointments'));
    }

}
