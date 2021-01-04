<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Research extends Model
{
    use HasFactory;
    protected $table = 'research';
    public function research_fund_provider(){
        return $this->belongsTo('App\Model\ResearchFundProvider');
    }
}
