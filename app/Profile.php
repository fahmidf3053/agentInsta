<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage(){

        $imagepath = ($this->image) ? $this->image : 'profile/cG0TK3BckMG7ZZAJDVirIUwzg0Fnr7TzMFy6Ztf9.png';

        return '/storage/'.$imagepath;

    }

    public function user(){

        return $this->belongsTo(User::class);
    }
}
