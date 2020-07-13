<?php

namespace App\Http\Controllers;

// use App\Admin;s
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $judul = "Manajemen Admin";
        $role = Role::where('name', 'like', "%Admin%")->get();
        $admin = DB::select('SELECT users.*, roles.name AS role_name FROM users JOIN roles ON roles.id = users.role_id WHERE users.role_id = 4 OR users.role_id = 5 OR users.role_id = 6 OR users.role_id = 7 OR users.role_id = 8', [1]);
        return view('superadmin.admin.index', compact('judul', 'admin', 'role'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':attribute wajib diisi!',
            'max' => ':attribute maksimal :max karakter',
            'min' => ':attribute maksimal :min karakter',
        ];

        // dd($request);
        $request->validate([
            'nama' => 'required|string|max:50',
            'username' => 'required|string|unique:users,email',
            'password' => 'required|string',
            'role' => 'required|string|in:4,5,6,7,8',
        ], $messages);

        $user = User::firstOrCreate([
            'email' => htmlspecialchars(strtolower($request->username)),
        ], [
            'nama' => htmlspecialchars(ucwords($request->nama)),
            'email' => htmlspecialchars(strtolower($request->username)),
            'password' => bcrypt($request->password),
            'role_id' => htmlspecialchars($request->role),
            'bayar_pendaftaran' => 1,
            'no_telp' => '0',
            'dgk' => 0,
        ]);
        $user->assignRole($request->role);
        return redirect(route('admin.index'))->with('success', 'Akun Sudah Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $admin = User::find($id);
        $admin->delete();
        return redirect(route('admin.index'))->with('success', 'Akun Sudah Berhasil Dihapus!');
    }
}
