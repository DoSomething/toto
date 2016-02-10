<?php

namespace Toto\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slack_name', 'start_date',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     * Mutator to save the slack name with an '@' symbol.
     */
    public function setSlackNameAttribute($value)
    {
      $this->attributes['slack_name'] = '@' . strtolower($value);
    }

    public static function getUsers()
    {
        $today = new \DateTime();
        return self::where('start_date', '>', $today->modify('-30 days'))->get();
    }

}
