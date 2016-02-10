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
     * Accessor to return the slack name with an '@' symbol.
     */
    public function getSlackNameWithAt()
    {
        return '@' . $this->attributes['slack_name'];
    }

    public static function getUsers()
    {
      return self::first();
    }

}
