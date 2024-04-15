<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employe\EmployeeController;
use App\Http\Controllers\Employe\EmployeeLeaveController;
use App\Http\Controllers\Employe\EmployeeSettingsController;
use App\Http\Controllers\MemberScoutsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});


\Illuminate\Support\Facades\Auth::routes(["register" => false]);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::controller(App\Http\Controllers\Admin\AdminController::class)->group(function () {
    Route::get('/admin', 'index')->name("admin.index");
});
Route::controller(App\Http\Controllers\Admin\AdminEmployeeController::class)->group(function () {
    Route::get('/admin/employes/', "index")->name("admin.employee.index");
    Route::get("admin/employee/create", "create")->name("admin.employee.create");
    Route::post("admin/employee/create", "store")->name("admin.employee.store");
    Route::delete("admin/employee/{id}/delete", "delete")->name("admin.employee.delete");
});
Route::controller(App\Http\Controllers\Admin\AdminAbsenceController::class)->group(function () {
    Route::get("admin/absence", "index")->name("admin.absence.index");
    Route::post("admin/absence/create", "store")->name("admin.absence.store");
});

Route::controller(App\Http\Controllers\Admin\AdminDocumentController::class)->group(function () {
    Route::get('admin/employees/download', "employeeListe")->name("admin.document.employees");
});
Route::controller(App\Http\Controllers\Admin\AdminLeaveController::class)->group(function () {
    Route::get("admin/leave", "index")->name("admin.leave.index");
    Route::post('admin/leave', "store")->name("admin.leave.store");
    Route::get('admin/leaves', "demande")->name("admin.leave.demande");
    Route::put('admin/leave/{id}/accepted', "accepteLeave")->name("admin.leave.accept");
    Route::put('admin/leave/{id}/rejected', "refuseLeave")->name("admin.leave.reject");
});
Route::controller(App\Http\Controllers\Admin\AdminPostController::class)->group(function () {
    Route::get("admin/posts", "index")->name("admin.post.index");
    Route::post('admin/post', "store")->name("admin.post.store");
});

Route::controller(App\Http\Controllers\Admin\AdminStagiaireController::class)->group(function () {
    Route::get('/admin/stagiaires/', "index")->name("admin.stagiaire.index");
    Route::get("admin/stagiaire/create", "create")->name("admin.stagiaire.create");
    Route::post("admin/stagiaire/create", "store")->name("admin.stagiaire.store");
    Route::delete("admin/stagiaire/{id}", "delete")->name("admin.stagiaire.delete");
});

Route::controller(App\Http\Controllers\Admin\AdminProjectController::class)->group(function () {
    Route::get('/admin/projects/', "index")->name("admin.project.index");
    Route::post("admin/project/create", "store")->name("admin.project.store");
    Route::post("/admin/project/createteam", "createTeam")->name('admin.project.createTeam');
    Route::delete("/admin/project/{id}/delete", "delete")->name("admin.project.delete");
});
Route::controller(App\Http\Controllers\Admin\AdminDepartementController::class)->group(function () {
    Route::get('/admin/departements/', "index")->name("admin.departement.index");
    Route::post("admin/departement/create", "store")->name("admin.departement.store");
});


Route::controller(EmployeeController::class)->group(function () {
    Route::get('/employee', 'profile')->name("employee.index");
});

Route::controller(EmployeeLeaveController::class)->group(function () {
    Route::get('/employee/leave', 'index')->name('employee.leave.index');
    Route::post('/employee/leave', 'store')->name('employee.leave.store');
});


Route::controller(EmployeeSettingsController::class)->group(function () {
    Route::get('/employee/settings', 'change_password_index')->name("employe.settings.changepassword_index");
    Route::patch('/employee/settings/changePassword', 'change_password_store')->name('employe.settings.changepassword_store');
});
// project

