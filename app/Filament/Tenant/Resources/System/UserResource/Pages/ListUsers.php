<?php

namespace App\Filament\Tenant\Resources\System\UserResource\Pages;

use App\Filament\Tenant\Resources\System\UserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListUsers extends ListRecords
{
    protected static string $resource = UserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
