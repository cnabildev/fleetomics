<?php

namespace App\Enums;

enum EnergyType: string
{
    // Traditional Fuels
    case GASOLINE = 'gasoline';
    case DIESEL = 'diesel';

    // Electric
    case ELECTRIC = 'electric';

    // Hybrid Types
    case HYBRID = 'hybrid';
    case PLUG_IN_HYBRID = 'plug_in_hybrid';

    // Alternative Fuels
    case LPG = 'lpg';
    case CNG = 'cng';
    case HYDROGEN = 'hydrogen';
    case ETHANOL = 'ethanol';
    case BIODIESEL = 'biodiesel';

    public static function getEcoFriendly(): array
    {
        return [
            self::ELECTRIC,
            self::HYDROGEN,
            self::PLUG_IN_HYBRID,
        ];
    }

    public static function getLongRange(): array
    {
        return [
            self::DIESEL,
            self::HYBRID,
            self::BIODIESEL,
        ];
    }

    public function label(): string
    {
        return match ($this) {
            self::GASOLINE => 'Gasoline',
            self::DIESEL => 'Diesel',
            self::ELECTRIC => 'Electric',
            self::HYBRID => 'Hybrid',
            self::PLUG_IN_HYBRID => 'Plug-in Hybrid',
            self::LPG => 'LPG (Liquefied Petroleum Gas)',
            self::CNG => 'CNG (Compressed Natural Gas)',
            self::HYDROGEN => 'Hydrogen Fuel Cell',
            self::ETHANOL => 'Ethanol',
            self::BIODIESEL => 'Biodiesel',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::GASOLINE => 'Traditional petrol engine using gasoline fuel',
            self::DIESEL => 'Diesel engine with higher torque and fuel efficiency',
            self::ELECTRIC => 'Fully electric vehicle powered by rechargeable batteries',
            self::HYBRID => 'Combines gasoline engine with electric motor',
            self::PLUG_IN_HYBRID => 'Hybrid with larger battery that can be charged from mains',
            self::LPG => 'Modified engine running on liquefied petroleum gas',
            self::CNG => 'Natural gas powered vehicle with lower emissions',
            self::HYDROGEN => 'Uses hydrogen fuel cells to generate electricity',
            self::ETHANOL => 'Runs on ethanol or ethanol-gasoline mixture',
            self::BIODIESEL => 'Uses biodiesel fuel made from renewable sources',
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::GASOLINE => 'gas-pump',
            self::DIESEL => 'oil-can',
            self::ELECTRIC => 'bolt',
            self::HYBRID => 'battery-half',
            self::PLUG_IN_HYBRID => 'plug',
            self::LPG => 'gas-pump',
            self::CNG => 'compress',
            self::HYDROGEN => 'atom',
            self::ETHANOL => 'leaf',
            self::BIODIESEL => 'seedling',
        };
    }

    public function environmentalImpact(): string
    {
        return match ($this) {
            self::GASOLINE => 'high',
            self::DIESEL => 'high',
            self::ELECTRIC => 'low',
            self::HYBRID => 'medium',
            self::PLUG_IN_HYBRID => 'medium-low',
            self::LPG => 'medium',
            self::CNG => 'medium-low',
            self::HYDROGEN => 'low',
            self::ETHANOL => 'medium-low',
            self::BIODIESEL => 'medium-low',
        };
    }

    public function averageRange(): int
    {
        return match ($this) {
            self::GASOLINE => 700,      // km
            self::DIESEL => 900,        // km
            self::ELECTRIC => 400,      // km
            self::HYBRID => 800,        // km
            self::PLUG_IN_HYBRID => 600,// km
            self::LPG => 500,          // km
            self::CNG => 400,          // km
            self::HYDROGEN => 500,      // km
            self::ETHANOL => 450,      // km
            self::BIODIESEL => 800,    // km
        };
    }

    public function refuelTime(): int
    {
        return match ($this) {
            self::GASOLINE => 5,        // minutes
            self::DIESEL => 5,          // minutes
            self::ELECTRIC => 30,       // minutes (fast charging)
            self::HYBRID => 5,          // minutes
            self::PLUG_IN_HYBRID => 20, // minutes
            self::LPG => 10,           // minutes
            self::CNG => 10,           // minutes
            self::HYDROGEN => 5,        // minutes
            self::ETHANOL => 5,        // minutes
            self::BIODIESEL => 5,      // minutes
        };
    }

    public function advantages(): array
    {
        return match ($this) {
            self::GASOLINE => [
                'Widely available fuel',
                'Good performance',
                'Lower initial cost',
                'Extensive service network',
            ],
            self::DIESEL => [
                'Better fuel efficiency',
                'Higher torque',
                'Longer engine life',
                'Better for long distances',
            ],
            self::ELECTRIC => [
                'Zero direct emissions',
                'Lower running costs',
                'Quiet operation',
                'Less maintenance required',
            ],
            self::HYBRID => [
                'Better fuel economy',
                'Lower emissions than conventional',
                'No range anxiety',
                'Regenerative braking',
            ],
            self::PLUG_IN_HYBRID => [
                'Electric-only capability',
                'Extended range with gas engine',
                'Lower emissions',
                'Flexible charging options',
            ],
            self::LPG => [
                'Lower fuel costs',
                'Reduced emissions',
                'Dual fuel capability',
                'Good availability',
            ],
            self::CNG => [
                'Lower emissions',
                'Cheaper fuel costs',
                'Safer in accidents',
                'Less engine wear',
            ],
            self::HYDROGEN => [
                'Zero emissions',
                'Quick refueling',
                'Long range',
                'Water as only byproduct',
            ],
            self::ETHANOL => [
                'Renewable fuel source',
                'Lower emissions',
                'High performance',
                'Supports agricultural economy',
            ],
            self::BIODIESEL => [
                'Renewable fuel source',
                'Lower emissions',
                'Better lubrication',
                'Biodegradable',
            ],
        };
    }

    public function requiresSpecialCharging(): bool
    {
        return in_array($this, [
            self::ELECTRIC,
            self::PLUG_IN_HYBRID,
            self::HYDROGEN,
        ]);
    }

    public function maintenanceCost(): string
    {
        return match ($this) {
            self::GASOLINE => 'medium',
            self::DIESEL => 'high',
            self::ELECTRIC => 'low',
            self::HYBRID => 'medium-high',
            self::PLUG_IN_HYBRID => 'medium-high',
            self::LPG => 'medium',
            self::CNG => 'medium',
            self::HYDROGEN => 'high',
            self::ETHANOL => 'medium',
            self::BIODIESEL => 'medium',
        };
    }

    public function fuelAvailability(): string
    {
        return match ($this) {
            self::GASOLINE => 'very_high',
            self::DIESEL => 'very_high',
            self::ELECTRIC => 'medium',
            self::HYBRID => 'very_high',
            self::PLUG_IN_HYBRID => 'high',
            self::LPG => 'medium',
            self::CNG => 'low',
            self::HYDROGEN => 'very_low',
            self::ETHANOL => 'medium',
            self::BIODIESEL => 'low',
        };
    }
}