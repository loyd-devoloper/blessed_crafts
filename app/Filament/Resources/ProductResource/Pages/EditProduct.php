<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use App\Models\Category;
use App\Models\Product_image;
use App\Models\Product_attribute;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\EditRecord;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use App\Filament\Resources\ProductResource;

class EditProduct extends EditRecord
{
    protected static string $resource = ProductResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
    protected function mutateFormDataBeforeFill(array $data): array
    {




        $colors = Product_attribute::select('color')->where('product_id', $data['id'])->pluck('color')->toArray();

        $data['selectColor'] = $colors;
        $images = Product_image::select('image')->where('product_id', $data['id'])->pluck('image')->toArray();

        $data['images'] = $images;
        return $data;
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {

        $record->update([
            'product_name'=>$data['product_name'],
            'quantity'=>$data['quantity'],
            'description'=>$data['description'],
            'category_id'=>$data['category_id'],
        ]);
        Product_image::where('product_id',$record->id)->delete();
        foreach($data['images'] as $image)
        {
            Product_image::create([
                'product_id'=>$record->id,
                'image'=>$image
            ]);
        }
        Product_attribute::where('product_id',$record->id)->delete();
        foreach($data['selectColor'] as $color)
        {
            Product_attribute::create([
                'product_id'=>$record->id,
                'color'=>$color
            ]);
        }
        return $record;
    }
    public function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('product_name')->required(),
                TextInput::make('quantity')->required(),
                Select::make('category_id')->options(Category::all()->pluck('name','id'))->columnSpanFull()->required(),
                RichEditor::make('description')->columnSpanFull(),
                Section::make('Product Image')->schema([
                    FileUpload::make('images')->multiple()
                ]),
                Section::make('Color')->schema([
                    Select::make('selectColor')
                        ->native(false)
                        ->allowHtml()
                        ->options([

                            'red' => '<span style="color: red">red</span>',
                            'blue' => '<span style="color: blue">blue</span>',
                            'green' => '<span style="color: green">green</span>',
                            'pink' => '<span style="color: pink">pink</span>',


                        ])->multiple()->required()
                ]),
            ]);
    }
}
