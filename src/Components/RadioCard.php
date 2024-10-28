<?php

namespace Uxit\FilamentRadioCard\Components;

use Closure;
use Filament\Forms\Components\Radio;
use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Htmlable;

class RadioCard extends Radio
{
    protected int $cardColumns;

    protected string $wireModel;

    protected array $borderColors = ['default' => '#d4d4d8', 'selected' => '#3540e6'];

    protected string $view = 'filament-radio-card::radio-card';

    protected string $contentView = 'filament-radio-card::card-content';

    protected string $maxCardWidth = "300px";

    public function borderColors(array|null $colors)
    {
        $this->borderColors = $colors;

        return $this;
    }

    public function getBorderColors(): array
    {
        return $this->borderColors;
    }

    public function contentView(null|string $view = null)
    {
        $this->contentView = $view;

        return $this;
    }

    public function getContentView(): string
    {
        return $this->contentView;
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
