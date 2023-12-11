<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $guarded = [];

    public static $rules = [
        'name'          => 'required|string|max:255|unique:teams,name',
        'position   '   => 'required|string',
        'description'   => 'required|string',
    ];

    public static $ruleMessages = [
        'image' => 'gambar'
    ];
}
