<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game_In_Campain extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'game_in_campain';
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
        'gic_id',
        'campain_id',
        'game_id',
        'avg_point',
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
    public function gamerating()
    {
        return $this->belongTo(Game_Rating::class);
    }

    public function campain()
    {
        return $this->belongTo(Campain::class);
    }

    public function result()
    {
        return $this->hasMany(Result::class);
    }

    public function rank()
    {
        return $this->morphMany(Rank::class, 'rate');
    }
}
