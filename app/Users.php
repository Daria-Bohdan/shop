<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends \Illuminate\Foundation\Auth\User
{
    protected $table = 'users';
}
