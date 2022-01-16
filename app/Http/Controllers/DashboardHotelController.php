<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class DashboardHotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user/user-dashboard-hotel', [
            'hotels' => Hotel::where('user_id', auth()->user()->id)->latest()->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user-dashboard-input-hotel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'total_rooms' => 'required',
        ]);
        $validateData['user_id'] = auth()->user()->id;
        Hotel::create($validateData);
        return redirect('/user-dashboard/hotel/create')->with('input_hotel', 'Insert Hotel Successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        return view('user.user-dashboard-hotel-details', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(hotel $hotel)
    {
        return view('user.user-dashboard-edit-hotel', [
            'hotel' => $hotel
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotel $hotel)
    {
        $rules = $request->validate([
            'title' => 'required',
            'address' => 'required',
            'total_rooms' => 'required',
        ]);
        $rules['user_id'] = auth()->user()->id;
        Hotel::where('id', $hotel->id)
            ->update($rules);
        return redirect('user-dashboard/hotel/'. $hotel->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {

        Hotel::destroy($hotel->id);
        return redirect('/user-dashboard/hotel');
    }
}
