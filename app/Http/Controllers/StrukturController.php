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
    public function detail(Request $request)
    {
        $strukturs = DB::table('strukturs')->where('tahun', $request->route('tahun'))->get()->sortByDesc('created_at');
        $kabinet = DB::table('kabinets')->where('tahun', $request->route('tahun'))->get()->first();
        return view('admin/bem/struktur/detail', compact('strukturs', 'kabinet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $kabinet = DB::table('kabinets')->where('tahun', $request->route('tahun'))->get()->first();
        return view('admin/bem/struktur/create',  compact('kabinet'));
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
        $strukturs->tahun =  $request->route('tahun');

        // $proker = new Proker([
        //     'proker' =>  $request->proker,
        //     'keterangan' =>  $request->keterangan,
        //     'bidang' =>  $request->bidang,
        //     'gambar' =>  $name,
        // ]);
        $strukturs->save(); // Finally, save the record.W
        // return $request;
        Alert::success('Berhasil', 'Struktur Berhasil Ditambahkan');
        return redirect()->action([StrukturController::class, 'detail'], ['tahun' => $strukturs->tahun]);
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
        $kabinet = DB::table('kabinets')->where('tahun', $strukturs->tahun)->get()->first();
        return view('admin/bem/struktur/edit', compact('strukturs','kabinet'));
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
        $strukturs = DB::table('strukturs')->where('id',  $struktur)->first();
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
        Alert::success('Berhasil', 'Struktur Berhasil Diedit');
        return redirect()->action([StrukturController::class, 'detail'], ['tahun' => $strukturs->tahun]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Struktur  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $strukturs = Struktur::where('id',  $request->route('struktur'))->first();
        $strukturs->delete();
        Alert::success('Berhasil', 'Struktur Telah Dihapus');
        return redirect()->action([StrukturController::class, 'detail'], ['tahun' => $strukturs->tahun]);
    }
}
