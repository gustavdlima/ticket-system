<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Inertia\Inertia;

class TicketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return inertia(
            'Ticket/Index',
            [
                'tickets' => Ticket::all()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return inertia(
            'Ticket/Create'
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Ticket::create($request->all());

        return redirect()->route('ticket.index')
            ->with('success', 'O chamado foi realizado com sucesso! Agora é só esperar :)');
    }


    public function list(Request $request) {
        return inertia(
            'Ticket/Listar',
            [
                'tickets' => Ticket::all()
            ]
        );
    }
    /**
     * Display the specified resource.
     */
    public function show(Ticket $ticket)
    {
        return inertia(
            'Ticket/Show',
            [
                'tickets' => $ticket
            ]
        );
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
