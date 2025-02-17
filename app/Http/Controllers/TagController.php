<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function __invoke(Tag $tag){

        return view('jobs.search', ['jobs'=>$tag->job]);
    }

    public function show(Tag $tag){
        $tags= $tag->all();
        return view('tags.show', ['tags'=>$tags]);
    }
    
}
