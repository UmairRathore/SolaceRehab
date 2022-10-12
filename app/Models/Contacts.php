<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contacts extends Model
{
    use HasFactory;

    protected $table = 'contacts';
    public $fillable = ['name', 'email', 'phone', 'subject', 'message'];


}
