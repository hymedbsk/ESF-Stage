<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prestations extends Model
{
    use HasFactory;
    protected $table = 'prestations';
    protected $primaryKey = 'prest_id';
    protected $fillable = ['qte','fact_id','design','montant'];
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';

    public function factures(){
		return $this->belongsTo('App\Models\factures','fact_id');
    }
}

