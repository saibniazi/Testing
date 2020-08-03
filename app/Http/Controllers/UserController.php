<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Profile;
use App\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = DB::table('users')
            ->join('profiles', 'users.id', '=', 'profiles.user_id')
            //->join('roles','users.id','=','roles.user_id')
            ->get();

            $userpro = DB::table('users')
            ->join('roles','users.id','=','roles.user_id')
            ->get();

        // return dd($users,$userpro);
        return view('user.index',compact('users','userpro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //$role = Role::get();
        //return dd($role);
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // return dd($request->all());
        $user = User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>$request->password
        ]);

        $profile = Profile::create([
            'country' =>$request->country,
            'city' =>$request->city,
            'contact' =>$request->contact,
            //'user_id' =>$request->random_int,
            'photo' =>$request->photo,
        ]);

        return redirect()->back();
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
        //
    }
}
