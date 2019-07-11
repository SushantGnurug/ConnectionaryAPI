<?php

namespace App\Http\Controllers;

use App\Connectionary;
use App\Experience;
use App\Kyc;
use App\Service;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function dashboard()
    {
        $totalUsers         =       User::get()->count();
        $totalServices      =       Service::get()->count();
        $totalKyc           =       Kyc::get()->count();
        $totalProfessions   =       Experience::get()->count();
        $totalConnections   =       Connectionary::get()->count();
        return view('dashboard.dashboard')
            ->with("totalUsers",$totalUsers)
            ->with("totalServices",$totalServices)
            ->with("totalKyc",$totalKyc)
            ->with("totalProfessions",$totalProfessions)
            ->with("totalConnections",$totalConnections);
    }
}
