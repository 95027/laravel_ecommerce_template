<?php

namespace Modules\Address\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Address\Models\Address;

class AddressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('address::index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('address::create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'addressType' => 'required',      // Correct rule for required field
            'name' => 'required|string|max:255',
            'phone' => 'required|numeric',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'postal' => 'required|string|max:20',
            'country' => 'required|string|max:255',
        ]);

        $userId = auth()->id();

        $address = new Address();
        $address->userId = $userId;
        $address->addresstype = $request->input('addressType');
        $address->name = $request->input('name');
        $address->phone = $request->input('phone');
        $address->street = $request->input('street');
        $address->city = $request->input('city');
        $address->postal = $request->input('postal');
        $address->country = $request->input('country');
        $address->save();

        notify()->success('New address added successfully.');
        return redirect()->back();

    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        return view('address::show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('address::edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }
}
