<?php

namespace eInvoice;

use Illuminate\Database\Eloquent\Model;

class addUser extends Model
{
    protected $fillable=['User_Name','User_Designation','Email','Password'];
}
