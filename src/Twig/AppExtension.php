<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFilters(): array
    {
        return [
            new TwigFilter('star_rating', array($this, 'starRating'))
        ];
    }

    public function starRating(float $note)  : string {
        return "ok";
    }
    
}
