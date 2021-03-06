<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;
use App\Models\Hotel;
use App\Models\Room;
use Clockwork\Request\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Hotel $hotel)
    {
        return view('user.user-dashboard-room-lists', [
            'rooms' => $hotel->rooms->load('hotel'),
            'hotel_id' => $hotel->id
        ]);
    }
    public function dashboardRoomDetails(Room $room)
    {
        return view('user.user-dashboard-room-details', [
            'room' => $room
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreRoomRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRoomRequest $request)
    {
        Room::create([
            'hotel_id' => $request->hotel_id,
            'title' => $request->title,
            'price' => $request->price,
            'image' => $request->image
        ]);

        return redirect('user-dashboard/room/' . $request->hotel_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function show(Room $room)
    {
        return view('user/room-details', [
            'title' => 'Hotel Rooms',
            'room' => $room
        ]);
    }
    public function viewRoom(Hotel $hotel)
    {
        return view(
            'user.room-grid',
            [
                'title' => $hotel->title,
                'rooms' => $hotel->rooms->load('hotel')
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRoomRequest  $request
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Room  $room
     * @return \Illuminate\Http\Response
     */
    public function destroy(Room $room)
    {
        Room::destroy($room->id);
        return redirect('/user-dashboard/room/' . $room->hotel_id);
    }
}
