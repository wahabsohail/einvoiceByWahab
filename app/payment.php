<?php

namespace eInvoice;

use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    protected $fillable=['Amount','Recevied_Payments','Remaining_Payments','Remarks'];
}
