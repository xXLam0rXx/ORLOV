<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [ 'name',
                            'fio',
                            'surname',
                            'patronymic',
                            'salary',
                            'post_id',
                            'sex_id' ];
    
    public function Post() {
        return $this->belongsTo(posts::class, "post_id", "id");
        
    }
    public function Sex() {
        return $this->belongsTo(sex::class, "sex_id", "id");
        
    }
}
