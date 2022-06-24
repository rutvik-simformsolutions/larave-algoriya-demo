<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;


class Department extends Model
{
    use HasFactory;
    use Searchable;
    protected $table = "department";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'departmentname',
        'status',
        'isedit',
        'createdby',

    ];

    protected $casts = [
        'createdat' => 'datetime',
        'updatedat' => 'datetime',
    ];

    public function devby()
    {
        return $this->belongsTo(User::class, 'createdby', 'id');
    }

}
