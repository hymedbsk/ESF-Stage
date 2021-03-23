<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prestation extends Model
{
    use HasFactory;
    protected $table = 'prestations';
    protected $primaryKey = 'prest_id';
    protected $fillable = ['fact_id','psy','montant'];
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';

    public function factures(){
		return $this->belongsTo('App\Models\Facture','fact_id');
    }
}
