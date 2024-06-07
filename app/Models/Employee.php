<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Employee extends Model
{
  protected $table = 'employee_tbl';
  protected $primaryKey = 'id';
   protected $fillable = [
        'emp_name',
        'emp_name2',
        'dob',
        'phone',

    ];

    use HasFactory;

}
