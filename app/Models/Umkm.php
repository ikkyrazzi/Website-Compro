<?php

namespace App\Models;

use App\Traits\Uuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Umkm extends Model
{
    use HasFactory, Uuid;

    public $incrementing = false;

    protected $guarded = [];

    public static $rules = [
        'name'          => 'required|string|max:255|unique:umkms,name',
        'image'         => 'image|mimes:jpg,jpeg,png|max:2048',
        'handphone'     => 'required|numeric',
        'description'   => 'required|string',
        'instagram'     => 'required|string',
        'whatsapp'      => 'required|string',
    ];

    public static $ruleMessages = [
        'image' => 'gambar'
    ];
}
