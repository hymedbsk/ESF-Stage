<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Centre extends Model
{
    use HasFactory;
    protected $table = 'centres';
    protected $primaryKey = 'centre_id';
    protected $fillable = ['nom','rue','numero','cdp','ville','tel'];
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';
}
