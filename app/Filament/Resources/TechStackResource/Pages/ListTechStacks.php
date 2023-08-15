<?php

namespace App\Filament\Resources\TechStackResource\Pages;

use App\Filament\Resources\TechStackResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTechStacks extends ListRecords
{
    protected static string $resource = TechStackResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
