<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Role;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use App\Gelombang;
use Illuminate\Support\Facades\Validator;
use Alert;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function showRegistrationForm()
    {
        $judul = "Pendaftaran Baru Calon Peserta Didik";
        $role = Role::where('name', 'not like', "%Admin%")->get();
        return view('auth.register', compact('role', 'judul'));
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'no_telp' => ['required', 'string', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     dd($data);
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function register(Request $request)
    {
        $flag = Gelombang::where('active', 1)->first();
        // dd($flag->nama_gelombang);
        $messages = [
            'required' => ':attribute wajib diisi!',
            'email' => 'harus berupa email!',
            'max' => ':attribute maksimal :max karakter',
            'min' => ':attribute maksimal :min karakter',
            'same' => ':attribute tidak sama!',
        ];

        // dd($request);
        $request->validate([
            'nama' => 'required|string|max:50',
            'email' => 'required|email|string|unique:users,email',
            'no_telp' => 'required|string|max:20',
            'password' => 'required|string|same:password1',
            'password1' => 'required|string',
            'pendidikan' => 'required|string|in:1,2,3'
        ], $messages);

        $user = User::firstOrCreate([
            'email' => htmlspecialchars($request->email),
        ], [
            'nama' => htmlspecialchars(ucwords($request->nama)),
            'email' => htmlspecialchars(strtolower($request->email)),
            'no_telp' => htmlspecialchars($request->no_telp),
            'password' => bcrypt($request->password),
            'role_id' => htmlspecialchars($request->pendidikan),
            'dgk' => $flag->nama_gelombang,
            'bayar_pendaftaran' => 0,
            // 'jurusan' => htmlspecialchars($request->jurusan),
        ]);
        $user->assignRole($request->pendidikan);
        return redirect(route('login'))->with('success', 'Akun Sudah Berhasil Didaftarkan, Silahkan Login');
    }
}
