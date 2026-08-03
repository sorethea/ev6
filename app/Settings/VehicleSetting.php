<?php

namespace App\Settings;

use VanOns\FilamentSettings\Classes\Settings;

class VehicleSetting extends Settings
{
    public string $settingsName = 'vehicle';

    /**
     * @return array<string, mixed>
     */
    public function defaults(): array
    {
        return [
            //
        ];
    }
}
