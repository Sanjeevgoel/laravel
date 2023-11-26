<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\models\Album;

class Image extends Model 
{
  protected $table = 'images';
  
  protected $fillable = array('album_id','description','image', 'full-image', 'alt');
}
