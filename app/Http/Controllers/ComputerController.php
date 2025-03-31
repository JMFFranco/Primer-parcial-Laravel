<?php

namespace App\Http\Controllers;

use App\Http\Requests\ComputerRequest;
use App\Models\Computer;
use Illuminate\Http\Request;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Computer::where("computer_brand", "ilike", "%$request->search%")
        ->orderBy("id", "asc")
        ->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComputerRequest $request)
    {
        $event = Computer::create($request->all());
        return response()->json([
            "status" => true,
            "event" => $event
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Computer $computer)
    {
        return response()->json(["status" => true, "" => $computer]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComputerRequest $request, Computer $computer)
    {
        if ($computer->update($request->all())) {
            return response()->json(["status" => true, "computer" => $computer]);
        }
        return response()->json(["status" => false, "computer" => $computer]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Computer $computer)
    {
        if ($computer->delete()) {
            return response()->json(["status" => true, "computer" => $computer]);
        }
        return response()->json(["status" => false, "computer" => $computer]);
    }
}
