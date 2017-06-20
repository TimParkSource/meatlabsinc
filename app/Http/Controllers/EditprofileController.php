<?php

namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;

class EditprofileController extends Controller
{
    public function index()
    {
        return view('editprofile');
    }

    public function update(Request $request, $id)
    {
        $id = Auth::user();
        $user = User::find($id);
		$user->username = Input::get('username');
		$user->biography = Input::get('biography');
		$user->save();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }


}


