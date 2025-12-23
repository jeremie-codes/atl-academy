<?php

namespace App\Filament\Widgets;

use App\Models\Formation;
use App\Models\Inscription;
use App\Models\Partenaire;
use Filament\Widgets\StatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends StatsOverviewWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Formations', Formation::count())
                ->icon('heroicon-o-academic-cap')
                ->chart([1, 1, 1])
                ->color('success'),

            Stat::make('Inscriptions', Inscription::count())
                ->icon('heroicon-o-academic-cap')
                ->chart([1, 1, 1])
                ->color('primary'),

            Stat::make('Partenaires', Partenaire::count())
                ->icon('heroicon-o-user-group')
                ->chart([1, 1, 1])
                ->color('success'),
        ];
    }
}
