<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, UUID;

    protected $fillable = ['name', 'slug', 'description'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }
}
