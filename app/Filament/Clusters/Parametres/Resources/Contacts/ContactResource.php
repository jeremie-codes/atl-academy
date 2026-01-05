<?php

namespace App\Filament\Clusters\Parametres\Resources\Contacts;

use App\Filament\Clusters\Parametres\ParametresCluster;
use App\Filament\Clusters\Parametres\Resources\Contacts\Pages\CreateContact;
use App\Filament\Clusters\Parametres\Resources\Contacts\Pages\EditContact;
use App\Filament\Clusters\Parametres\Resources\Contacts\Pages\ListContacts;
use App\Filament\Clusters\Parametres\Resources\Contacts\Schemas\ContactForm;
use App\Filament\Clusters\Parametres\Resources\Contacts\Tables\ContactsTable;
use App\Models\Contact;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ContactResource extends Resource
{
    protected static ?string $model = Contact::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedPhone;

    protected static ?string $cluster = ParametresCluster::class;

    protected static ?string $recordTitleAttribute = 'Contacts';

    public static function form(Schema $schema): Schema
    {
        return ContactForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ContactsTable::configure($table);
    }

      public static function canCreate(): bool
    {
        return Contact::count() < 1 ? true : false;
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
            'index' => ListContacts::route('/'),
            'create' => CreateContact::route('/create'),
            'edit' => EditContact::route('/{record}/edit'),
        ];
    }
}
