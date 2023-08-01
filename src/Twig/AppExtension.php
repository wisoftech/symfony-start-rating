<?php

namespace Symfony\StarRatingBundle\Twig;

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
        $note = $note<0?0:$note;
        $note = $note>5?5:$note;
        return '
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 24" width="160">
                <symbol id="star">
                    <polygon fill="white" points="19.63,7.39,18.58,7.23,17.53,7.06,16.48,6.9,15.77,6.29,15.32,5.33,14.87,4.37,14.42,3.41,13.74,2.6,12.8,2.12,11.75,2.01,10.74,2.3,9.91,2.95,9.36,3.86,8.92,4.82,8.47,5.78,8.02,6.75,7.03,6.98,5.98,7.14,4.93,7.3,3.89,7.51,2.97,8.03,2.32,8.86,2.02,9.87,2.1,10.93,2.56,11.87,3.28,12.65,4.02,13.41,4.76,14.18,5.49,14.94,5.33,15.99,5.16,17.04,4.99,18.08,4.85,19.13,5.03,20.17,5.58,21.07,6.42,21.71,7.44,21.99,8.49,21.86,9.44,21.39,10.36,20.88,11.29,20.36,12.22,20.09,13.15,20.6,14.07,21.12,15,21.64,16,21.98,17.05,21.91,18,21.45,18.72,20.68,19.1,19.69,19.09,18.64,18.92,17.59,18.76,16.54,18.59,15.49,18.85,14.58,19.59,13.82,20.33,13.06,21.06,12.29,21.7,11.45,21.99,10.43,21.88,9.38,21.41,8.44,20.62,7.74"></polygon>
                </symbol>
                <mask id="stars">
                    <use href="#star" transform="translate(0 0)"/>
                    <use href="#star" transform="translate(24 0)"/>
                    <use href="#star" transform="translate(48 0)"/>
                    <use href="#star" transform="translate(72 0)"/>
                    <use href="#star" transform="translate(96 0)"/>
                </mask>
                <rect x="0" y="0" width="100%" height="100%" fill="#cccccc" mask="url(#stars)" />
                <rect x="0" y="0" width="'.(($note*100)/5).'%" height="100%" fill="#ea5a23" mask="url(#stars)" />
            </svg>
        ';
    }
    
}
