<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getusers()
    {
        $data=User::get();
        // return $data;
        return view('users',compact('data'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createuser()
    {
        return view('add-user');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveuser(Request $request)
    {
        // dd($request->all());
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        $usr=new user();
        $usr->name=$name;
        $usr->email=$email;
        $usr->email=$email;
        $usr->save();
        return redirect ()-> back()->with('success','user added successfully');
        //
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
    public function edituser($id)
    {
        $data=User:: where('id','=',$id)->first();
        return view('edit-user',compact('data'));
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
        $name=$request->name;
        $email=$request->email;
        $phone=$request->phone;
        user::where('id','=',$id)->update([
            'name'=>$name,
            'email'=>$email,
            'phone'=>$phone,

        ]);
        return redirect ()-> back()->with('success','user updated successfully');

    }

    
    public function deleteuser($id)
    {
        //
    User:: where('id','=',$id)->delete();
    }
}
