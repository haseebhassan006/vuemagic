<?php

namespace App\Http\Controllers\Backend\user;


use App\Models\User;
use App\Models\UserInfo;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index()
    {


        $q=request('query');

        $users=User::where('name', 'like', '%' . $q . '%')
        ->Orwhere('email', 'like', '%' . $q. '%')
        ->latest()->paginate((int)env('PER_PAGE'));
       return response()->json(['users'=>$users]);

    // $users = User::all();
    // $allusers = User::with('roles')->latest()->paginate(env('PER_PAGE'));
    // return response()->json(['users'=>$users, 'allusers'=>$allusers]);
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
            'name' => ['required', 'string', 'min:3','max:50'],
            'email' => ['required',  'email', 'unique:users'],
            'password' => ['required', 'string', 'min:6','max:50'],
            'phone' => ['required',  'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:255', 'unique:users'],
        ]);

        $request=(object)$request;
        $user=new User();
        $user_name=preg_replace('/\s+/', '',Str::lower($request->name));
        $user_name=  $user_name.rand(10,400000);
        $request_array=[
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>Hash::make($request->password),
            'user_name'=> $user_name,
        ];

        $new_user=$user->userCreateOrUpdate($request_array);

        $user->userInfoCreateOrUpdate($new_user,$request);

        return response()->json($user,200);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id){
        $user=User::where('id',$id)->with('userInfo:about_me,address,city,country,postal_code,user_id')->first();
        return response()->json(['user'=>$user]);
    }
    public function update(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'min:3','max:50'],
            'email' => ['required',  'email', 'unique:users,email,'.$request->id],
            'phone' => ['required',  'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:255', 'unique:users,phone,'.$request->id],
        ]);

        if($request->password!=""){
              $request->validate([
                    'password' => ['required', 'string', 'min:8'],
              ]);
            User::where('id',$request->id)->update(['password'=>Hash::make($request->password)]);
        }

        //   $user=User::where('id',$request->id)->first();
          User::where('id',$request->id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'l_name' => $request->l_name,
            'f_name' => $request->f_name,
            'role' => $request->role,
            'postalcode' => $request->postalcode,
            'city' => $request->city,
            'country' => $request->country,
            'bio' => $request->bio,
            'address' => $request->address,
        ]);

        return response()->json();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $user_info=UserInfo::where('user_id',$id)->delete();
       $user =  User::destroy($id);
       return response()->json($user);

    }
}
