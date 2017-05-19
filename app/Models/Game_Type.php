<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game_Type extends Model
{
	  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'game_type';
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
        'type_id',
        'id',
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
    public function type()
    {
        return $this->belongTo(Type::class);
    }

    public function game()
    {
        return $this->belongTo(Game_Type::class);
    }
}
