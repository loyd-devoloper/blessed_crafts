<?php

namespace App\Filament\Resources\ProductResource\Pages;

use Filament\Actions;
use Nette\Utils\Html;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Product_attribute;
use Illuminate\Support\HtmlString;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProductResource;
use App\Models\Category;
use Filament\Forms\Components\MarkdownEditor;

class CreateProduct extends CreateRecord
{
    protected static string $resource = ProductResource::class;
    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function handleRecordCreation(array $data): Model
    {

        $product = Product::create([
            'product_name'=>$data['product_name'],
            'quantity'=>$data['quantity'],
            'description'=>$data['description'],
            'category_id'=>$data['category_id'],
        ]);
        foreach($data['images'] as $image)
        {
            Product_image::create([
                'product_id'=>$product->id,
                'image'=>$image
            ]);
        }
        foreach($data['selectColor'] as $color)
        {
            Product_attribute::create([
                'product_id'=>$product->id,
                'color'=>$color
            ]);
        }
       return $product;
        // return static::getModel()::create($data);
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
                FileUpload::make('images')->multiple()->directory('product')->required()
            ]),
            Section::make('Color')->schema([
                Select::make('selectColor')
                ->native(false)
                ->allowHtml()
                ->options([

                    'red'=>'<span style="color: red">red</span>',
                    'blue'=>'<span style="color: blue">blue</span>',
                    'green'=>'<span style="color: green">green</span>',
                    'pink'=>'<span style="color: pink">pink</span>',


                ])->multiple()->required()
            ]),
        ]);
    }
}
