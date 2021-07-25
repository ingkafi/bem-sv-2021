<?php

namespace App\Http\Controllers;

use App\Models\Proker;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class ProkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $prokers = DB::table('prokers')->get()->sortByDesc('created_at');
        return view('admin/bem/program/index', ['prokers' => $prokers]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/bem/program/create');
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
            'proker' => 'required',
            'keterangan' => 'required',
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
            $request->file('gambar')->move(public_path() . '/uploads/proker/', $name);

            // Store the record, using the new file hashname which will be it's new filename identity.
            // $form_data = array(
            //     'proker' =>  $request->proker,
            //     'keterangan' =>  $request->keterangan,
            //     'bidang' =>  $request->bidang,
            //     'gambar' =>  $name,
            // );
            // Proker::create($form_data);

        }
        $proker = new Proker;
        $proker->proker =  $request->input('proker');
        $proker->keterangan =  $request->input('keterangan');
        $proker->bidang =  $request->input('bidang');
        $proker->gambar =  $name;

        // $proker = new Proker([
        //     'proker' =>  $request->proker,
        //     'keterangan' =>  $request->keterangan,
        //     'bidang' =>  $request->bidang,
        //     'gambar' =>  $name,
        // ]);
        $proker->save(); // Finally, save the record.W
        // return $request;
        Alert::success('Berhasil', 'Program Kerja Berhasil Ditambahkan');
        return redirect()->action([ProkerController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proker  $info
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proker  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $prokers = DB::table('prokers')->where('id',  $request->route('proker'))->first();
        // dd($prokers);
        return view('admin/bem/program/edit', compact('prokers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proker  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proker $proker)
    {
        $request->validate([
            'proker' => 'required',
            'keterangan' => 'required',
            'bidang' => 'required',
        ]);

        if ($request->hasFile('gambar')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/uploads/proker/', $name);
            Proker::where('id',  $proker->id)
                ->update([
                    'proker' =>  $request->proker,
                    'keterangan' =>  $request->keterangan,
                    'bidang' =>  $request->bidang,
                    'gambar' =>  $name,
                ]);
        } else {
            // Store the record, using the new file hashname which will be it's new filename identity.
            Proker::where('id',  $proker->id)
                ->update([
                    'proker' =>  $request->proker,
                    'keterangan' =>  $request->keterangan,
                    'bidang' =>  $request->bidang,
                ]);
        }
        $proker->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Program Kerja Berhasil Diedit');
        // dd($request);
        return redirect()->action([ProkerController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proker  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $proker = Proker::where('id',  $request->route('proker'));
        $proker->delete();
        Alert::success('Berhasil', 'Program Kerja Telah Dihapus');
        return redirect()->action([ProkerController::class, 'index']);
    }
}
