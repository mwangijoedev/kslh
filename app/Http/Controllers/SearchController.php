<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke(){

        $jobs=Job::query() 
                ->with(['employer'])
                ->where('title', 'lIKE', '%'.request('q').'%')
                ->get();

        return view('jobs.search', ['jobs'=>$jobs]);
    }
}
