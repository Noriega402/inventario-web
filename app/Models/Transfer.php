<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = [
        'serie',
        'correlative',
        'date',
        'total',
        'observation',
        'origin_warehouse_id',
        'destination_warehouse_id',
        'reason_id',
    ];

    // Relacion muchos a muchos polimorfica con productos
    public function products(){
        return $this->morphToMany(Product::class, 'productable')->withPivot('quantity', 'price', 'subtotal')
        ->withTimestamps();
    }

    // Relacion uno a muchos inversa
    public function originWarehouse(){
        return $this->belongsTo(Warehouse::class, 'origin_warehouse_id');
    }

    public function destinationWarehouse(){
        return $this->belongsTo(Warehouse::class, 'destination_warehouse_id');
    }

    public function reason(){
        return $this->belongsTo(Reason::class);
    }
}
