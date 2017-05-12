<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
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
        'rank_id',
        'campain_id',
        'game_id',
        'point',
   
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
    public function rate()
    {
        return $this->morphTo();
    }
}
