<?php

namespace App\Http\Controllers;

use App\Models\Survei;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class SurveiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $surveis = DB::table('surveis')->get()->sortByDesc('created_at');
        return view('admin/statistik/survei/index', ['surveis' => $surveis]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/statistik/survei/create');
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
        ]);

        // ensure the request has a file before we attempt anything else.
        if ($request->hasFile('gambar')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg', // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file('gambar')->getClientOriginalName();
            $request->file('gambar')->move(public_path() . '/uploads/survei/', $name);
            
            // Store the record, using the new file hashname which will be it's new filename identity.
            // $form_data = array(
                //     'proker' =>  $request->proker,
                //     'keterangan' =>  $request->keterangan,
                //     'bidang' =>  $request->bidang,
                //     'gambar' =>  $name,
                // );
                // Proker::create($form_data);
                
        }
        $form_data = array(
            'judul'       =>   $request->judul,
            'isi'        =>   $request->isi,
            'link'        =>   $request->link,
            'status'        =>   '0',
            'gambar'        =>   $request->file('gambar')->getClientOriginalName(),
        );
        Survei::create($form_data); 
        Alert::success('Berhasil', 'Survei Berhasil Ditambahkan');
        return redirect()->action([SurveiController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survei  $info
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Survei  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $surveis = DB::table('surveis')->where('id',  $request->route('survei'))->first();
        // dd($prokers);
        return view('admin/statistik/survei/edit', compact('surveis'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survei  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Survei $survei)
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
            $request->file('gambar')->move(public_path() . '/uploads/survei/', $name);
            Survei::where('id',  $survei->id)
                ->update([
                    'judul' =>  $request->judul,
                    'isi' =>  $request->isi,
                    'link' =>  $request->link,
                    'gambar' =>  $name,
                ]);
        } else {
            // Store the record, using the new file hashname which will be it's new filename identity.
            Survei::where('id',  $survei->id)
                ->update([
                    'judul' =>  $request->judul,
                    'isi' =>  $request->isi,
                    'link' =>  $request->link,
                ]);
        }
        $survei->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Survei Berhasil Diedit');
        // dd($request);
        return redirect()->action([SurveiController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Survei  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $survei = Survei::where('id',  $request->route('survei'));
        $survei->delete();
        Alert::success('Berhasil', 'Survei Telah Dihapus');
        return redirect()->action([SurveiController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Survei  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $survei = Survei::where('id',  $request->route('survei'))->first();

        $survei->status = '1';

        $survei->save();
        Alert::success('Berhasil', 'Survei Berhasil Ditampilkan');
        // dd($request);
        return redirect()->action([SurveiController::class, 'index']);
    }
    public function hide(Request $request)
    {
        $survei = Survei::where('id',  $request->route('survei'))->first();

        $survei->status = '0';

        $survei->save();
        Alert::success('Berhasil', 'Survei Berhasil Diarsip');
        // dd($request);
        return redirect()->action([SurveiController::class, 'index']);
    }
}
