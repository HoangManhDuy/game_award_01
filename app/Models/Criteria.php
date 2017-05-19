<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Criteria extends Model
{
	/**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'criteria';
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
        'criteria_id',
        'criteria_name',
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
    public function result()
    {
        return $this->hasMany(Result::class);
    }
}
