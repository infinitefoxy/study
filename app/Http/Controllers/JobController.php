<?php

namespace App\Http\Controllers;
use DB;
use App\Models\Job;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function detail($id)
{
    $daten = DB::table('jobs')->find($id);
    return view('detail', compact('daten'));
}
    
    /**
     * Display the specified resource.
     */
    public function show()
    {
        $daten = DB::table('jobs')->get();
        return view('list', compact('daten'));
    } 

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

   
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreJobRequest $request)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'anstellungsart' => 'required',
            'standort' => 'required',
            'erfahrung' => 'required',
            'sprache' => 'required',
        ]);
        Job::create($validatedData);
        
    
        return view('index');
    }


    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $daten = DB::table('jobs')->find($id);
        return view('create.edit', compact('daten'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreJobRequest $request, $id)
{
    $validatedData = $request->validate([
        'title' => 'required',
        'description' => 'required',
        'anstellungsart' => 'required',
        'standort' => 'required',
        'erfahrung' => 'required',
        'sprache' => 'required',
    ]);
    Job::update($validatedData);

    return redirect()->route('create.edit');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        return view('jobs.destroy', compact('job'));
    }
}
