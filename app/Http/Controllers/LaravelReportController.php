<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaravelReportController extends Controller
{
    public function index(){
    	return view('laravel_reports.laravel_report_index');
    }
}
