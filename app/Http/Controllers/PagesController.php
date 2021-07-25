<?php


namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Tampilan;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //LANDING PAGE-------------------------------------------------------------------
    public function home()
    {
        $tampilan = Tampilan::first();
        $infos = DB::table('infos')->get()->sortBy('created_at');
        return view('/main/index', compact('tampilan','infos'));
    }
    public function proker()
    {
        $tampilan = Tampilan::first();
        return view('/main/proker', compact('tampilan'));
    }
    public function informasi()
    {
        $info1 = DB::table('infos')->first();
        $infos = DB::table('infos')->where('id','!=',$info1->id)->get()->sortBy('created_at');
        $tampilan = Tampilan::first();
        return view('/main/info', compact('tampilan','info1','infos'));
    }
    public function showinformasi(Info $info)
    {
        $info = DB::table('infos')->where('id', $info->id)->first();
        $tampilan = Tampilan::first();
        return view('/main/showinfo', compact('tampilan','info'));
    }


    //ADMIN-------------------------------------------------------------------------- 
    public function admin()
    {
        $info = DB::table('infos')->get()->count();
        $aspirasi = DB::table('aspirasis')->get()->count();
        $user = DB::table('users')->get()->count();
        return view('admin/dashboard', compact('info','aspirasi','user'));
    }
    public function tampilan()
    {
        return view('admin/kelola/tampilan/index');
    }

    //USER
    public function user()
    {
        return view('admin/kelola/user/index');
    }
    public function createuser()
    {
        return view('admin/kelola/user/create');
    }
    public function deleteuser()
    {
    }
    public function edituser()
    {
        return view('admin/kelola/user/edit');
    }

    //INFORMASI
    public function info()
    {
        return view('admin/kelola/info/index');
    }
    public function createinfo()
    {
        return view('admin/kelola/info/create');
    }
    public function deleteinfo()
    {
    }
    public function editinfo()
    {
        return view('admin/kelola/info/edit');
    }

    //ASPIRASI
    public function aspirasi()
    {
        return view('admin/bem/aspirasi/index');
    }

    //PROGRAM
    public function program()
    {
        return view('admin/bem/program/index');
    }
    public function createprogram()
    {
        return view('admin/bem/program/create');
    }
    public function deleteprogram()
    {
    }
    public function editprogram()
    {
        return view('admin/bem/program/edit');
    }

    //struktur
    public function struktur()
    {
        return view('admin/bem/struktur/index');
    }
    public function createstruktur()
    {
        return view('admin/bem/struktur/create');
    }
    public function deletestruktur()
    {
    }
    public function editstruktur()
    {
        return view('admin/bem/struktur/edit');
    }

    //survei
    public function survei()
    {
        return view('admin/statistik/survei/index');
    }
    public function createsurvei()
    {
        return view('admin/statistik/survei/create');
    }
    public function deletesurvei()
    {
    }
    public function editsurvei()
    {
        return view('admin/statistik/survei/edit');
    }
}
