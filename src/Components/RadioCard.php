<?php

namespace Uxit\FilamentRadioCard\Components;

use Closure;
use Filament\Forms\Components\Radio;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Htmlable;

class RadioCard extends Radio
{
    protected array|Arrayable|Closure $images = [];

    protected int $cardColumns;

    protected string $borderColor;

    protected string $view = 'filament-radio-card::radio-card';

    public function borderColor(string $color = 'var(--primary-500)')
    {
        $this->borderColor = $color;

        return $this;
    }

    public function getBorderColor()
    {
        if (empty($this->borderColor)) {
            $this->borderColor = '#e4e4e7';
        }
        return $this->borderColor;
    }

    public function cardColumns(int $columns)
    {
        $this->cardColumns = $columns;

        return $this;
    }

    public function getCardColumns()
    {
        if (empty($this->cardColumns)) {
            $this->cardColumns = 5;
        }

        return $this->cardColumns;
    }
}
