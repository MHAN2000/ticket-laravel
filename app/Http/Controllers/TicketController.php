<?php

namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Yajra\DataTables\Facades\DataTables;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $ticket = Ticket::with('city', 'educationLevel', 'status', 'responsable', 'subject')->get();
            return DataTables::of($ticket)->make();
        }

        return view('tickets.index');
    }


    public function ticketIndex() {
        return view('tickets.ticketIndex');
    }

    public function searchTicket($curp, $folio) {
        $ticket = Ticket::where('curp', $curp)->where('folio', $folio)->get()[0];
        return response()->json($ticket);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tickets.create');
    }

    public function getAvailableTimes($date) {
        $times = array('07:00:00', '07:30:00', '08:00:00', '08:30:00', '09:00:00', '09:30:00', '10:00:00', '10:30:00', '11:00:00', '11:30:00', '12:00:00', '12:30:00', '13:00:00', '13:30:00', '14:00:00');
        $tickets = Ticket::where('date', 'like', $date)->get()->pluck('time');
        foreach ($tickets as $time) {
            if (in_array(strval($time), $times)) {
                $foundIndex = array_search(strval($time), $times);
                unset($times[$foundIndex]);
                $times = array_values($times);
            }
        }
        return response()->json((array) $times);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $folio = Ticket::getFolio($request->all());
        $ticket = Ticket::create($request->all() + ['folio' => $folio]);
        return response()->json($ticket);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ticket)
    {
        $ticket = Ticket::find($ticket);
        return view('tickets.edit', compact('ticket'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ticket $ticket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ticket $ticket)
    {
        //
    }

    public function getPDF($id) {
        $ticket = Ticket::with('city', 'educationLevel', 'status', 'responsable')->find($id);
        $pdf = App::make('dompdf.wrapper');
        $pdf->loadView('tickets.pdf', compact('ticket'));
        return $pdf->stream();
    }
}