use App\Http\Controllers\SuperAdmin;
route::get('super_Admin' , function ()  {
    return view('admins.super_admin.index');
});
route::get('super_Admin/AllMember' ,[SuperAdmin::class , 'index'])->name('members_super.list');
route::get('super_Admin/AllMember/create' ,[SuperAdmin::class , 'create'])->name('members_super.create');
route::post('super_Admin/AllMember/store' ,[SuperAdmin::class , 'store'])->name('members_super.store');
route::get('super_Admin/AllMember/show/{id}' ,[SuperAdmin::class , 'show'])->name('members_super.show');
route::get('super_Admin/AllMember/edit/{id}' ,[SuperAdmin::class , 'edit'])->name('members_super.edit');
Route::put('super_Admin/AllMember/update/{id}', [SuperAdmin::class , 'update'])->name('members_super.update');
route::get('super_Admin/AllMember/destroy/{id}' ,[SuperAdmin::class , 'destroy'])->name('members_super.destroy');
route::post('super_Admin/delleteAll' ,[SuperAdmin::class , 'destroyAll'])->name('delete_All_member_super');


route::get('central' , function ()  {
    return view('admins.central.index');
});
route::get('central/AllMember' ,[MemberScoutsController::class , 'index'])->name('members.list');
route::get('central/AllMember/create' ,[MemberScoutsController::class , 'create'])->name('members.create');
route::post('central/AllMember/store' ,[MemberScoutsController::class , 'store'])->name('members.store');
route::get('central/AllMember/show/{id}' ,[MemberScoutsController::class , 'show'])->name('members.show');
route::get('central/AllMember/edit/{id}' ,[MemberScoutsController::class , 'edit'])->name('members.edit');
Route::put('central/AllMember/update/{id}', [MemberScoutsController::class , 'update'])->name('members.update');
route::get('central/AllMember/destroy/{id}' ,[MemberScoutsController::class , 'destroy'])->name('members.destroy');
route::post('central/delleteAll' ,[MemberScoutsController::class , 'destroyAll'])->name('delete_All_member');
// Region
route::get('Region' , function ()  {
    return view('admins.Region.index');
});
use App\Http\Controllers\Region;
route::get('Region/AllMember' ,[Region::class , 'index'])->name('Region.list');
route::get('Region/AllMember/create' ,[Region::class , 'create'])->name('Region.create');
route::post('Region/AllMember/store' ,[Region::class , 'store'])->name('Region.store');
route::get('Region/AllMember/show/{id}' ,[Region::class , 'show'])->name('Region.show');
route::get('Region/AllMember/edit/{id}' ,[Region::class , 'edit'])->name('Region.edit');
Route::put('Region/AllMember/update/{id}', [Region::class , 'update'])->name('Region.update');
route::get('Region/AllMember/destroy/{id}' ,[Region::class , 'destroy'])->name('Region.destroy');
// fillier
route::get('fillier' , function ()  {
    return view('admins.fillier.index');
});
use App\Http\Controllers\Fillier;
route::get('fillier/AllMember' ,[Fillier::class , 'index'])->name('fillier.list');
route::get('fillier/AllMember/create' ,[Fillier::class , 'create'])->name('fillier.create');
route::post('fillier/AllMember/store' ,[Fillier::class , 'store'])->name('fillier.store');
route::get('fillier/AllMember/show/{id}' ,[Fillier::class , 'show'])->name('fillier.show');
route::get('fillier/AllMember/edit/{id}' ,[Fillier::class , 'edit'])->name('fillier.edit');
Route::put('fillier/AllMember/update/{id}', [Fillier::class , 'update'])->name('fillier.update');
route::get('fillier/AllMember/destroy/{id}' ,[Fillier::class , 'destroy'])->name('fillier.destroy');
// member
route::get('member' , function ()  {
    return view('member.index');
});
use App\Http\Controllers\memberScout;
route::get('member/profile' ,[memberScout::class , 'index'])->name('member.list');

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
 });
