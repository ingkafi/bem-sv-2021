<?php

namespace App\Http\Controllers;

use App\Models\Struktur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $strukturs = DB::table('strukturs')->get()->sortByDesc('created_at');
        return view('admin/bem/struktur/index', ['strukturs' => $strukturs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/bem/struktur/create');
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
            'bidang' => 'required',
            'gambar' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('gambar')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/uploads/struktur/', $name);

            // Store the record, using the new file hashname which will be it's new filename identity.
            // $form_data = array(
            //     'proker' =>  $request->proker,
            //     'keterangan' =>  $request->keterangan,
            //     'bidang' =>  $request->bidang,
            //     'gambar' =>  $name,
            // );
            // Proker::create($form_data);

        }
        $strukturs = new Struktur;
        $strukturs->bidang =  $request->input('bidang');
        $strukturs->gambar =  $name;

        // $proker = new Proker([
        //     'proker' =>  $request->proker,
        //     'keterangan' =>  $request->keterangan,
        //     'bidang' =>  $request->bidang,
        //     'gambar' =>  $name,
        // ]);
        $strukturs->save(); // Finally, save the record.W
        // return $request;
        Alert::success('Berhasil', 'Program Kerja Berhasil Ditambahkan');
        return redirect()->action([StrukturController::class, 'index']);
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
        $strukturs = DB::table('strukturs')->where('id',  $request->route('struktur'))->first();
        // dd($strukturs);
        return view('admin/bem/struktur/edit', compact('strukturs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $struktur)
    {
        $request->validate([
            'bidang' => 'required',
        ]);
        if ($request->hasFile('gambar')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/uploads/struktur/', $name);
            DB::table('strukturs')
                ->where('id',  $struktur)
                ->update([
                    'bidang' =>  $request->bidang,
                    'gambar' =>  $name,
                ]);
        } else {
            // Store the record, using the new file hashname which will be it's new filename identity.
            DB::table('strukturs')
                ->where('id',  $struktur)
                ->update([
                    'bidang' =>  $request->bidang,
                ]);
        }
        // $strukturs->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Program Kerja Berhasil Diedit');
        return redirect()->action([StrukturController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $strukturs = Struktur::where('id',  $request->route('struktur'));
        $strukturs->delete();
        Alert::success('Berhasil', 'Program Kerja Telah Dihapus');
        return redirect()->action([StrukturController::class, 'index']);
    }
}
