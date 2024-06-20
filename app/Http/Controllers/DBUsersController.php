<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreDBUsersRequest;
use App\Http\Requests\UpdateDBUsersRequest;
use App\Models\DBCategory;

class DBUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $genres = DBCategory::all();
        if (Auth::check()){
            return view('login', [
                'logged' => true,
                'admin' => Auth::user()->role === 'admin'
            ]);
        }
        else{
            return view('login', [
                'logged' => false,
                'admin' => false
            ]);
        }
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

        return redirect('/login')->with('success', 'Anda berhasil register!');
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
    public function show(User $User)
    {
        $user = $User->where('id', Auth::id())->get()->first();
        return view('editProfile', [
            'title' => 'Profile',
            'user'=> $user
        ]);
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDBUsersRequest $request, User $User)
    {
        if (Auth::check()){
            $request->validate([
                'username' => 'required',
                'address' => 'required',
                'phone_number' => 'required',
            ]);
    
            $user = $User::find(Auth::id());

            $user->username = $request->username;
            $user->address = $request->address;
            $user->phone_number = $request->phone_number;
            $user->updated_at = now();

            $user->save();
        }
        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User)
    {
        //
    }
}
