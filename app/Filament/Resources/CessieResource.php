<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CessieResource\Pages;
use App\Filament\Resources\CessieResource\RelationManagers;
use App\Models\Cessie;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class CessieResource extends Resource
{
    protected static ?string $model = Cessie::class;

    protected static ?string $navigationIcon = 'heroicon-o-arrow-path-rounded-square';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()->schema(
                    [
                        Forms\Components\SpatieMediaLibraryFileUpload::make('thumb')
                            ->collection('thumb'),
                        Forms\Components\SpatieMediaLibraryFileUpload::make('gallery')
                            ->collection('gallery')
                            ->multiple(),
                        Forms\Components\TextInput::make('name')
                            ->label('Nama Property')
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (Forms\Set $set, ?string $state) => $set('slug', Str::slug($state))),
                        Forms\Components\TextInput::make('slug')
                            ->unique(ignoreRecord: true)
                            ->readonly(),
                        Forms\Components\TextInput::make('code')
                            ->unique(ignoreRecord: true),
                        Forms\Components\SpatieTagsInput::make('tags')
                            ->label('Tipe')
                            ->placeholder('Tipe Properti')
                            ->type('collection'),
                        Forms\Components\MarkdownEditor::make('description'),
                        Forms\Components\TextInput::make('alamat'),
                        Forms\Components\TextInput::make('region')
                            ->label('Wilayah'),
                        Forms\Components\TextInput::make('luas')
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('region'),
                Tables\Columns\TextColumn::make('luas'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
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
            'index' => Pages\ListCessies::route('/'),
            'create' => Pages\CreateCessie::route('/create'),
            'edit' => Pages\EditCessie::route('/{record}/edit'),
        ];
    }
}
