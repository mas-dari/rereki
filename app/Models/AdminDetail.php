<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'admin_id',
        'comment', 
        'commentType',
    ];
 
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
