<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassiveIncome extends Model
{
    use HasFactory;

    public const BASE_STATE = 0;
    public const MIDDLE_STATE = 1;
    public const ADVANCE = 2;


    

}
