<?php

namespace App\Filament\Resources\CategoryResource\RelationManagers;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Resources\RelationManagers\RelationManager;

class ProductsRelationManager extends RelationManager
{
    protected static string $relationship = 'products';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('category_id')
                    ->required()
                    ->relationship('category', 'name')
                    ->preload(),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('category_id')
            ->columns([
                Tables\Columns\TextColumn::make('category_id'),
                TextColumn::make('name'),
                TextColumn::make('slug')->limit(10),
                TextColumn::make('price')
                    ->prefix('$'),
                // TextColumn::make('discount_price'),
                // TextColumn::make('quantity'),
                TextColumn::make('sku'),
                TextColumn::make('description')->limit(15),
                IconColumn::make('is_active')
                ->boolean(),
                IconColumn::make('is_featured')
                ->boolean(),
                IconColumn::make('is_bestseller')
                ->boolean(),
                IconColumn::make('is_new')
                ->boolean(),
                IconColumn::make('is_top')
                ->boolean(),
                IconColumn::make('is_sale')
                ->boolean(),
                IconColumn::make('is_hot')
                ->boolean(),
                IconColumn::make('is_available')
                ->boolean(),
                IconColumn::make('is_in_stock')
                ->boolean(),
                IconColumn::make('is_out_of_stock')
                ->boolean(),
                IconColumn::make('is_upcoming')
                ->boolean(),
                IconColumn::make('is_exclusive')
                ->boolean(),
                IconColumn::make('is_trending')
                ->boolean(),
                IconColumn::make('is_discount')
                ->boolean(),
                IconColumn::make('is_taxable')
                ->boolean(),
                IconColumn::make('is_promoted')
                ->boolean(),
                IconColumn::make('is_verified')
                ->boolean(),
                IconColumn::make('is_approved')
                ->boolean(),
                IconColumn::make('is_draft')
                ->boolean(),
                IconColumn::make('is_published')
                ->boolean(),
                IconColumn::make('is_private')
                ->boolean(),
                IconColumn::make('is_recommended')
                ->boolean(),
                IconColumn::make('is_popular')
                ->boolean(),
                TextColumn::make('barcode'),
                TextColumn::make('mpn'),
                TextColumn::make('gtin'),
                TextColumn::make('model'),
                TextColumn::make('image'),
                TextColumn::make('images'),
                TextColumn::make('thumbnail'),
                TextColumn::make('gallery'),
                TextColumn::make('video'),
                TextColumn::make('pdf'),
                TextColumn::make('slug'),
                TextColumn::make('meta_title'),
                TextColumn::make('meta_description'),
                TextColumn::make('meta_keywords'),
                TextColumn::make('created_at'),
                TextColumn::make('updated_at'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                // Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
}
