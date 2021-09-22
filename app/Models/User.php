<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable,HasRoles, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    // protected static $logName = '';
    protected static $submitEmptyLogs = false;
    protected $guarded = [];
    protected static $logAttributes = ['title', 'description', 'status'];

    public function getDescriptionForEvent(string $eventName): string
    {
        return $eventName;
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function getThumbnailAttribute($value)
    {
        if(!empty($value))
        return asset('/img/users/'.$value);
        else
        return asset('/img/users/default-profile.png');
    }
    public function userInfo()
    {
        return $this->belongsTo(UserInfo::class, 'id', 'user_id');
    }


    public function userCreateOrUpdate($request,$type="create"){

        if($type == 'create'){
            return User::create($request);
        }
        else {
            return User::where('id',$request->id)->update($request);
        }
    }

    public function userInfoCreateOrUpdate($user,$request){
        $isuser=User::where('id',$user->id)->first();

        $request_input=[
            'user_id'=>$user->id,
            'address'=>$request->address,
            'city'=>$request->city,
            'country'=>1,
            'about_me'=>$request->about_me,
        ];
        if(!empty($isuser)){
            UserInfo::create($request_input);
        }
        else {
            UserInfo::where('user_id',$user->id)->update($request_input);
        }
    }
}
