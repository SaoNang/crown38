<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Usergroup;
use Session;
use Hash;

class CustomAthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function userpermission(){
        $arr['usergroups'] = Usergroup::all();
        $arr['users'] = User::join('usergroups','usergroups.id','=','users.gid')->select('users.*','usergroups.ugroup')->get();
        return view('userpermission')->with($arr);
    }
    public function loginuser(Request $request){
        $request->validate([
            'uname'=>'required',
            'upass'=>'required'
        ],[
            'uname.required'=>'Please fill in username',
            'upass.required'=>'Please fill in password'
        ]);
        $res = User::where('uname','=',$request->uname)->first();
        if($res){
            if(Hash::check($request->upass,$res->upass)){
                $request->session()->put('loginId',$res->id);
                $request->session()->put('loginUname',$res->uname);
                return redirect('dashboard');
            }else{
                return back()->with('fail','Password is not correct.');
            }
        }else{
            return back()->with('fail','Username was not register.');
        }
    }
    public function createuser(Request $request){
        $request->validate([
            'fname'=>'required',
            'gname'=>'required',
            'uname'=>'required|unique:users',
            'upass'=>'required'
        ],[
            'fname.required'=>'Please fill in Family Name',
            'gname.required'=>'Please fill in Given Name',
            'uname.required'=>'Please fill in username',
            'upass.required'=>'Please fill in password'
        ]);
        $user = new User();
        $user->fname=$request->fname;
        $user->gname=$request->gname;
        $user->uname=$request->uname;
        $user->upass=Hash::make($request->upass);
        $user->gid=$request->member;
        $user->token=$request->_token;
        $user->save();
        $res = User::join('usergroups','usergroups.id','=','users.gid')->select('users.*','usergroups.ugroup')->where('users.uname','=',$request->uname)->get();
        foreach($res as $c){
            $member = $c->ugroup;
            $user->id=$c->id;
        }
        $user->member=$member;
        return response()->json($user);
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loginId')){
            // $data = User::where('id','=',Session::has('loginId'))->first();
        }
        return view("dashboard",compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            Session::pull('loginUname');
            return redirect('login');
        }
    }
    public function userpermissiongetid($id){
        $userpermission = User::find($id);
        return response()->json($userpermission);
    }
    public function userpermissionupdate(Request $request){
        $request->validate([
            'fname'=>'required',
            'gname'=>'required',
            'uname'=>'required',
            'upass'=>'required'
        ],[
            'fname.required'=>'Please fill in Family Name',
            'gname.required'=>'Please fill in Given Name',
            'uname.required'=>'Please fill in username',
            'upass.required'=>'Please fill in password'
        ]);
        $user = User::find($request->id);
        $user->fname=$request->fname;
        $user->gname=$request->gname;
        $user->uname=$request->uname;
        if($request->upass!="*****"){$user->upass=Hash::make($request->upass);}        
        $user->gid=$request->member;
        $user->save();
        $res = User::join('usergroups','usergroups.id','=','users.gid')->select('users.*','usergroups.ugroup')->where('users.id','=',$request->id)->get();
        foreach($res as $c){
            $member = $c->ugroup;
        }
        $user->member=$member;
        return response()->json($user);
    }
}
