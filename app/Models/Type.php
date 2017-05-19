<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
	   /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'type';
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
        'type_id',
        'name_type',
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

    public function game()
    {
        return $this->belongsToMany(Game_Rating::class);
    }
}
