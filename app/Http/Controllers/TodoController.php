<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login-lama');
    }

    public function register()
    {
        return view('register');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            'username' => 'required',
            'email' => 'required|email:dns',
            'password' => 'required|min:8',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/')->with('success', 'Berhasil menambahkan akun! silahkan login!');
    }
    public function inputLogin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);
        $user=$request->only(['username','password']);
         if (Auth::attempt($user)){
            return redirect('/dashboard')->with('islogin','Kamu Sudah Login!');
        }
        else {
            return redirect()->back()->with('failed','Gagal Login, Silahkan Buat akun');
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
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
            'title' => 'required|min:3',
            'date' => 'required',
            'description'=> 'required|min:8',
        ]);

        Todo::create([
            'title' =>
            $request->title,
            'date' => $request->date,
            'description' => $request->description,
            'user_id' => Auth::user()
            ->id,
            'status'=> 0
        ]);
        return redirect('/dashboard')->with('addTodo','Berhasil menambahkan data Todo!');
    }
    public function data()
    {
        $todos = Todo::all();
        return view('data', compact
        ('todos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $todo = Todo::where('id',$id)->first();

        return view ('edit',compact('todo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'title' => 'required|min:3',
            'date' => 'required',
            'description'=> 'required|min:8',    
            ]);

            Todo::where('id',$id)->update([
            'title' =>$request->title,
            'date' => $request->date,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
            'status'=> 0
            ]);
            return redirect('/data')->with('successUpdate','Berhasil Menguabah Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Todo::where('id',$id)->delete();
        return redirect('/data')->with('successDelete','Berhasil Menghapus');
    }
    public function updateComplated(request $request,$id)
    {
        Todo::where('id','=',$id)->update([
            'status'=>1,
            'done_time'=>\Carbon\Carbon::now(),
        ]);
        return redirect()->back()->with('done','Todo Telah selesai dikerjakan!');
    }
}
