<?php
namespace App;
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Train extends Model
{
    protected $table = 'trains';
    use HasFactory;
}
