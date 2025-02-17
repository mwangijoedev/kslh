<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\tickets;
use App\Models\tshirts;
use App\Models\sweatshirts;
use App\Models\hoodies;
use App\Models\jackets;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Validation\Rule;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = product::all();
        $tshirts = tshirts::all();
        $sweatshirts = sweatshirts::all();
        $hoodies = hoodies::all();
        $jackets = jackets::all();
        $tickets = tickets::all(); 

        $jobs =Job::latest()->with(['tags','employer'])->get()->groupBy('featured');

        return view('home',
        [
            'products'=>$products, 
            'tshirts'=>$tshirts,
            'sweatshirts'=>$sweatshirts,
            'hoodies'=>$hoodies,
            'jackets'=>$jackets ,
            'tickets'=>$tickets,
            'tags'=>Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $attributes = $request->validate([
            'title'=>['required'],
            'salary'=>['required'],
            'location'=>['required'],
            'schedule'=>['required', Rule::in(['Part Time', 'Full Time'])],
            'url'=>['required', 'active-url'],
            'tags'=>['nullable'],
        ]);

        $attributes['featured']= $request->has('featured');

        $job =Auth::user()->employer->job()->create(Arr::except($attributes, 'tags'));

        if($attributes['tags'] ?? false){
            foreach(explode(',', $attributes['tags']) as $tag){
                $job->tag($tag);
            }
        }

        return redirect('/');


    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        return view('jobs.show',['job'=>$job]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        return view('jobs.edit',['job'=>$job]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Job $job)
    {
       $attributes=$request->validate([
        'title'=>['required'],
        'salary'=>['required'],
       ]);

       if(!Gate::authorize('update_job', $job)){
        abort(403);
       }

       $job->update($attributes);

       return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        $job->delete();
        return redirect('/');
    }
}
