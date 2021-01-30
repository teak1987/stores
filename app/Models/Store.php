<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Store extends Model
{
    use HasFactory;

    protected $fillable = ['name','code','base_url','description','product_id'];

    public function products(){
        return $this->hasMany('App\Models\Product');
    }




}
