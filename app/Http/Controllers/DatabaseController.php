<?php

namespace App\Http\Controllers;

use App\Models\Database;
use App\Models\DatabaseAngka;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;


class DatabaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $database_angkas = DB::table('database_angkas')->first();
        $databases = DB::table('databases')->get()->sortByDesc('created_at');
        // dd($database_angkas);
        return view('admin/statistik/database/index', ['databases' => $databases, 'database_angkas' => $database_angkas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/statistik/database/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'link' => 'required',
        ]);

        $databases = new Database([
            'judul'       =>   $request->judul,
            'link'        =>   $request->link,
        ]);
        $databases->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Database Berhasil Ditambahkan');
        return redirect()->action([DatabaseController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Database
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Database
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $databases = DB::table('databases')->where('id',  $request->route('database'))->first();
        // dd($prokers);
        return view('admin/statistik/database/edit', compact('databases'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Database
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Database $database)
    {
        $request->validate([
            'judul' => 'required',
            'link' => 'required',
        ]);
        // Store the record, using the new file hashname which will be it's new filename identity.
        Database::where('id',  $database->id)
            ->update([
                'judul' =>  $request->judul,
                'link' =>  $request->link,
            ]);
        $database->save(); // Finally, save the record.
        Alert::success('Berhasil', 'database Berhasil Diedit');
        // dd($request);
        return redirect()->action([DatabaseController::class, 'index']);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DatabaseAngka
     * @return \Illuminate\Http\Response
     */
    public function update_dba(Request $request, DatabaseAngka $dba)
    {
        $request->validate([
            'prodi' => 'required',
            'mahasiswa' => 'required',
            'dosen' => 'required',
            'ukm' => 'required',
            'himpunan' => 'required',
        ]);
        // Store the record, using the new file hashname which will be it's new filename identity.
        DatabaseAngka::where('id',  '1')
            ->update([
                'prodi' =>  $request->prodi,
                'mahasiswa' =>  $request->mahasiswa,
                'dosen' =>  $request->dosen,
                'ukm' =>  $request->ukm,
                'himpunan' =>  $request->himpunan,
            ]);
        // dd($request);
        // $dba->save(); // Finally, save the record.
        Alert::success('Berhasil', 'database Berhasil Diedit');
        // dd($request);
        return redirect()->action([DatabaseController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Database
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $database)
    {
        $databases = Database::where('id',  $database);
        $databases->delete();
        // dd($database);
        Alert::success('Berhasil', 'Database Telah Dihapus');
        return redirect()->action([DatabaseController::class, 'index']);
    }
}
