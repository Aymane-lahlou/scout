<?php

namespace App\Http\Controllers;
use App\Models\Activity;

use App\Models\MemberScouts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class memberScout extends Controller
{

    public function index()
    {
        $members = MemberScouts::paginate(1);

        return view('member.welcome', compact('members'));
    }

    public function create()
    {
    }


    public function store(Request $request)
{

}





    public function show(Request $request ,$id)
    {

    }

    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {


    }

}
