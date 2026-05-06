<?php

namespace Bespin\DataValidation\Shared;

use Bespin\DataValidation\Country;

interface FormatterInterface
{
    public static function convertToHumanReadable(string $input, Country $country, bool $isMachineReadable = false): string;

    public static function convertToMachineReadable(string $input, bool $isMachineReadable = false): string;
}