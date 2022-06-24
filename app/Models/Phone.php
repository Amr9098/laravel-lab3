<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $table="Phones";
    protected $primaryKey=['phone', 'users_id'];



    public $incrementing = false;
    // public $timestamp="false";



}
