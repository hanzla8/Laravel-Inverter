<?php

namespace App\Http\Controllers;

use App\Models\AddProduct;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Http\Controllers\AppointmentTableController;
use App\Models\AppointmentTable; // Assuming AppointmentTable is a model in the App\Models namespace

class AppointmentTableController extends Controller
{

    public function store(Request $req)
    {
        if (auth()->check())  //ye Cheak krne ke liye hai, wo tb tk message nahi bhje skta, jb tk login na kre
        {
            $appointment = new AppointmentTable();

            $appointment->name      = $req->name;
            $appointment->tel      = $req->tel;
            $appointment->email     = $req->email;
            
           
            $appointment->save();
            

            return redirect()->back()->with("success", "Your Data Submitted"); // Updated the success message
            
            } else {
                return redirect()->route('login')->with('error', 'Please log in to submit the form.');
        }
    }

    public function index()
    {
        $appointments = AppointmentTable::all();
        return view('admin.appointments', compact('appointments'));
    }

    public function destroy($id)
    {
        $appointment = AppointmentTable::find($id);

        if (!$appointment) {
            return redirect()->back()->with('error', 'Appointment not found');
        }

        $appointment->delete();

        return redirect()->route('admin.appointments')->with('success', 'Appointment deleted successfully');
    }

    // COpy Work Starting here
//////////////////////////////////////////////////////
///////////////////////////////////////////////////
////////////////////////////////////////////////
//////////////////////////////////////////////
    // add a book function
    public function add_item(){
        return view('admin.add_item');
    }

    // upload data into DB of room table
    public function upload_item(Request $request){

        $data = new AddProduct();

        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;

        $image = $request->image;

        if($image){

            $imagename = time().'.'.$image->getClientOriginalExtension();

            $request->image->move('productimg', $imagename);

            $data->image = $imagename;

        }

        $data->save();

        return redirect()->back()->with('data', 'Your Data inserted');
    }

    // view the book
    public function view_item(){

        $data = AddProduct::all();

        return view('admin.view_item', compact('data'));
    }

    // view the book
    public function delete_item($id){

        $data = AddProduct::find($id);

        $data->delete();

        return redirect()->back();
    }


    // Contact data read
    public function contact_us()
    {
        $data = ContactPage::all();

        return view('admin.contact_us', compact('data'));
    }

    // view the book
    public function deletepdt($id){
        $data = ContactPage::find($id);
    
        if ($data) {
            $data->delete();
            return redirect()->back()->with('success', 'Record deleted successfully.');
        } else {
            return redirect()->back()->with('error', 'Record not found.');
        }
    }




    
    

}


