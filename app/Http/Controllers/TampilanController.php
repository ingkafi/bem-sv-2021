<?php

namespace App\Http\Controllers;

use App\Models\Tampilan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class TampilanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $tampilans = DB::table('tampilans')->get();
        return view('admin/kelola/tampilan/index', ['tampilans' => $tampilans]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tampilan  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tampilan $tampilan)
    {
        if ($request->hasfile('background')) {
            $name = $request->file('background')->getClientOriginalName();
            $request->file('background')->move(public_path() . '/uploads/tampilan/', $name);
            Tampilan::where('id', $request->id)
                ->update([
                    'background' => $name,
                ]);
        }
        if ($request->hasfile('gambar_ketua')) {
            $name = $request->file('gambar_ketua')->getClientOriginalName();
            $request->file('gambar_ketua')->move(public_path() . '/uploads/tampilan/', $name);
            Tampilan::where('id', $request->id)
                ->update([
                    'gambar_ketua' => $name,
                ]);
        }

        if ($request->hasfile('gambar_wakil')) {
            $name = $request->file('gambar_wakil')->getClientOriginalName();
            $request->file('gambar_wakil')->move(public_path() . '/uploads/tampilan/', $name);
            Tampilan::where('id', $request->id)
                ->update([
                    'gambar_wakil' => $name,
                ]);
        }

        Tampilan::where('id', $request->id)
            ->update([
                'header'       =>   $request->header,
                'slogan'        =>   $request->slogan,
                'judul_sambutan'        =>   $request->judul_sambutan,
                'hashtag'        =>   $request->hashtag,
                'kata_sambutan'        =>   $request->kata_sambutan,
                'nama_ketua'        =>   $request->nama_ketua,
                'keterangan_ketua'        =>   $request->keterangan_ketua,
                'nama_wakil'        =>   $request->nama_wakil,
                'keterangan_wakil'        =>   $request->keterangan_wakil,
                'judul_video'        =>   $request->judul_video,
                'judul2_video'        =>   $request->judul2_video,
                'link_video'        =>   $request->link_video,
                'link_maps'        =>   $request->link_maps,
                'keterangan_contact'        =>   $request->keterangan_contact,
                'contact'        =>   $request->contact,
            ]);
        Alert::success('Berhasil', 'Data Pada Tampilan Berhasil Diedit');
        return redirect()->route('indextampilan');
    }
}
