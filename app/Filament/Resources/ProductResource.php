<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('tag_id')
                ->relationship('tag', 'name')
                ->preload()
                ->multiple(),
                Select::make('category_id')
                ->relationship('category', 'name')
                ->preload(),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('short_description')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('price')
                    ->required()
                    ->numeric()
                    ->default(0)
                    ->prefix('$'),
                Forms\Components\TextInput::make('sale_price')
                    ->numeric(),
                Forms\Components\Toggle::make('is_active')
                    ->required(),
                Forms\Components\Toggle::make('is_featured')
                    ->required(),
                Forms\Components\Toggle::make('is_bestseller')
                    ->required(),
                Forms\Components\Toggle::make('is_new')
                    ->required(),
                Forms\Components\Toggle::make('is_top')
                    ->required(),
                Forms\Components\Toggle::make('is_sale')
                    ->required(),
                Forms\Components\Toggle::make('is_hot')
                    ->required(),
                Forms\Components\Toggle::make('is_available')
                    ->required(),
                Forms\Components\Toggle::make('is_in_stock')
                    ->required(),
                Forms\Components\Toggle::make('is_out_of_stock')
                    ->required(),
                Forms\Components\Toggle::make('is_upcoming')
                    ->required(),
                Forms\Components\Toggle::make('is_exclusive')
                    ->required(),
                Forms\Components\Toggle::make('is_trending')
                    ->required(),
                Forms\Components\Toggle::make('is_discount')
                    ->required(),
                Forms\Components\Toggle::make('is_taxable')
                    ->required(),
                Forms\Components\Toggle::make('is_promoted')
                    ->required(),
                Forms\Components\Toggle::make('is_verified')
                    ->required(),
                Forms\Components\Toggle::make('is_approved')
                    ->required(),
                Forms\Components\Toggle::make('is_draft')
                    ->required(),
                Forms\Components\Toggle::make('is_published')
                    ->required(),
                Forms\Components\Toggle::make('is_private')
                    ->required(),
                Forms\Components\Toggle::make('is_recommended')
                    ->required(),
                Forms\Components\Toggle::make('is_popular')
                    ->required(),
                Forms\Components\TextInput::make('sku')
                    ->label('SKU')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('barcode')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('mpn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gtin')
                    ->maxLength(255),
                Forms\Components\TextInput::make('model')
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->image(),
                Forms\Components\TextInput::make('images')
                    ->maxLength(255),
                Forms\Components\TextInput::make('thumbnail')
                    ->maxLength(255),
                Forms\Components\TextInput::make('gallery')
                    ->maxLength(255),
                Forms\Components\TextInput::make('video')
                    ->maxLength(255),
                Forms\Components\TextInput::make('pdf')
                    ->maxLength(255),
                Forms\Components\TextInput::make('slug')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_title')
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_description')
                    ->maxLength(255),
                Forms\Components\TextInput::make('meta_keywords')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('tag_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('category_id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('price')
                    ->money()
                    ->sortable(),
                Tables\Columns\TextColumn::make('sale_price')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\IconColumn::make('is_active')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_featured')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_bestseller')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_new')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_top')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_sale')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_hot')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_available')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_in_stock')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_out_of_stock')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_upcoming')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_exclusive')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_trending')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_discount')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_taxable')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_promoted')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_verified')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_approved')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_draft')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_published')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_private')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_recommended')
                    ->boolean(),
                Tables\Columns\IconColumn::make('is_popular')
                    ->boolean(),
                Tables\Columns\TextColumn::make('sku')
                    ->label('SKU')
                    ->searchable(),
                Tables\Columns\TextColumn::make('barcode')
                    ->searchable(),
                Tables\Columns\TextColumn::make('mpn')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gtin')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('images')
                    ->searchable(),
                Tables\Columns\TextColumn::make('thumbnail')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gallery')
                    ->searchable(),
                Tables\Columns\TextColumn::make('video')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pdf')
                    ->searchable(),
                Tables\Columns\TextColumn::make('slug')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_description')
                    ->searchable(),
                Tables\Columns\TextColumn::make('meta_keywords')
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            RelationManagers\TagRelationManager::class,
            RelationManagers\CategoryRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'view' => Pages\ViewProduct::route('/{record}'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
