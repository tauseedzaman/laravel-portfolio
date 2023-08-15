<?php

namespace App\Filament\Resources\TechStackResource\Pages;

use App\Filament\Resources\TechStackResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTechStack extends EditRecord
{
    protected static string $resource = TechStackResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
