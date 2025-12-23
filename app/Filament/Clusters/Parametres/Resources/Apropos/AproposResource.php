<?php

namespace App\Filament\Clusters\Parametres\Resources\Apropos;

use App\Filament\Clusters\Parametres\ParametresCluster;
use App\Filament\Clusters\Parametres\Resources\Apropos\Pages\CreateApropos;
use App\Filament\Clusters\Parametres\Resources\Apropos\Pages\EditApropos;
use App\Filament\Clusters\Parametres\Resources\Apropos\Pages\ListApropos;
use App\Filament\Clusters\Parametres\Resources\Apropos\Schemas\AproposForm;
use App\Filament\Clusters\Parametres\Resources\Apropos\Tables\AproposTable;
use App\Models\Apropos;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AproposResource extends Resource
{
    protected static ?string $model = Apropos::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedInformationCircle;

    protected static ?string $cluster = ParametresCluster::class;

    protected static ?string $recordTitleAttribute = 'Apropos';

    public static function form(Schema $schema): Schema
    {
        return AproposForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AproposTable::configure($table);
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
            'index' => ListApropos::route('/'),
            'create' => CreateApropos::route('/create'),
            'edit' => EditApropos::route('/{record}/edit'),
        ];
    }
}
