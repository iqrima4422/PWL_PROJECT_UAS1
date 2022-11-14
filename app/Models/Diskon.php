<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diskon extends Model
{
    use HasFactory;
    protected $table = 'diskon';
    protected $primarykey = 'id';

    public function suppliers(){
    	return $this->belongsTo('App\Models\Supplier' , 'supplier_id');
    }
}
