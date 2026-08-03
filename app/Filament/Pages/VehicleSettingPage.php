<?php

namespace App\Filament\Pages;

use App\Settings\VehicleSetting;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use VanOns\FilamentSettings\Filament\Pages\SettingsPage;

class VehicleSettingPage extends SettingsPage
{
    protected static ?string $title = 'My Vehicle';
    protected string $settingsClass = VehicleSetting::class;

    public function getFormSchema(): array
    {
        return [
            Section::make('Settings')
                ->columnSpanFull()
                ->schema([
                    TextInput::make("make")
                        ->label(trans('ev.make'))
                        ->required(),
                ]),
        ];
    }
}
