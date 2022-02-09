<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Reservation[]|Collection|Response
     */
    public function index()
    {
        // not requested to implement in the assessment
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required',
            'bus_id' => 'required',
            'station_id_from' => 'required',
            'station_id_to' => 'required',
        ]);

        $input = $request->only(['date', 'bus_id', 'station_id_from', 'station_id_to']);
        return Reservation::create(array_merge($input, ['user_id' => Auth::id()]));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        // not requested to implement in the assessment
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        // not requested to implement in the assessment
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        // not requested to implement in the assessment
    }

    /**
     * Display a listing user's reservation.
     *
     * @return Reservation[]|Collection|Response
     */
    public function getMyReservation()
    {
        return Reservation::select('id', 'date', 'bus_id', 'station_id_from', 'station_id_To', 'user_id')
            ->where('user_id', Auth::id())
            ->with(['bus:id,name,vehicle_no', 'stationFrom:id,name', 'stationTo:id,name'])
            ->paginate();
    }
}
