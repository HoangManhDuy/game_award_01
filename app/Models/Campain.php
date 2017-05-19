<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'campain';
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
        'campain_id',
        'name_campain',
        'start_date',
        'and_date',
        'description',
        'status',
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
    public function admin()
    {
        return $this->belongTo(Admin::class);
    }

    public function rank()
    {
        return $this->hasMany(Rank::class);
    }

    public function gameincampain()
    {
        return $this->hasMany(Game_In_Campain::class);
    }

    public function prize()
    {
        return $this->hasMany(Prize::class);
    }

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }

    public function result()
    {
        return $this->hasManyThrough(Result::class, Game_In_Campain::class);
    }

    public function game()
    {
        return $this->belongsToMany(Game_Rating::class);
    }
}
