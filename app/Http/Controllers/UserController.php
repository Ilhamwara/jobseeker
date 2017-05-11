<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Auth;
use App\User;
use App\Job;


class UserController extends Controller
{
    public function pekerja()
    {
        $user = User::where('level','member')->where('aktif','1')->get();
        return view('pekerja.index',compact('user'));
    }

    public function profile($id)
    {
        $user = User::findOrFail($id);
        return view('user.profile',compact('user'));
    }

    public function setting()
    {
        $user = User::findOrFail(Auth::user()->id);
        return view('user.setting',compact('user'));
    }
    public function perusahaan()
    {
        $comp = User::where('level','perusahaan')->where('aktif','1')->get();
        return view('perusahaan.index',compact('comp'));
    }
    public function delete_profile($id)
    {
        if (Auth::user()->level != 'admin') {
            return redirect('dashborad');
        }

        $user = User::findOrFail($id);
        $user->aktif = '0';
        $user->save();

        return redirect()->back()->with('success','Berhasil menghapus member');
    }

    public function register()
    {
        return view('register');
    }
    public function reg_comp()
    {
        return view('reg_comp');   
    }
    public function post_register(Request $r)
    {
        $cek = User::all();

        foreach ($cek as $value) {
            if ($value->email == $r->email) {
                return redirect()->back()->with('warning','Email sudah terdaftar');
            }
        }

        $user = new User;
        $user->name     = $r->nama;
        $user->email    = $r->email;
        $user->level    = 'member';
        $user->password = Hash::make($r->password);
        $user->save();

        return redirect('/')->with('success','Berhasil register silahkan login ');
    }

    public function login()
    {
        return view('login');
    }
    public function dashboard()
    {
        return view('dashborad');
    }
    public function add_job()
    {
        // if (Auth::user()->level != 'admin' || Auth::user()->level != 'perusahaan') {
        //     return redirect('dashborad');
        // }

        return view('pekerjaan.tambah');
    }
    public function history()
    {
        return view('history.index');
    }
    public function post_login(Request $r)
    {
        $this->validate($r, [
            'email'     => 'required',
            'password'  => 'required'
        ]);

        if (Auth::attempt(['email' => $r->email, 'password' => $r->password , 'level' => 'member'])) {
            return redirect()->intended('dashboard');
        }

        if (Auth::attempt(['email' => $r->email, 'password' => $r->password ,'level' => 'admin'])) {
            return redirect()->intended('dashboard');
        }

        if (Auth::attempt(['email' => $r->email, 'password' => $r->password ,'level' => 'perusahaan'])) {
            return redirect()->intended('dashboard');
        }

        return redirect()->back()->with('error','email dan password yang anda masukan tidak sesuai');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('success','Anda berhasil logout');
    }
    public function post_setting(Request $r)
    {
        $user = User::findOrFail(Auth::user()->id);
        $user->name         = $r->nama;
        $user->email        = $r->email;
        $user->alamat       = $r->alamat;
        $user->about        = $r->about;
        $user->umur         = $r->umur;
        $user->kota         = $r->kota;
        $user->grade        = $r->grade;
        $user->perusahaan   = $r->perusahaan;
        $user->jabatan      = $r->jabatan;
        $user->gaji         = $r->gaji;
        $user->save();

        return redirect()->back()->with('success','Berashil update');
    }
    public function job()
    {
        $job = Job::paginate(10);
        return view('pekerjaan.index',compact('job'));
    }
    public function postadd_job(Request $r)
    {
        $job = new Job;
        $job->id_perusahaan = Auth::user()->id;
        $job->judul         = $r->judul;
        $job->bidang        = $r->bidang;
        $job->gaji_mulai    = $r->gaji_mulai;
        $job->gaji_sampai   = $r->gaji_sampai;
        $job->level         = $r->level;
        $job->lokasi        = $r->lokasi;
        $job->keterangan    = $r->keterangan;
        $job->save();

        return redirect()->back()->with('success','Berhasil menambahkan job');
    }
    public function postreg_comp(Request $r)
    {
        $cek = User::all();

        foreach ($cek as $value) {
            if ($value->email == $r->email) {
                return redirect()->back()->with('warning','Email sudah terdaftar');
            }
        }

        $user = new User;
        $user->name     = $r->nama;
        $user->email    = $r->email;
        $user->level    = 'perusahaan';
        $user->password = Hash::make($r->password);
        $user->save();

        return redirect('/')->with('success','Berhasil register silahkan login ');
    }
}

