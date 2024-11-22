<?php

namespace ArdaGnsrn\Macronome\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \ArdaGnsrn\Macronome\Macronome
 */
class Macronome extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \ArdaGnsrn\Macronome\Macronome::class;
    }
}
