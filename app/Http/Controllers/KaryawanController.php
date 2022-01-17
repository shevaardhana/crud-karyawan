<?php

namespace App\Http\Controllers;

use App\Http\Requests\KaryawanRequest;
use Illuminate\Http\Request;
use App\Models\Karyawan;
use PDF;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $items = Karyawan::all();

        return view('index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['status'] = "Bekerja";

        Karyawan::create($data);

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Karyawan::findOrFail($id);

        return view('edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KaryawanRequest $request, $id)
    {
        $data = $request->all();

        $item = Karyawan::findOrFail($id);
        $item->update($data);

        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Karyawan::findOrFail($id);
        $item->delete();

        return redirect()->route('karyawan.index');
    }

    public function setStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:PHK,Bekerja'
        ]);

        $item = Karyawan::findOrFail($id);
        $item->status = $request->status;

        $item->save();

        return redirect()->route('karyawan.index');
    }


}
