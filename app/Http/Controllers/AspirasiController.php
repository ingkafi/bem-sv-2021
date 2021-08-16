<?php

namespace App\Http\Controllers;

use App\Models\Aspirasi;
use App\Models\emailaspirasi;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

class AspirasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aspirasi = DB::table('aspirasis')->get()->sortByDesc('created_at');
        $emailaspirasi = DB::table('emailaspirasis')->first();
        return view('admin/bem/aspirasi/index', ['aspirasi' => $aspirasi, 'emailaspirasi' => $emailaspirasi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'isi' => 'required',
        ]);
        $form_data = array(
            'nama'       =>   $request->nama,
            'email'       =>   $request->email,
            'isi'        =>   $request->isi,
        );
        Aspirasi::create($form_data);
        Alert::success('Berhasil', 'Terima kasih atas kritk dan sarannya!');
        return redirect()->action([PagesController::class, 'home']);
    }

    public function storestat(Request $request)
    {
        $request->validate([
            'isi' => 'required',
        ]);
        $form_data = array(
            'nama'       =>   $request->nama,
            'email'       =>   $request->email,
            'isi'        =>   $request->isi,
        );
        Aspirasi::create($form_data);
        Alert::success('Berhasil', 'Terima kasih atas kritk dan sarannya!');
        return redirect()->action([PagesController::class, 'homestat']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Emailaspirasi  $info
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $Emailaspirasi = Emailaspirasi::where('id',  1)->first();

        $Emailaspirasi->status = '1';

        $Emailaspirasi->save();
        Alert::success('Berhasil', 'Email pada Aspirasi Berhasil Ditampilkan');
        // dd($request);
        return redirect()->action([AspirasiController::class, 'index']);
    }
    public function hide(Request $request)
    {
        $Emailaspirasi = Emailaspirasi::where('id',  1)->first();

        $Emailaspirasi->status = '0';

        $Emailaspirasi->save();
        Alert::success('Berhasil', 'Email pada Aspirasi Berhasil Disembunyikan');
        // dd($request);
        return redirect()->action([AspirasiController::class, 'index']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function edit(Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aspirasi $aspirasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Aspirasi  $aspirasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aspirasi $aspirasi)
    {
        //
    }
}
