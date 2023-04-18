<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'name',
        'iso',
    ];
    /**
     * The attribute for table name
     * @var string
     */
    protected $table = 'countries';

    /**
     * Get the user that owns the country.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
