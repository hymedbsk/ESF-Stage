<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $table = 'Gallery';
    protected $primaryKey = 'image_id';
    protected $fillable = ['nom','image'];

    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';
}
