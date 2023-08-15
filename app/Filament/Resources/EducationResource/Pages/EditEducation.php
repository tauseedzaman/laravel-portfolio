<?php

namespace App\Filament\Resources\EducationResource\Pages;

use App\Filament\Resources\EducationResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEducation extends EditRecord
{
    protected static string $resource = EducationResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
