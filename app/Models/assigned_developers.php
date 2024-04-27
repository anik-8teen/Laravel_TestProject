<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class assigned_developers extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'project_id',

    ];
    public function AssignedProject():HasMany
     {
     return $this->HasMany(User::class, ['project_id' =>'id']);   
    }

    public function assigned_developers():HasMany
    {
        return $this->HasMany(User::class, ['user_id'=>'id']); 
    }
}
