<?php

namespace App\Models;

use App\Traits\UUID;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory, UUID;

    protected $fillable = ['establishment_id', 'client_id', 'total'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function establishment()
    {
        return $this->belongsTo(Establishment::class);
    }
}
