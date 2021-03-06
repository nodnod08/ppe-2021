<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductTypes extends Model
{
    protected $table = 'product_types';

    protected $fillable = [
        'product_name',
        'user_id'
    ];

    public function product_attributes() {
        return $this->hasMany('App\Models\ProductAttributes', 'product_type_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function purchasing_types() {
        return $this->hasMany('App\Models\PurchasingTypes', 'product_type_id');
    }

    public function show_columns() {
        
        return $this->product_attributes()->get()->map(function($field) {
            return $field->product_column_name;
        })->toArray();
    }

    public function inventory() {
        return $this->hasMany('App\Models\Inventory', 'product_type_id');
    }
}
