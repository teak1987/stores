<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = ['name','sku','description','price','slug'];

    public function urls(){
        return $this->morphMany('App\Models\Url', 'relation');
    }




}
