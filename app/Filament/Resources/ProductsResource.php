<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Filament\Resources\ProductsResource\RelationManagers;
use App\Models\Products;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Group;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Group::make()->schema([
                    Section::make('Новый продукт')->schema([
                        TextInput::make('title')
                            ->label('Название продукта')
                            ->required()
                            ->placeholder('Black and white sport cap'),
                        TextInput::make('description')
                            ->label('Описание продукта')
                            ->required(),
                        Group::make()->schema([
                            TextInput::make('price')
                                ->label('Цена продукта')
                                ->required(),
                            Toggle::make('is_active')
                                ->label('Активный продукт')
                                ->default(true)
                        ])
                    ]),
                    Section::make()->schema([
                        FileUpload::make('image')
                            ->required()
                            ->label('Изображение продукта')
                            ->directory('product')
                            ->image()
                    ]),
                    Section::make()->schema([
                        Select::make('category_id')
                            ->required()
                            ->preload()
                            ->searchable()
                            ->label('Категория')
                            ->relationship('category', 'title')
                    ])
                ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
