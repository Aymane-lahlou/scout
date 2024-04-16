<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employe\EmployeeController;
use App\Http\Controllers\Employe\EmployeeLeaveController;
use App\Http\Controllers\Employe\EmployeeSettingsController;
use App\Http\Controllers\MemberScoutsController;


Route::get('/', function () {
    return view('welcome');
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
