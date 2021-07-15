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
            'gambar.*' => 'required|mimes:jpeg,jpg,png,PNG'
        ]);
        if ($request->hasfile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/gambar/', $name);
                $imgData[] = $name;
            }
            $request->gambar = json_encode($imgData);
        }
        $form_data = array(
            'judul'       =>   $request->judul,
            'isi'        =>   $request->isi,
            'gambar'            =>   $request->gambar,
            'created_by' => Auth::user()->name,
        );
        Info::create($form_data); 
        Alert::success('Berhasil', 'Informasi Berhasil Ditambahkan');
        return redirect()->route('index')->with('success', 'Tambah Informasi Berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Info  $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        $info = DB::table('infos')->where('id', $info->id)->first();
        return view('/admin/kelola/info/show', ['info' => $info]);
    }

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
            'gambar.*' => 'mimes:jpeg,jpg,png,PNG'
            ]);
            
        if ($request->hasfile('gambar')) {
            foreach ($request->file('gambar') as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path() . '/uploads/gambar/', $name);
                $imgData[] = $name;
            }
            $info->gambar = json_encode($imgData);
            $info->save();
        }
        Info::where('id',  $info->id)
        ->update([
            'judul' => $request->judul,
            'isi' => $request->isi,
            'created_by' => Auth::user()->name,
            ]);    
        Alert::success('Berhasil', 'Informasi Berhasil Diedit');            
        return redirect()->route('index');
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

        return redirect()->route('index');
    }
}
