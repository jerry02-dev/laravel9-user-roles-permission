<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class ProfileController extends Controller
{

    public function index()
    {
       
    }

    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();
        return view('profile.show',compact('user','roles','userRole'));
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'username' => 'required',
            'password' => 'same:confirm-password'
        ]);
    
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }
    
        $user = User::find($id);
        $user->update($input);
        $user->touch();
    
        return redirect()->route('profile.show',$id)
                        ->with('success','Profile updated successfully');
    }

    public function destroy($id)
    {
        
    }
}
