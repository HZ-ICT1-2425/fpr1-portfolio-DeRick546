<?php

namespace App\Http\Controllers;

use App\Models\dashboard;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dashboard = Dashboard::all();

        return view('dashboard.index', [
            'dashboards' => Dashboard::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Dashboard $dashboard)
    {
        $validated = $request->validate([
            'grade' => 'required|numeric|min:0|max:10',
        ]);

        $dashboard = create($validated);

        return redirect()->route('dashboard.index', $dashboard)
            ->with('success', "grade is successfully created");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dashboard $dashboard)
    {
        $validated = $request->validate([
            'grade' => 'required|numeric|min:0|max:10',
        ]);

        $dashboard->update($validated);

        return redirect()->route('dashboard.index', $dashboard)
            ->with('success', "grade is successfully updated");
    }
}
