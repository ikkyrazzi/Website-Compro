<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $guarded = [];

    public static $rules = [
        'image'         => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ];

    public static $ruleMessages = [
        'image' => 'gambar'
    ];
}
