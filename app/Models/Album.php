<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $table = 'albums';
    protected $primaryKey = 'album_id';
    protected $fillable = array('name','description','cover_image');
    const CREATED_AT = "date_cree";
    const UPDATED_AT= 'date_edit';
    const DELETED_AT='date_supp';

  public function Photos(){

    return $this->has_many('images');
  }
}
