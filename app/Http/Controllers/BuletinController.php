<?php

namespace App\Http\Controllers;

use App\Models\Buletin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class BuletinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $buletins = DB::table('buletins')->get()->sortByDesc('created_at');
        return view('admin/statistik/buletin/index', ['buletins' => $buletins]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/statistik/buletin/create');
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
            'judul' => 'required',
            'isi' => 'required',
            'link' => 'required',
            'gambar' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('gambar')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/uploads/buletin/', $name);

            // Store the record, using the new file hashname which will be it's new filename identity.
            // $form_data = array(
            //     'proker' =>  $request->proker,
            //     'keterangan' =>  $request->keterangan,
            //     'bidang' =>  $request->bidang,
            //     'gambar' =>  $name,
            // );
            // Proker::create($form_data);

        }
        $buletin = new Buletin;
        $buletin->judul =  $request->input('judul');
        $buletin->isi =  $request->input('isi');
        $buletin->link =  $request->input('link');
        $buletin->status =  '0';
        $buletin->gambar =  $name;

        // $proker = new Proker([
        //     'proker' =>  $request->proker,
        //     'keterangan' =>  $request->keterangan,
        //     'bidang' =>  $request->bidang,
        //     'gambar' =>  $name,
        // ]);
        $buletin->save(); // Finally, save the record.W
        // return $request;
        Alert::success('Berhasil', 'Buletin Berhasil Ditambahkan');
        return redirect()->action([BuletinController::class, 'index']);
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
     * @param  \App\Models\Buletin  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $buletins = DB::table('buletins')->where('id',  $request->route('buletin'))->first();
        // dd($prokers);
        return view('admin/statistik/buletin/edit', compact('buletins'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buletin  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buletin $buletin)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'link' => 'required',
        ]);

        if ($request->hasFile('gambar')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/uploads/buletin/', $name);
            Buletin::where('id',  $buletin->id)
                ->update([
                    'judul' =>  $request->judul,
                    'isi' =>  $request->isi,
                    'link' =>  $request->link,
                    'gambar' =>  $name,
                ]);
        } else {
            // Store the record, using the new file hashname which will be it's new filename identity.
            Buletin::where('id',  $buletin->id)
                ->update([
                    'judul' =>  $request->judul,
                    'isi' =>  $request->isi,
                    'link' =>  $request->link,
                ]);
        }
        $buletin->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Buletin Berhasil Diedit');
        // dd($request);
        return redirect()->action([BuletinController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buletin  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $buletin = Buletin::where('id',  $request->route('buletin'));
        $buletin->delete();
        Alert::success('Berhasil', 'Buletin Telah Dihapus');
        return redirect()->action([BuletinController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buletin  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Buletin = Buletin::where('id',  $request->route('buletin'))->first();

        $Buletin->status = '1';

        $Buletin->save();
        Alert::success('Berhasil', 'Buletin Berhasil Ditampilkan');
        // dd($request);
        return redirect()->action([BuletinController::class, 'index']);
    }
    public function hide(Request $request)
    {
        $Buletin = Buletin::where('id',  $request->route('buletin'))->first();

        $Buletin->status = '0';

        $Buletin->save();
        Alert::success('Berhasil', 'Buletin Berhasil Diarsip');
        // dd($request);
        return redirect()->action([BuletinController::class, 'index']);
    }
}
