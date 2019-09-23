<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    // 以下を追記
    public static $rules = array(
        //'user_id' => 'required|unique:users',
        'name' => 'required',
        'gender' => 'required',
        'hobby' => 'required',
        'introduction' => 'required'
    );

    // ProfileHistoryモデルに関連付けを行う
    public function profile_histories()
    {
        return $this->hasMany('App\ProfileHistory', 'user_id');
    }
}
