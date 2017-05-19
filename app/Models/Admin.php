<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'amin_id',
        'name_admin',
    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $date = [
        'create_at',
        'delete_at',
    ];

    public function campain()
    {
        return $this->hasMany(Campain::class);
    }

    public function prize()
    {
        return $this->hasManyThrough(Prize::class, Campain::class);
    }

    public function comment()
    {
        return $this->hasManyThrough(Comment::class, Campain::class);
    }

    public function rank()
    {
        return $this->hasManyThrough(Rank::class, Campain::class);
    }

}
