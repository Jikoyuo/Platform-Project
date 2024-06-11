<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\DBUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreDBUsersRequest;
use App\Http\Requests\UpdateDBUsersRequest;

class DBUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    protected function create(array $data)
    {
        return User::create([
            'username' => $data['username'],
            'address' => $data['address'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'address' => ['required', 'string'],
            'phone_number' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDBUsersRequest $request)
    {
        $this->validator($request->all())->validate();

        $user = $this->create($request->all())->save();

        return redirect('/login');
    }

    public function login(StoreDBUsersRequest $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect('/home');
        }

        return back()->withErrors([
            'username' => 'The provided credentials do not match our records.',
        ])->onlyInput('username');
    }

    /**
     * Display the specified resource.
     */
    public function show(DBUsers $dBUsers)
    {
        //
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DBUsers $dBUsers)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBUsersRequest $request, DBUsers $dBUsers)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DBUsers $dBUsers)
    {
        //
    }
}
