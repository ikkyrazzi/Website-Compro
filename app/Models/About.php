<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $guarded = [];

    public static $rules = [
        'title'         => 'required|string|max:255|unique:abouts,title',
        'description'   => 'required|string',
        'image'         => 'required|image|mimes:jpg,jpeg,png|max:2048'
    ];

    public static $ruleMessages = [
        'image' => 'gambar'
    ];
}
