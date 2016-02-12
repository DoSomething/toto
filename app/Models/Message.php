<?php

namespace Toto\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'day_to_send', 'message', 'time_to_send', 'tags'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [

    ];

    /**
     *
     */
    public static function getMessage(User $user) {
        $today = new \DateTime();
        $start_date = new \DateTime($user->start_date);
        $current_onboarding_day = $today->diff($start_date);
        return self::where('day_to_send', '=', $current_onboarding_day->days)->where('type', '=', 'schedule')->first();
    }
}
