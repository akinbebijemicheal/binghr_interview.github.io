<?php
  
namespace App\Models;
  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
  
class Bing extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'employerid', 'firstname', 'lastname', 'email', 'phone', 'role', 'username', 'password', 'saread', 'sawrite', 'sadelete', 'aread', 'awrite', 'adelete', 'eread', 'ewrite', 'edelete'  
    ];
}