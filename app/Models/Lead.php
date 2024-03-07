<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $table = 'lead';
    public function Customer(){
        return $this->hasOne(Customer::class,'id','customer_id');
    }
    public function Category(){
        return $this->hasOne(Category::class,'id','category_id');
    }
}
