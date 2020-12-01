<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    use HasFactory;
    protected $fillable = ['tanggal','name','quantity','price','total_price'];
    
    public function outcome(){
        return $this->hasOne(Outcome::class);
    }
}
