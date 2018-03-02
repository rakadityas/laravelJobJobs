<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
date_default_timezone_set("Asia/Jakarta");
class ShowController extends Controller
{
    public function index()
    {
    	$date=date("d F Y");
    	return view('member.home.home',compact('date'));
    }

    public function indexUsers()
    {
        $date=date("d F Y");
        return view('member.home.home',compact('date'));
    }
    public function dashboard()
    {
    	$date=date("d F Y");
    	return view('member.dashboard.dashboard',compact('date'));
    }
    public function inbox()
    {
    	$date=date("d F Y");
    	return view('member.inbox.inbox',compact('date'));
    }
    public function ideas()
    {
    	$date=date("d F Y");
    	return view('member.ideas.ideas',compact('date'));
    }
    public function partner()
    {
    	$date=date("d F Y");
    	return view('member.partner.partner',compact('date'));
    }
    public function projectPosters()
    {
    	$date=date("d F Y");
    	return view('member.project.projectPosters',compact('date'));
    }
    public function projectWorkers()
    {
        $date=date("d F Y");
        return view('member.project.projectPartners',compact('date'));
    }
    public function MyPartner()
    {
        $date=date("d F Y");
        return view('member.project.MyPartner',compact('date'));
    }
    public function profile()
    {
        $date=date("d F Y");
        return view('member.profile.profile',compact('date'));
    }

    public function payment()
    {
        $date=date("d F Y");
        return view('member.payment.payment',compact('date'));
    }


    // auth 
    public function register()
    {
        $date=date("d F Y");
        return view('member.auth.register',compact('date'));
    }
    public function login()
    {
        $date=date("d F Y");
        return view('member.auth.login',compact('date'));
    }
}
