<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Album extends Model {

  protected $table = 'albums';

  protected $fillable = array('name','description','cover_image');

  public function Photos()
  {
    return $this->hasMany(Image::class);
  }
}