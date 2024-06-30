<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Contact extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $keyType = 'int';
    protected $table = 'contacts';
    public $incremeting = true;
    public $timestamps = true;

    public function user(): BelongsTo {
        return $this->belongsTo(User::class, "user_id", "id");
    }
}
