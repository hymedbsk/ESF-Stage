<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Psy extends Model
{
    use HasFactory;
    protected $table = 'psy';
    protected $primaryKey = 'psy_id';
    protected $fillable = ['nom','prenom','specialite','photo'];
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';
}
