<?php

namespace LaraZeus\Bolt\Fields\Classes;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use LaraZeus\Bolt\Fields\FieldsContract;
use LaraZeus\Bolt\Models\Collection;

class Radio extends FieldsContract
{
    public $renderClass = '\Filament\Forms\Components\Radio';
    public $sort = 4;

    public function title()
    {
        return __('Radio');
    }

    public static function getOptions()
    {
        return [
            Select::make('options.dataSource')->required()->options(Collection::pluck('name', 'id'))->label(__('Data Source'))->columnSpan(2),
            Toggle::make('options.is_required')->label(__('Is Required')),
            Toggle::make('options.is_inline')->label(__('Is inline')),
        ];
    }
}
