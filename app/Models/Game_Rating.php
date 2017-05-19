<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game_Rating extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'game_rating';
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
        'game_id',
        'name_game',
        'year',
        'operating_system',
        'developers',
        'description',
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
    public function gametype()
    {
        return $this->hasMany(Game_Type::class);
    }

    public function gameincampain()
    {
        return $this->hasMany(Game_In_Campain::class);
    }

    public function rank()
    {
        return $this->hasMany(Rank::class);
    }

    public function prize()
    {
        return $this->hasMany(Prize::class);
    }

    public function result()
    {
        return $this->hasManyThrough(Result::class, Game_In_Campain::class);
    }

    public function type()
    {
        return $this->belongsToMany(Type::class);
    }

    public function campain()
    {
        return $this->belongsToMany(Campain::class);
    }
}
