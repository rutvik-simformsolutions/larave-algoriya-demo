<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Skill extends Model
{
    use HasFactory;
    use Searchable;
    protected $table = "skill";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'departmentid',
        'skillname',
        'description',
        'status',
        'createdby',
    ];


    public function user(){
        return $this->hasOne(User::class,'id','createdby');
    }


    public function department()
    {
        return $this->hasOne(Department::class,'id','departmentid');
    }


}
