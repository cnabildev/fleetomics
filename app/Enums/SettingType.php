<?php

namespace App\Enums;

enum SettingType: string
{
    case GENERAL = 'general';
    case BOOKING = 'booking';
    case PAYMENT = 'payment';
    case NOTIFICATION = 'notification';
    case APPEARANCE = 'appearance';
    case INTEGRATION = 'integration';
    case POLICY = 'policy';
    case SECURITY = 'security';
    case LOCALIZATION = 'localization';

    public function label(): string
    {
        return match ($this) {
            self::GENERAL => 'General Settings',
            self::BOOKING => 'Booking Settings',
            self::PAYMENT => 'Payment Settings',
            self::NOTIFICATION => 'Notification Settings',
            self::APPEARANCE => 'Appearance Settings',
            self::INTEGRATION => 'Integration Settings',
            self::POLICY => 'Policy Settings',
            self::SECURITY => 'Security Settings',
            self::LOCALIZATION => 'Localization Settings',
        };
    }

    public function defaultSettings(): array
    {
        return match ($this) {
            self::GENERAL => [
                'company_name' => '',
                'contact_email' => '',
                'contact_phone' => '',
                'timezone' => 'UTC',
                'date_format' => 'Y-m-d',
                'time_format' => 'H:i',
            ],
            self::BOOKING => [
                'minimum_rental_period' => '24',
                'maximum_rental_period' => '30',
                'advance_booking_period' => '48',
                'cancellation_period' => '24',
                'allow_multiple_bookings' => false,
                'require_driving_license' => true,
            ],
            self::PAYMENT => [
                'currency' => 'EUR',
                'tax_rate' => '20',
                'deposit_required' => true,
                'deposit_percentage' => '25',
                'payment_methods' => ['card', 'bank_transfer'],
                'minimum_deposit_amount' => '100',
            ],
            self::NOTIFICATION => [
                'booking_confirmation' => true,
                'booking_reminder' => true,
                'payment_reminder' => true,
                'email_notifications' => true,
                'sms_notifications' => false,
                'reminder_days_before' => '2',
            ],
            self::APPEARANCE => [
                'primary_color' => '#007bff',
                'secondary_color' => '#6c757d',
                'logo_url' => '',
                'favicon_url' => '',
                'enable_dark_mode' => false,
                'default_language' => 'en',
            ],
            self::INTEGRATION => [
                'google_analytics_id' => '',
                'google_maps_key' => '',
                'stripe_public_key' => '',
                'stripe_secret_key' => '',
                'smtp_host' => '',
                'smtp_port' => '',
            ],
            self::POLICY => [
                'terms_url' => '',
                'privacy_url' => '',
                'cancellation_policy' => '',
                'insurance_required' => true,
                'minimum_driver_age' => '21',
                'deposit_refund_policy' => '',
            ],
            self::SECURITY => [
                'two_factor_auth' => false,
                'password_expiry_days' => '90',
                'session_timeout' => '120',
                'failed_login_attempts' => '5',
                'ip_whitelist' => [],
                'require_strong_password' => true,
            ],
            self::LOCALIZATION => [
                'default_language' => 'en',
                'available_languages' => ['en', 'fr', 'es'],
                'default_currency' => 'EUR',
                'date_format' => 'Y-m-d',
                'time_format' => 'H:i',
                'first_day_of_week' => '1',
            ],
        };
    }

    public function icon(): string
    {
        return match ($this) {
            self::GENERAL => 'cog',
            self::BOOKING => 'calendar',
            self::PAYMENT => 'credit-card',
            self::NOTIFICATION => 'bell',
            self::APPEARANCE => 'paint-brush',
            self::INTEGRATION => 'plug',
            self::POLICY => 'shield',
            self::SECURITY => 'lock',
            self::LOCALIZATION => 'globe',
        };
    }

    public function description(): string
    {
        return match ($this) {
            self::GENERAL => 'Basic company information and general settings',
            self::BOOKING => 'Configure booking rules and restrictions',
            self::PAYMENT => 'Payment methods and financial settings',
            self::NOTIFICATION => 'Email and SMS notification preferences',
            self::APPEARANCE => 'Customize the look and feel of your platform',
            self::INTEGRATION => 'Third-party service integration settings',
            self::POLICY => 'Company policies and legal requirements',
            self::SECURITY => 'Security and authentication settings',
            self::LOCALIZATION => 'Language and regional settings',
        };
    }
}