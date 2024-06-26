<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberScoutsController as central;


Route::get('/', function () {
    return view('welcome');
})->name('login');
Route::get('/p', function () {
    return 'iew()';
})->name('admin.index');
Route::get('/w/', function () {
    return 'iwew()';
})->name('logout');

// project

use App\Http\Controllers\SuperAdmin;
route::get('superAdmin' , function ()  {
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
route::get('super_Admin/activite' ,[SuperAdmin::class , 'activite'])->name('showactivity');
route::get('super_Admin/activite/create' ,[SuperAdmin::class , 'Create_activite'])->name('activity.create');
route::post('super_Admin/activite/store' ,[SuperAdmin::class , 'store_activite'])->name('activity.store');
route::get('super_Admin/central/list' ,[SuperAdmin::class , 'central'])->name('central');
route::get('super_Admin/REGION/list' ,[SuperAdmin::class , 'REGION'])->name('REGION');
route::get('super_Admin/filier/list' ,[SuperAdmin::class , 'filiere'])->name('filier');
Route::get('super_Admin/filiere/create', [SuperAdmin::class, 'createF'])->name('filiere.create');
Route::post('super_Admin/filiere', [SuperAdmin::class, 'storeF'])->name('filiere.store');
Route::get('super_Admin/region/create', [SuperAdmin::class, 'createR'])->name('region.createR');
Route::post('super_Admin/region', [SuperAdmin::class, 'storeR'])->name('region.storeR');
Route::get('super_Admin/central/create', [SuperAdmin::class, 'createC'])->name('central.createC');
Route::post('super_Admin/central', [SuperAdmin::class, 'storeC'])->name('central.storeC');





route::get('central' , function ()  {
    return view('admins.central.index');
});
route::get('central/AllMember' ,[central::class , 'index'])->name('members.list');
route::get('central/AllMember/create' ,[central::class , 'create'])->name('members.create');
route::post('central/AllMember/store' ,[central::class , 'store'])->name('members.store');
route::get('central/AllMember/show/{id}' ,[central::class , 'show'])->name('members.show');
route::get('central/AllMember/edit/{id}' ,[central::class , 'edit'])->name('members.edit');
Route::put('central/AllMember/update/{id}', [central::class , 'update'])->name('members.update');
route::get('central/AllMember/destroy/{id}' ,[central::class , 'destroy'])->name('members.destroy');
route::post('central/delleteAll' ,[central::class , 'destroyAll'])->name('delete_All_member');
route::get('central/activite' ,[central::class , 'activite'])->name('central.showactivity');
route::get('central/activite/create' ,[central::class , 'Create_activite'])->name('central.activity.create');
route::post('central/activite/store' ,[central::class , 'store_activite'])->name('central.activity.store');
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
route::get('Region/activite' ,[Region::class , 'activite'])->name('Region.showactivity');
route::get('Region/activite/create' ,[Region::class , 'Create_activite'])->name('Region.activity.create');
route::post('Region/activite/store' ,[Region::class , 'store_activite'])->name('Region.activity.store');
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
route::get('fillier/activite' ,[Fillier::class , 'activite'])->name('fillier.showactivity');
route::get('fillier/activite/create' ,[Fillier::class , 'Create_activite'])->name('fillier.activity.create');
route::post('fillier/activite/store' ,[Fillier::class , 'store_activite'])->name('fillier.activity.store');
// member
route::get('member' , function ()  {
    return view('member.index');
});
use App\Http\Controllers\memberScout;
route::get('member/profile' ,[memberScout::class , 'index'])->name('member.list');

Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
});
