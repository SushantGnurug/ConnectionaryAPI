<?php

namespace App\Http\Controllers;

use App\Experience;
use App\Kyc;
use App\Service;
use App\Users;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users          =           Users::all();
        return view('dashboard.user.index')
            ->with('users',$users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user           =       Users::all()->find($id);
        $kyc            =       Kyc::all()->where('user_id',$id);
        $experiences    =       Experience::all()->where('user_id',$id);
        $services       =       Service::all()->where('user_id',$id);
        return view('dashboard.user.detail')
            ->with('user',$user)
            ->with('kyc',$kyc)
            ->with('experiences',$experiences)
            ->with('services',$services);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function servicesbyuser($id)
    {
        $services               =           Service::all()->where('user_id',$id);
        $user                   =       Users::all()->find($id);
        return view('dashboard.user.servicebyuser')
            ->with('services',$services)
            ->with('user',$user);
    }
    public function experiencesbyuser($id)
    {
        $experiences            =           Experience::all()->where('user_id',$id);
        $user                   =           Users::all()->find($id);
        return view('dashboard.user.experiencebyuser')
            ->with('experiences',$experiences)
            ->with('user',$user);
    }
}
