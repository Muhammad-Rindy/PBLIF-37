<?php

namespace App\Http\Controllers;

use App\Models\Lecturer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard()
    {
        return view('dashboard');
    }
    public function index_lecturer()
    {
        $lecturers = Lecturer::all();
        return view('index_lecturer', compact('lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_lecturer()
    {
      return view('create_lecturer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_lecturer(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'uuid' => 'required',
            'hp' => 'required',
        ]);

        Lecturer::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'uuid' => $request->uuid,
            'hp' => $request->hp,
        ]);

        return Redirect::back()->with('success', 'Form submitted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_lecturer(Lecturer $lecturer)
    {
        return view('edit_lecturer', compact('lecturer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_lecturer(Lecturer $lecturer, Request $request)
    {
        $request->validate([
            'name' => 'required',
            'nik' => 'required',
            'uuid' => 'required',
            'hp' => 'required',
        ]);

        $lecturer->update([
            'name' => $request->name,
            'nik' => $request->nik,
            'uuid' => $request->uuid,
            'hp' => $request->hp,
        ]);

        return Redirect::route('index_lecturer')->with('success', 'Updated successfully.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_lecturer(Lecturer $lecturer)
    {
        $lecturer->delete();
        return Redirect::back()->with('success', 'Deleted successfully.');;
    }
}