<?php

namespace App\Http\Controllers;

use App\Models\ConfigurationPayment;
use Illuminate\Http\Request;

class AdquireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $adquires = ConfigurationPayment::where('adquires', '704Pay')->firstOrFail();
        return view('admin.adquires', compact('adquires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $adquire = ConfigurationPayment::where('adquires', '704Pay')->first();
        return view('admin.adquires', compact('adquire'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // \dd($request->all());
        $request->validate([
            'id' => 'required|string|max:255',
            'secret' => 'required|string|max:255',
            'url' => 'required|string|max:255',
            'type' => 'required|boolean',
            'active' => 'boolean',
        ]);


        $data = [
            'type' => $request->type,
            'active' => $request->has('active') ? 1 : 0,
        ];

        if ($request->type) {

            $data['id_production'] = $request->id;
            $data['secret_production'] = $request->secret;
            $data['url_production'] = $request->url;
        } else {

            $data['id_homologation'] = $request->id;
            $data['secret_homologation'] = $request->secret;
            $data['url_homologation'] = $request->url;
        }

        ConfigurationPayment::updateOrCreate(['adquires' => '704Pay'], $data);

        return redirect()->back()->with('success', 'Adquirente criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
