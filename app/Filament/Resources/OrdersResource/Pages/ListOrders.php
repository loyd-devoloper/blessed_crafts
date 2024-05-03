<?php

namespace App\Filament\Resources\OrdersResource\Pages;

use App\Filament\Resources\OrdersResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;

class ListOrders extends ListRecords
{
    protected static string $resource = OrdersResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
            'all'=>Tab::make('All'),
            'Pending'=>Tab::make('Processing')->icon('heroicon-o-arrow-path'),
            'Approved'=>Tab::make('Shipped')->icon('heroicon-o-truck'),
            'Delivered'=>Tab::make('Delivered')->icon('heroicon-o-check-badge'),
            'Cancelled'=>Tab::make('Cancelled')->icon('heroicon-o-x-circle'),
        ];
    }
}
