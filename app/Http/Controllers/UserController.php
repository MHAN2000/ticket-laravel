<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index() {
        return view('users.login.login');
    }

    public function destroy($id) {
        User::find($id)->delete();
        return response()->json('Ok');
    }

    public function indexUsers(Request $request) {
        if ($request->ajax()) {
            $users = User::all();
            return DataTables::of($users)->make();
        }
        return view('users.index');
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $user = User::create($request->all());
        return response()->json($user);
    }

    public function login(Request $request) {
        $loginData = $request->except('_token');
        if (Auth::attempt($loginData)) {
            $request->session()->regenerate();
            return response()->json('Ok');
        }

        return response()->json('Wrong credentials', 401);
    }

    public function logout() {
        Session::flush();
        Auth::logout();
        return response()->json('Ok');
    }

    public function home() {
        return view('index');
    }
}