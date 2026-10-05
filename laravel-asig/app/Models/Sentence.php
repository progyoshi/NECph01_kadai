<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sentence extends Model
{
    //
    protected $fillable = [
        'body',
        'user_id',
        'parent_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function parent()
    {
        return $this->belongsTo(Sentence::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(Sentence::class, 'parent_id');
    }
}
