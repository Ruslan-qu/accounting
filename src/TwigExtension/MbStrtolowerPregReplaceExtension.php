<?php

namespace App\TwigExtension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class MbStrtolowerPregReplaceExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('lowerReplace', [$this, 'lowerReplace']),
        ];
    }

    public function lowerReplace(string $string): string
    {
        //dd($string);
        $stringFilter = mb_strtolower(preg_replace('#[^a-zа-яё\d]#ui', '', $string));

        return $stringFilter;
    }
}
