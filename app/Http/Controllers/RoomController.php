<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_room()
    {
        $rooms = Room::all();
        return view('index_room', compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_room()
    {
      return view('create_room');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_room(Request $request)
    {
        $request->validate([
            'room' => 'required',
            'edifice' => 'required',
            'level' => 'required',
        ]);

        Room::create([
            'room' => $request->room,
            'edifice' => $request->edifice,
            'level' => $request->level,
        ]);

        return Redirect::back()->with('success', 'Form submitted successfully.');
    }

    /**
     * Display the specified resource.
     *
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_room(Room $room)
    {
        return view('edit_room', compact('room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_room(Room $room, Request $request)
    {
        $request->validate([
            'room' => 'required',
            'edifice' => 'required',
            'level' => 'required',
        ]);

        $room->update([
            'room' => $request->room,
            'edifice' => $request->edifice,
            'level' => $request->level,
        ]);

        return Redirect::route('index_room')->with('success', 'Updated successfully.');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_room(Room $room)
    {
        $room->delete();
        return Redirect::back()->with('success', 'Deleted successfully.');;
    }
}