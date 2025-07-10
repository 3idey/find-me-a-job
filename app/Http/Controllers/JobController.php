<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;
use App\Models\Job;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('jobs.index',[
            'jobs' => Job::all(),
            'tags' => Tag::all(),
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
          $attributes =  $request->validate([
                'title' => ['required', 'max:255'],
                'url' => ['required','active_url'],
                'schedule' => ['required' , 'in:full-time,part-time,contract'],
                'location' => ['required'],
                'tags' => ['nullable'],
                'salary' => ['required'],
            ]);
            $attributes['featured'] =$request->has('featured');

           $job = Auth::user()->employer->jobs()->create(Arr::except($attributes, 'tags'));

           if($attributes['tags']   ?? false){
            foreach(explode(',',$attributes['tags']) as $tag){
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
