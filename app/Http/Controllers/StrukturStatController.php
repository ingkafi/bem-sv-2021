<?php

namespace App\Http\Controllers;

use App\Models\StrukturStat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
class StrukturStatController extends Controller
{
    public function index()
    {
        $strukturs = DB::table('struktur_stats')->get();
        return view('admin/statistik/struktur/index', ['strukturs' => $strukturs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/statistik/struktur/create');
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
            'nama' => 'required',
            'kode_jabatan' => 'required',
        ]);
        if ($request->kode_jabatan == '1'){
            $jabatan = "Kepala Biro Statistik";
        }
        elseif ($request->kode_jabatan == '2'){
            $jabatan = "Wakil Kepala Biro Statistik";
        }
        elseif ($request->kode_jabatan == '3'){
            $jabatan = "Sekben Biro Statistik";
        }
        elseif ($request->kode_jabatan == '4'){
            $jabatan = "Divisi Survei dan Penelitian";
        }
        else{
            $jabatan = "Divisi Analisis Data dan Database";
        }
        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('file')) {

            $request->validate([
                'foto' => 'mimes:jpeg,bmp,png,jpg,JPG | max:10000', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file->getClientOriginalName();
            $request->file('file')->move(public_path() . '/uploads/statisticdiary/', $name);
            
            // Store the record, using the new file hashname which will be it's new filename identity.
        }
        $name = $request->file('file')->getClientOriginalName();
        $strukturstat = new StrukturStat([
            'jabatan' =>  $jabatan,
            'kode_jabatan' =>  $request->kode_jabatan,
            'nama' =>  $request->nama,
            'foto' => $name
        ]);
        $strukturstat->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Struktur Berhasil Ditambahkan');
        return redirect()->action([StrukturStatController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $strukturs = DB::table('struktur_stats')->where('id',  $request->route('struktur'))->first();
        // dd($strukturs);
        return view('admin/statistik/struktur/edit', compact('strukturs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $strukturs = DB::table('struktur_stats')->where('id',  $request->route('struktur'));
        $request->validate([
            'nama' => 'required',
            'kode_jabatan' => 'required',
        ]);
        if ($request->kode_jabatan == '1'){
            $jabatan = "Kepala Biro Statistik";
        }
        elseif ($request->kode_jabatan == '2'){
            $jabatan = "Wakil Kepala Biro Statistik";
        }
        elseif ($request->kode_jabatan == '3'){
            $jabatan = "Sekben Biro Statistik";
        }
        elseif ($request->kode_jabatan == '4'){
            $jabatan = "Divisi Survei dan Penelitian";
        }
        elseif ($request->kode_jabatan == '5'){
            $jabatan = "Divisi Analisis Data dan Database";
        }
        if ($request->hasFile('file')) {

            $request->validate([
                'file' => 'mimes:jpeg,bmp,png,jpg | max:1000' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file->getClientOriginalName();
            $request->file('file')->move(public_path() . '/uploads/statisticdiary/', $name);
            $strukturs
                ->update([
                    'nama' =>  $request->nama,
                    'kode_jabatan' =>  $request->kode_jabatan,
                    'jabatan' =>  $jabatan,
                    'foto' =>  $request->file->getClientOriginalName(),
                ]);
        } else {
            // Store the record, using the new file hashname which will be it's new filename identity.
            $strukturs
                ->update([
                    'nama' =>  $request->nama,
                    'kode_jabatan' =>  $request->kode_jabatan,
                    'jabatan' =>  $jabatan,
                ]);
        }
        // $strukturs->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Struktur Berhasil Diedit');
        return redirect()->action([StrukturStatController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $strukturs = StrukturStat::where('id',  $request->route('struktur'));
        $strukturs->delete();
        Alert::success('Berhasil', 'Struktur Telah Dihapus');
        return redirect()->action([StrukturStatController::class, 'index']);
    }
}
