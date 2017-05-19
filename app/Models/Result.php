<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
      /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'result';
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
        'result_id',
        'criteria_id',
        'user_id',
        'gic_id',
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
    public function user()
    {
        return $this->belongTo(User::class);
    }

    public function criteria()
    {
        return $this->belongTo(Criteria::class);
    }

    public function gameincampain()
    {
        return $this->belongTo(Game_In_Campain::class);
    }

    public function rank()
    {
        return $this->morphMany(Rank::class, 'rate');
    }
}
