<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function login_index()
    {
        return view("pages.dashboard.auth.login")->with([
            "title" => "Login"
        ]);
    }

    public function login(Request $request)
    {
        $credential = $request->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credential)) {
            return redirect()->route("dashboard.index");
        }
        return redirect()->back()->with("error", "Maaf! Akun belum terdaftar");
    }

    public function register_index()
    {
        return view("pages.dashboard.auth.register")->with([
            "title" => "Register"
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            "name" => "required|unique:users,name",
            "email" => "required|email|unique:users,email",
            "password" => "required",
            "confirmed_password" => "required"
        ]);

        DB::beginTransaction();
        try {
            User::create($request->all());
            DB::commit();
            return redirect()->route("dashboard.login.index")->with("success", "Registrasi berhasil");
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with("error", $e->getMessage());
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route("dashboard.login.index");
    }
}
