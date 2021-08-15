<?php

namespace App\Http\Controllers;

use App\Models\Kabinet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class KabinetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabinets = DB::table('kabinets')->where('status',  '1')->first();
        return view('admin/bem/kabinet/index', compact('kabinets'));
    }
    public function edit(Request $request)
    {
        $kabinet = DB::table('kabinets')->where('id',  $request->route('kabinet'))->first();
        return view('admin/bem/kabinet/edit', compact('kabinet'));
    }
    public function create()
    {
        return view('admin/bem/kabinet/create');
    }

    public function store(Request $request)
    {
            $request->validate([
                'nama' => 'required',
                'tahun' => 'required|unique:kabinets,tahun',
                'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file->getClientOriginalName();
            $request->file->move(public_path() . '/uploads/kabinet/', $name);
            $kabinet = new Kabinet([
                    'nama' =>  $request->nama,
                    'tahun' =>  $request->tahun,
                    'gambar' =>  $name,
                    'visibility' => '0',
                    'status' => '0',
            ]);
            $kabinet->save();// Finally, save the record.
        Alert::success('Berhasil', 'Kabinet Berhasil Ditambahkan');
        return redirect()->action([KabinetController::class, 'index']);
    }
    public function update(Request $request, Kabinet $kabinet)
    {
        $request->validate([
            'nama' => 'required',
            'tahun' => 'required|unique:kabinets,tahun,'.$kabinet->id,
        ]);
        if ($request->hasFile('file')) {

            $request->validate([
                'gambar' => 'mimes:jpeg,bmp,png,jpg' // Only allow .jpg, .bmp and .png file types.
            ]);

            // Save the file locally in the storage/public/ folder under a new folder named /product
            $name = $request->file->getClientOriginalName();
            $request->file->move(public_path() . '/uploads/kabinet/', $name);
            DB::table('kabinets')
                ->where('id',  $kabinet->id)
                ->update([
                    'nama' =>  $request->nama,
                    'tahun' =>  $request->tahun,
                    'gambar' =>  $name,
                ]);
        } else {
            // Store the record, using the new file hashname which will be it's new filename identity.
            DB::table('kabinets')
                ->where('id',  $kabinet->id)
                ->update([
                    'nama' =>  $request->nama,
                    'tahun' =>  $request->tahun,
                ]);
        }
        $kabinet->save(); // Finally, save the record.
        Alert::success('Berhasil', 'Kabinet Berhasil Diedit');
        return redirect()->action([KabinetController::class, 'index']);
    }
    public function delete(Request $request)
    {
        $kabinet = Kabinet::where('id',  $request->route('kabinet'));
        $kabinet->delete();
        Alert::success('Berhasil', 'Kabinet Telah Dihapus');
        return redirect()->action([KabinetController::class, 'index']);
    }
    public function active(Request $request)
    {
        $kabinet1 = Kabinet::where('status', '1')->first();
        $kabinet = Kabinet::where('id',  $request->route('kabinet'))->first();
        $kabinet1->status = '0';
        $kabinet1->save();
        $kabinet->status = '1';
        $kabinet->save();

        Alert::success('Berhasil', 'Kabinet Berhasil Diaktifkan');
        // dd($request);
        return redirect()->action([KabinetController::class, 'index']);
    }
    public function show(Request $request)
    {
        $kabinet = Kabinet::where('id',  $request->route('kabinet'))->first();
        $kabinet->visibility = '1';
        $kabinet->save();

        Alert::success('Berhasil', 'Kabinet Berhasil Ditampilkan');
        // dd($request);
        return redirect()->action([KabinetController::class, 'index']);
    }
    public function hide(Request $request)
    {
        $kabinet = Kabinet::where('id',  $request->route('kabinet'))->first();

        $kabinet->visibility = '0';

        $kabinet->save();
        Alert::success('Berhasil', 'Kabinet Berhasil Diarsip');
        // dd($request);
        return redirect()->action([KabinetController::class, 'index']);
    }
}
