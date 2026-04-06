<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/admin/admin_add_cater', function () {
    return view('admin.admin_add_cater');
});

Route::get('/admin/admin_list_cater', function () {
    return view('admin.admin_list_cater');
});

Route::get('/admin/admin_manage_staff', function () {
    return view('admin.admin_manage_staff');
});

Route::get('/staff/staff_dashboard', function () {
    return view('staff.staff_dashboard');
});

Route::get('/staff/staff_add_cater', function () {
    return view('staff.staff_add_cater');
});

Route::get('/staff/staff_list_cater', function () {
    return view('staff.staff_list_cater');
});

Route::get('/staff/staff_book_item', function () {
    return view('staff.staff_book_item');
});

Route::get('/staff/staff_book_item_status', function () {
    return view('staff.staff_book_item_status');
});