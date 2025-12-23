<?php

namespace App\Filament\Clusters\Parametres;

use BackedEnum;
use Filament\Clusters\Cluster;
use Filament\Support\Icons\Heroicon;

class ParametresCluster extends Cluster
{
    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Paramètres';

    protected static ?int $navigationSort = 5;
}
