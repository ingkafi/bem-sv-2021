<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //INFORMASI
    public function index()
    {
        $users = DB::table('users')->get()->sortByDesc('created_at');
        return view('admin/kelola/user/index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/kelola/user/create');
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
            'email' => 'required|unique:users,email',
            'name' => 'required',
        ]);
        $form_data = array(
            'email'       =>   $request->email,
            'name'        =>   $request->name,
            'password'            =>   Hash::make('adminbemsv1'),
        );
        User::create($form_data);
        Alert::success('Berhasil', 'User Berhasil Ditambahkan');
        return redirect()->action([UserController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(user $user)
    {
        $user = DB::table('users')->where('id', $user->id)->first();
        return view('/admin/kelola/user/show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $user = DB::table('users')->where('id',  $request->route('user'))->first();
        return view('admin/kelola/user/edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
        ]);
        if ($request->password == '') {
            User::where('id', $user->id)
                ->update([
                    'name'       =>   $request->name,
                    'email'       =>   $request->email,
                ]);
        } else {
            User::where('id', $user->id)
                ->update([
                    'name'       =>   $request->name,
                    'email'       =>   $request->email,
                    'password'            =>   Hash::make($request->password),
                ]);
        }
        Alert::success('Berhasil', 'Data User Berhasil Diedit');
        return redirect()->action([UserController::class, 'index']);;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $user = user::where('id',  $request->route('user'));
        $user->delete();
        Alert::success('Berhasil', 'User Telah Dihapus');

        return redirect()->action([UserController::class, 'index']);
    }
    public function reset(Request $request)
    {
        $userid = User::where('id', $request->route('user'));
        $userid
            ->update([
                'password' => Hash::make('adminbemsv1'),
            ]);
        Alert::success('Berhasil', 'Password User Berhasil Direset');
        return redirect()->action([UserController::class, 'index']);
    }
}
