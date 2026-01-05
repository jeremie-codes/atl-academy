<?php

namespace App\Filament\Clusters\Parametres\Resources\Valeurs;

use App\Filament\Clusters\Parametres\ParametresCluster;
use App\Filament\Clusters\Parametres\Resources\Valeurs\Pages\CreateValeurs;
use App\Filament\Clusters\Parametres\Resources\Valeurs\Pages\EditValeurs;
use App\Filament\Clusters\Parametres\Resources\Valeurs\Pages\ListValeurs;
use App\Filament\Clusters\Parametres\Resources\Valeurs\Schemas\ValeursForm;
use App\Filament\Clusters\Parametres\Resources\Valeurs\Tables\ValeursTable;
use App\Models\Valeur;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ValeursResource extends Resource
{
    protected static ?string $model = Valeur::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $cluster = ParametresCluster::class;

    protected static ?string $recordTitleAttribute = 'Valeurs';

    public static function form(Schema $schema): Schema
    {
        return ValeursForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ValeursTable::configure($table);
    }

    public static function canCreate(): bool
    {
        return Valeur::count() < 3;
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListValeurs::route('/'),
            'create' => CreateValeurs::route('/create'),
            'edit' => EditValeurs::route('/{record}/edit'),
        ];
    }
}
