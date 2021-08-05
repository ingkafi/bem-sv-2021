<?php


namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Tampilan;
use App\Models\Survei;
use App\Models\Proker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    //LANDING PAGE-------------------------------------------------------------------
    public function home()
    {
        $infoall = DB::table('infos')->get();
        $info1 = $infoall->sortByDesc('created_at')->first();
        $tampilan = Tampilan::first();
        $infos = DB::table('infos')->where('id', '!=', $info1->id)->get()->sortBy('created_at');
        return view('/main/index', compact('tampilan', 'infos','info1'));
    }
    public function homestat()
    {
        $struktur1 = DB::table('struktur_stats')->where('kode_jabatan', '1')->get()->first();
        $struktur2 = DB::table('struktur_stats')->where('kode_jabatan', '2')->get()->first();
        $struktur3 = DB::table('struktur_stats')->where('kode_jabatan', '3')->get()->first();
        $struktur4 = DB::table('struktur_stats')->where('kode_jabatan', '4')->get()->sortBy('created_at');
        $struktur5 = DB::table('struktur_stats')->where('kode_jabatan', '5')->get()->sortBy('created_at');
        $tampilan = Tampilan::first();
        $infos = DB::table('infos')->get()->sortBy('created_at');
        return view('/statdiary/index', compact('tampilan', 'infos', 'struktur1', 'struktur2', 'struktur3', 'struktur4', 'struktur5'));
    }
    public function databasestat()
    {
        $tampilan = Tampilan::first();
        $dba = DB::table('database_angkas')->first();
        $databases = DB::table('databases')->get()->sortByDesc('created_at');
        return view('/statdiary/database', compact('tampilan', 'dba', 'databases'));
    }

    public function  detaildatabase($db)
    {
        $databases = DB::table('databases')->where('id',  $db)->first();
        $tampilan = Tampilan::first();
        return view('/statdiary/detaildatabase', compact('tampilan', 'databases'));
    }

    public function datastat()
    {
        $buletinall = DB::table('buletins')->where('status', '1')->get();
        $buletin1 = $buletinall->sortByDesc('created_at')->first();
        $buletinpag = DB::table('buletins')->where('status', '1')->orderBy('created_at', 'desc')->simplePaginate(3);
        $tampilan = Tampilan::first();
        return view('/statdiary/bicara-data', compact('tampilan', 'buletinall', 'buletin1', 'buletinpag'));
    }
    public function  detailbicaradata($bicara)
    {
        $buletinall = DB::table('buletins')->where('status', '1')->get();
        $buletin1 = $buletinall->first();
        $buletins = $buletinall->where('id', '!=', $buletin1->id);
        $buletin = DB::table('buletins')->where('id',  $bicara)->first();
        $tampilan = Tampilan::first();
        return view('/statdiary/detailbicaradata', compact('tampilan', 'buletinall', 'buletin1', 'buletins', 'buletin'));
    }
    public function surveystat()
    {
        $surveiall = DB::table('surveis')->where('status', '1')->get();
        $survei1 = $surveiall->sortByDesc('created_at')->first();
        $surveipag = DB::table('surveis')->where('status', '1')->orderBy('created_at', 'desc')->simplePaginate(3);
        $tampilan = Tampilan::first();
        return view('/statdiary/survey', compact('tampilan', 'surveipag', 'surveiall', 'survei1'));
    }

    public function detailsurveystat($survey)
    {
        $surveiall = DB::table('surveis')->where('status', '1')->get();
        $survei1 = $surveiall->first();
        $surveis = $surveiall->where('id', '!=', $survei1->id);
        $survey = DB::table('surveis')->where('id',  $survey)->first();
        $tampilan = Tampilan::first();
        return view('/statdiary/detailsurvey', compact('tampilan', 'surveiall', 'survei1', 'surveis', 'survey'));
    }
    public function proker()
    {
        $prokers =  Proker::get();
        $tampilan = Tampilan::first();
        return view('/main/proker', compact('tampilan', 'prokers'));
    }
    public function profil()
    {
        $tampilan = Tampilan::first();
        $struktur = DB::table('strukturs')->get();
        return view('/main/profil', compact('tampilan', 'struktur'));
    }
    public function informasi()
    {
        $infoall = DB::table('infos')->get();
        $info1 = $infoall->sortByDesc('created_at')->first();
        $infopag = DB::table('infos')->orderBy('created_at', 'desc')->simplePaginate(3);
        $tampilan = Tampilan::first();
        return view('/main/info', compact('tampilan', 'info1', 'infoall','infopag'));
    }
    public function showinformasi(Info $info)
    {
        $info = DB::table('infos')->where('id', $info->id)->first();
        $tampilan = Tampilan::first();
        return view('/main/showinfo', compact('tampilan', 'info'));
    }


    //ADMIN-------------------------------------------------------------------------- 
    public function admin()
    {
        $survei = DB::table('surveis')->get()->count();
        $buletin = DB::table('buletins')->get()->count();
        $strukturstat = DB::table('struktur_stats')->get()->count();
        $info = DB::table('infos')->get()->count();
        $aspirasi = DB::table('aspirasis')->get()->count();
        $user = DB::table('users')->get()->count();
        $proker = DB::table('prokers')->get()->count();
        return view('admin/dashboard', compact('info', 'aspirasi', 'user', 'proker', 'survei', 'buletin', 'strukturstat'));
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
    //buletin
    public function buletin()
    {
        return view('admin/statistik/buletin/index');
    }
    public function createbuletin()
    {
        return view('admin/statistik/buletin/create');
    }
    public function deletebuletin()
    {
    }
    public function editbuletin()
    {
        return view('admin/statistik/buletin/edit');
    }

    //buletin
    public function database()
    {
        return view('admin/statistik/database/index');
    }

    //database
    public function createdatabase()
    {
        return view('admin/statistik/database/create');
    }
    public function deletedatabase()
    {
    }
    public function editdatabase()
    {
        return view('admin/statistik/database/edit');
    }
}
