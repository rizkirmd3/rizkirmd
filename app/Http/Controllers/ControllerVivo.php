<?php

namespace App\Http\Controllers;

use App\Model_Vivo;
use Illuminate\Http\Request;

class ControllerVivo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vivo = Model_Vivo::paginate(5);
        return view('admin.smartphone',['vivo'=> $vivo]);
    }

    public function carivivo(request $request)
    {
        $keyword = $request->get('keyword');
        $vivo = Model_Vivo::all();

        if ($keyword) {
            $vivo = Model_Vivo::where("type","like","%$keyword%")->get();
        }

        return view ('vivo.cari_vivo', compact('vivo'));
    }

    public function fvivo() //method index
    {
        $fvivo = Model_Vivo::paginate(6);
        return view('frontend.fvivo',['fvivo' => $fvivo]);
    }
    
    public function carifvivo(request $request)
    {
        $keyword = $request->get('keyword');
        $fvivo = Model_Vivo::all();

        if ($keyword) {
            $fvivo = Model_Vivo::where("type","like","%$keyword%")->get();
        }

        return view ('frontend.cari_fvivo', compact('fvivo'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vivo.tambah_vivo');
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
            'type' => 'required',
            'harga' => 'required',
            'spesifikasi' => 'required',
            'image'=> 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientoriginalExtension();
            $image->move($destinationPath, $profileImage );
            $input['image'] = "$profileImage";
        }

        Model_Vivo::create($input);

        return redirect('/smartphone');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Model_Vivo $vivo)
    {
        return view ('vivo.lihat_vivo', compact('vivo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Model_Vivo $vivo)
    {
        return view('vivo.edit_vivo', compact('vivo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Model_Vivo $vivo)
    {
        Model_Vivo::where('id', $vivo->id)
        ->update([
            'type' => $request->type,
            'spesifikasi' =>$request->spesifikasi,
            'harga' =>$request->harga,
            'image' =>$request->image
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientoriginalExtension();
            $image->move($destinationPath, $profileImage );
            $input['image'] = "$profileImage";
        }else{
            unset($input['image']);
        }

        $vivo->update($input);

        return redirect('/smartphone');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Model_Vivo $vivo)
    {
        Model_Vivo::destroy($vivo->id);
        return redirect('/smartphone');
    }
}
