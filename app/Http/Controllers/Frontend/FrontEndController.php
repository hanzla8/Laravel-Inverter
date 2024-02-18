<?php

namespace App\Http\Controllers\Frontend;

use App\Models\AddProduct;
use App\Models\ContactPage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\FrontEndController;

class FrontEndController extends Controller
{
    // Index
    public function index()
    {
        return view('index');
    }

    // About
    public function about()
    {
        return view('about');
    }

    // PracticeArea
    public function product()
    {
        $data = AddProduct::all();

        return view('product', compact('data'));
    }

    // Casses
    public function services()
    {
        return view('services');
    }

    // Attorney
    public function cart()
    {
        return view('cart');
    }
    
    // Checkout
    public function checkout()
    {
        return view('checkout');
    }

    // BLOG
    public function blog()
    {
        return view('blog');
    }

    // Contact
    public function ShowContact()
    {
        return view('contact');
    }

    // Contact page work
    public function contact(Request $req)
    {
        if (auth()->check())  //ye Cheak krne ke liye hai, wo tb tk message nahi bhje skta, jb tk login na kre
        {
            $data = new ContactPage();

            $data->name      = $req->name;
            $data->number      = $req->number;
            $data->location      = $req->location;
            $data->message     = $req->message;
            
           
            $data->save();
            

            return redirect()->back()->with("success", "Your Data Has Been Submitted"); // Updated the success message
            
            } else {
                return redirect()->route('login')->with('error', 'Please log in to submit the form.');
        }
    }


}
