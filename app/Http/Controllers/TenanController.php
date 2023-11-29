<?php

namespace App\Http\Controllers;

use App\Models\Tenan;
use Illuminate\Http\Request;

class TenanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tenans = Tenan::latest()->paginate(5);

        return view('tenans.index', compact('tenans'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

/**
 * Show the form for creating a new resource.
 *
 * @return \Illuminate\Http\Response
 */
public function create()
    {
        return view('tenans.create');
    }

/**
 * Store a newly created resource in storage.
 *
 * @param  \Illuminate\Http\Request  $request
 * @return \Illuminate\Http\Response
 */
public function store(Request $request)
    {
        $request->validate([
            'kodeKasir' => 'required',
            'namaKasir' => 'required',
            'no_tlp' => 'required',
        ]);

        Tenan::create($request->all());

        return redirect()->route('tenans.index')
                        ->with('success', 'Tenan created successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tenan  $tenan
     * @return \Illuminate\Http\Response
     */
    public function show(Tenan $tenan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tenan  $tenan
     * @return \Illuminate\Http\Response
     */
    public function edit(Tenan $tenan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tenan  $tenan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tenan $tenan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tenan  $tenan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tenan $tenan)
    {
        //
    }
}
