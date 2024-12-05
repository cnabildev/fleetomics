<?php

namespace App\Enums;

enum GearboxType: string
{
    case MANUAL = 'manual';
    case AUTOMATIC = 'automatic';
    case SEMI_AUTOMATIC = 'semi_automatic';
    case CVT = 'cvt';
    case DCT = 'dct';

    public static function forBeginners(): array
    {
        return [
            self::AUTOMATIC,
            self::CVT
        ];
    }

    public static function forSportsDriving(): array
    {
        return [
            self::MANUAL,
            self::DCT
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::MANUAL => 'Manual',
            self::AUTOMATIC => 'Automatic',
            self::SEMI_AUTOMATIC => 'Semi-Automatic',
            self::CVT => 'Continuously Variable Transmission',
            self::DCT => 'Dual-Clutch Transmission',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::MANUAL => 'Traditional manual transmission with clutch pedal',
            self::AUTOMATIC => 'Fully automatic transmission with torque converter',
            self::SEMI_AUTOMATIC => 'Manual transmission without clutch pedal',
            self::CVT => 'Stepless transmission with continuous gear ratio change',
            self::DCT => 'Automated manual transmission with dual clutch system',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::MANUAL => 'manual-gearbox',
            self::AUTOMATIC => 'automatic-gearbox',
            self::SEMI_AUTOMATIC => 'semi-automatic',
            self::CVT => 'cvt-gearbox',
            self::DCT => 'dct-gearbox',
        };
    }

    public function advantages(): array
    {
        return match ($this) {
            self::MANUAL => [
                'Better fuel efficiency',
                'Lower maintenance cost',
                'More control over vehicle',
                'Usually lower purchase price',
            ],
            self::AUTOMATIC => [
                'Easier to drive',
                'Less driver fatigue',
                'Smooth operation',
                'Better for city driving',
            ],
            self::SEMI_AUTOMATIC => [
                'Combines manual and automatic benefits',
                'No clutch pedal needed',
                'Better control than full automatic',
                'Smoother than manual',
            ],
            self::CVT => [
                'Optimal fuel efficiency',
                'Smooth acceleration',
                'No gear hunting',
                'Simple mechanical design',
            ],
            self::DCT => [
                'Fast gear changes',
                'Better fuel efficiency than traditional automatic',
                'Sporty driving experience',
                'No power interruption during shifts',
            ],
        };
    }

    public function maintenanceInterval(): int
    {
        return match ($this) {
            self::MANUAL => 60000,        // 60,000 km
            self::AUTOMATIC => 50000,     // 50,000 km
            self::SEMI_AUTOMATIC => 55000, // 55,000 km
            self::CVT => 45000,          // 45,000 km
            self::DCT => 50000,          // 50,000 km
        };
    }

    public function requiresSpecialLicense(): bool
    {
        return $this === self::MANUAL;
    }
}