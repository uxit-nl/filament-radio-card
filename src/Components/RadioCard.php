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

    protected array $borderColors = ['default' => '#d4d4d8', 'selected' => '#3540e6'];

    protected string $wireModel;

    protected string $view = 'filament-radio-card::radio-card';

    protected string $contentView = 'filament-radio-card::card-content';

    protected string $maxCardWidth = "300px";

    public function borderColors(array $colors = ['default' => '#d4d4d8', 'selected' => '#3540e6'])
    {
        $this->borderColors = $colors;

        return $this;
    }

    public function getBorderColors(): array
    {
        return $this->borderColors;
    }

    // public function maxCardWidth(string $width)
    // {
    //     $this->maxCardWidth = $width;

    //     return $this;
    // }

    // public function getMaxCardWidth()
    // {
    //     return $this->maxCardWidth;
    // }

    // public function cardColumns(int $columns)
    // {
    //     $this->cardColumns = $columns;

    //     return $this;
    // }

    // public function getCardColumns()
    // {
    //     if (empty($this->cardColumns)) {
    //         $this->cardColumns = count($this->getOptions());
    //     }

    //     return $this->cardColumns;
    // }

    // public function getRowSpan()
    // {
    //     return max(array_map('count', $this->getOptions())) - 2;
    // }
}
