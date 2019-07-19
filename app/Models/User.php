<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
/** @mixin \Eloquent */

class User extends Authenticatable
{
    //
    public function get_user_icon()
    {
        return "/img/profile_small.jpg";
    }

}
