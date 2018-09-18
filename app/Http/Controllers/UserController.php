<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\UserRole;
use DB;
use Validator;
use Response;
use Illuminate\Support\Facades\Input;

class UserController extends Controller
{
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index');
    }

    public function show()
    {
        $users = DB::table('users')
                 ->join('divisis', 'users.role', '=', 'divisis.id_divisi')
                 ->select('users.*','divisis.*')
                 ->get();

        return view('admin.show')->with('users', $users);
    }

    public function add()
    {
        return view('admin.add');
    }

    public function store(Request $request)
    {
    	$data = $request->all();
        User::create([
            'username' => $data['username'],
            'role' => $data['role'],
            'password' => bcrypt($data['password']),]
        );
        return redirect(url('/admin/show'));
    }

    //edit data function
    public function edit($id)
    {
        $user = User::find($id);
        $roles =UserRole::all();
        if($user!=null)
            /*dd($roles);*/
            return view('admin.edit', compact('user','roles'));
            /*return response()->json($roles);*/
        else
            return redirect(url('/admin'));  
    }

    
    public function update(Request $request, $id)
    {
        User::find($id)->update([
            'username' => $request->input('username'),
            'password' => $request->input('password'),
            'role' => $request->input('role')]);
        return redirect(url('/admin/show'));
    }

    // delete item
    public function delete($id) {
        User::find($id)->delete();
        return redirect(url('/admin/show'));
    }
}
