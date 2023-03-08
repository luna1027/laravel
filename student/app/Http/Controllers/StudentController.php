<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            ['name' => 'Amy', 'mobile' => '0911-111-111'],
            ['name' => 'Bob', 'mobile' => '0922-222-222'],
            ['name' => 'Cat', 'mobile' => '0933-333-333']
        ];
        return view('student.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return view('student.store');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // return view('student.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // return view('student.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // return view('student.update');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return view('student.destroy');
    }

    // My Functions
    public function excel()
    {
        return view('student.excel');
    }

    public function child()
    {
        return view('child');
    }
}
