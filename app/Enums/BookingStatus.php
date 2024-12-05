<?php

namespace App\Enums;

enum BookingStatus: string
{
    case WAITING = 'waiting';
    case CONFIRMED = 'confirmed';
    case CHECKIN = 'check-in';
    case CHECKOUT = 'check-out';
    case CANCELLED = 'cancelled';

    public function label(): string
    {
        return match ($this) {
            self::WAITING => 'Waiting',
            self::CONFIRMED => 'Confirmed',
            self::CHECKIN => 'Check In',
            self::CHECKOUT => 'Check Out',
            self::CANCELLED => 'Cancelled',
        };
    }

    public function color(): string
    {
        return match ($this) {
            self::WAITING => 'yellow',
            self::CONFIRMED => 'blue',
            self::CHECKIN => 'green',
            self::CHECKOUT => 'purple',
            self::CANCELLED => 'red',
        };
    }
}
