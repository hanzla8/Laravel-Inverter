<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\AppointmentTableController;
use App\Http\Controllers\Frontend\FrontEndController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [FrontEndController::class, 'index'])->name('home');
Route::get('/about', [FrontEndController::class, 'about'])->name('about');
Route::get('/product', [FrontEndController::class, 'product'])->name('product');
Route::get('/services', [FrontEndController::class, 'services'])->name('services');
Route::get('/cart', [FrontEndController::class, 'cart'])->name('cart');
Route::get('/checkout', [FrontEndController::class, 'checkout'])->name('checkout');
Route::get('/blog', [FrontEndController::class, 'blog'])->name('blog');
Route::get('/contact', [FrontEndController::class, 'ShowContact'])->name('contact');
Route::post('/contact', [FrontEndController::class, 'contact'])->name('contact');




// Appintment Inserted
Route::post('/updatepost', [AppointmentTableController::class, 'store'])->name('appointmentInsert');



Route::get('/admin/appointments', [AppointmentTableController::class, 'index'])->name('admin.appointments');
Route::delete('/admin/appointments/{id}', [AppointmentTableController::class, 'destroy'])->name('admin.appointments.destroy');



// this is our route to create book in admin portion
Route::get('/admin/add_item', [AppointmentTableController::class, 'add_item'])->name('admin.add_item');

// this is our route to upload book into the database
Route::post('/admin/upload_item', [AppointmentTableController::class, 'upload_item'])->name('admin.additem');

// this is our route to view book into the admin panel
Route::get('/view_item', [AppointmentTableController::class, 'view_item'])->name('admin.view_item');

// this is our route to Delete book
Route::get('/delete_item/{id}', [AppointmentTableController::class, 'delete_item']);

// shown Contact us Form data
Route::get('/admin/contact_us', [AppointmentTableController::class, 'contact_us'])->name('admin.contact_us');
Route::delete('/admin/deletepdt/{id}', [AppointmentTableController::class, 'deletepdt'])->name('admin.deletepdt');














Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';