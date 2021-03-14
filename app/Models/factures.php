<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class factures extends Model
{
    use HasFactory;
    protected $table = 'factures';
    protected $primaryKey = 'fact_id';
    protected $fillable = ['num','dest','User_id'];
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';

    public function prestations(){
        return $this->hasMany('App\Models\prestations');
    }

}
