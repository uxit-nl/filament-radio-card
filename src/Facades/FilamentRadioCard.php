<?php

namespace Uxit\FilamentRadioCard\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Uxit\FilamentRadioCard\FilamentRadioCard
 */
class FilamentRadioCard extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Uxit\FilamentRadioCard\FilamentRadioCard::class;
    }
}
