<?php

use Carbon\Carbon;

class BaseModel extends Eloquent
{
    /**
     * Format created_at date from database.
     */
    public function getCreatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->subDay()->format('l, F jS Y @ g:i A');
    }

    /**
     * Format updated_at date from database.
     */
    public function getUpdatedAtAttribute($value)
    {
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago')->diffForHumans();
    }

}
