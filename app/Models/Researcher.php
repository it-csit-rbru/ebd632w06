<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Researcher extends Model
{
    use HasFactory;
    protected $table = 'researcher';
    public function title(){
        return $this->belongsTo('App\Model\Title');
    }
    public function faculty(){
        return $this->belongsTo('App\Model\Faculty');
    }
}
