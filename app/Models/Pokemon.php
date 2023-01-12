<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pokemon extends Authenticatable
{
    use HasFactory;

    protected $table = 'pokemon';
    
	protected $casts = [
		'id' => 'int'
	];

	protected $fillable = [
		'id',
        'name',
        'picture',
        'moves',
        'type'
	];
}
