<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Home Page
Route::get('/', function () {
    return view('index');
});
 
 
// Register Route
Route::match(["get", "post"], "registration", [AuthController::class, "registration"])
    ->name("registration");

// Login Route
Route::match(["get", "post"], "login", [AuthController::class, "login"])
    ->name("login");
 
// Dashboard (Only accessible after login)
Route::get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard')->middleware('auth'); 

 // Components Routes
 Route::prefix('components')->group(function () {
    Route::get('/avatarc', [AuthController::class, 'avatarc'])->name('components.avatarc');
    Route::get('/buttons', [AuthController::class, 'buttons'])->name('components.buttons');
    Route::get('/gridsystem', [AuthController::class, 'gridsystem'])->name('components.gridsystem');
    Route::get('/panels', [AuthController::class, 'panels'])->name('components.panels');
    Route::get('/notifications', [AuthController::class, 'notifications'])->name('components.notifications');
    Route::get('/sweetalert', [AuthController::class, 'sweetalert'])->name('components.sweetalert');
    Route::get('/font-awesome-icons', [AuthController::class, 'font_awesome_icons'])->name('components.font-awesome-icons');
    Route::get('/simple-line-icon', [AuthController::class, 'simple_line_icon'])->name('components.simple-line-icon');
    Route::get('/typography', [AuthController::class, 'typography'])->name('components.typography');
}); 

// form..
Route::get('/forms/form', [AuthController::class, 'form'])->name('forms.form')->middleware('auth'); 

// tables..
Route::prefix('tables')->group(function () {
    Route::get('/tables/tables', [AuthController::class, 'tables'])->name('tables.tables'); 
    Route::get('/tables/datatables-form', [AuthController::class, 'datatablesForm'])->name('tables.datatables-form'); 

}); 


 // Maps Routes
Route::prefix('maps')->group(function () {
    Route::get('/jsvectormap', [AuthController::class, 'jsvectormap'])->name('maps.jsvectormap');
    Route::get('/googlemap', [AuthController::class, 'googlemap'])->name('maps.googlemap');
}); 

// Public Route (Form Submission - No Authentication Required)
Route::post('/submitform', [AuthController::class, 'submitform'])->name('submitform');

// Logout Route (logout will work in controller)
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Delete User (only for logged-in users, handled in controller)
Route::delete('/delete-user/{id}', [AuthController::class, 'deleteUser'])->name('delete-user');
