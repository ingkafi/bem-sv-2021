<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $infos = DB::table('infos')->get()->sortByDesc('created_at');
        return view('admin/kelola/info/index', ['infos' => $infos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kelola/info/create');
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
            'cp_nama' => 'required',
            'cp_line' => 'required',
            'cp_wa' => 'required',
        ]);

        // ensure the request has a file before we attempt anything else.
        $request->validate([
            'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
        ]);

        // Save the file locally in the storage/public/ folder under a new folder named /product
        $name = $request->file->getClientOriginalName();
        $request->file->move(public_path() . '/uploads/informasi/', $name);

        // Store the record, using the new file hashname which will be it's new filename identity.
        $info = new Info([
            'judul' =>  $request->judul,
            'isi' =>  $request->isi,
            'created_by' =>  Auth::user()->name,
            'file_path' => $name,
            'cp_nama' =>  $request->cp_nama,
            'cp_line' =>  $request->cp_line,
            'cp_wa' =>  $request->cp_wa,
            'status' => $request->status
        ]);
        $info->save(); // Finally, save the record.
        // dd($request);
        Alert::success('Berhasil', 'Informasi Berhasil Ditambahkan');
        return redirect()->action([InfoController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $info = DB::table('infos')->where('id',  $request->route('info'))->first();
        return view('admin/kelola/info/edit', ['info' => $info]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Info $info)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'cp_nama' => 'required',
            'cp_line' => 'required',
            'cp_wa' => 'required',
        ]);

        if ($request->hasFile('file')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file->getClientOriginalName();
            $request->file->move(public_path() . '/uploads/informasi/', $name);

            // Store the record, using the new file hashname which will be it's new filename identity.
            Info::where('id',  $info->id)
                ->update([
                    'judul' =>  $request->judul,
                    'cp_nama' =>  $request->cp_nama,
                    'cp_line' =>  $request->cp_line,
                    'cp_wa' =>  $request->cp_wa,
                    'isi' =>  $request->isi,
                    'created_by' =>  Auth::user()->name,
                    'file_path' => $name
                ]);
            $info->save(); // Finally, save the record.
        }
        Alert::success('Berhasil', 'Informasi Berhasil Diedit');
        return redirect()->action([InfoController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $info = Info::where('id',  $request->route('info'));
        $info->delete();
        Alert::success('Berhasil', 'Informasi Telah Dihapus');
        return redirect()->action([InfoController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $Info = Info::where('id',  $request->route('info'))->first();

        $Info->status = '1';

        $Info->save();
        Alert::success('Berhasil', 'Info Berhasil Ditampilkan');
        // dd($request);
        return redirect()->action([InfoController::class, 'index']);
    }
    public function hide(Request $request)
    {
        $Info = Info::where('id',  $request->route('info'))->first();

        $Info->status = '0';

        $Info->save();
        Alert::success('Berhasil', 'Info Berhasil Diarsip');
        // dd($request);
        return redirect()->action([InfoController::class, 'index']);
    }
}
