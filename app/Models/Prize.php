<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prize extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'prize';
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
        'prize_id',
        'name_prize',
        'campain_id',
        'user_id',
        'game_id',
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
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function game()
    {
        return $this->belongTo(Game_Rating::class);
    }

    public function campain()
    {
        return $this->belongTo(Campain::class);
    }
}
