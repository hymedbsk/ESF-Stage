<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    protected $table = 'factures';
    protected $primaryKey = 'fact_id';
    protected $fillable = ['num','centre_id','p_nom','p_prenom','p_ddn','p_dossier'];
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';

    public function prestations(){
        return $this->hasMany('App\Models\Prestation');
    }

    public function centre(){
		return $this->belongsTo('App\Models\Centre','centre_id');
    }
}
