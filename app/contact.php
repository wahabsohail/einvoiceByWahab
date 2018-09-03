<?php

namespace eInvoice;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $fillable=['Contact_Name','Busniness_Name','Email','Contact_Number',
    'Contact_Address'];
}
