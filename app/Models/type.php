<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;

class type extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
