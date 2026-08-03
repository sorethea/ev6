<?php

namespace App\Filament\Pages;

use App\Settings\VehicleSetting;
use BackedEnum;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Support\Icons\Heroicon;
use VanOns\FilamentSettings\Filament\Pages\SettingsPage;

class VehicleSettingPage extends SettingsPage
{
    protected static ?string $title = 'My Vehicle';
    protected string $settingsClass = VehicleSetting::class;

    protected static string | BackedEnum | null $navigationIcon = Heroicon::Truck;

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
