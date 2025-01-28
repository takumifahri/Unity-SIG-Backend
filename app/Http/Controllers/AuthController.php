<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use function Laravel\Prompts\alert;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function registrasi() {
        
    }


    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function regist(Request $request) {
        $User = new User();
        try{
            $User->name = $request->name;
            $User->email = $request->email;
            $User->role = 'user';
            $User->password = bcrypt($request->password);
            $User->save();
        }catch(\Exception $e){
            return redirect()->back()->withErrors(['error' => 'Registrasi gagal: ' . $e->getMessage()]);
        }
        return redirect()->route('login.form')->with('success', 'Registrasi berhasil, silahkan login');
    }
    
    public function showRegist()
    {
        //
        return view('auth.regist'); // penampilan form regist
    }

    public function showLogin()
    {
        //
        return view('auth.login'); // penampilan form login
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
