<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class CustomFunction extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('marks', [$this, 'marksContainer']),
            new TwigFunction('absenceType', [$this, 'absenceType']),
        ];
    }

    public function marksContainer(string $marks, string $shortCut, string $weight, string $teacher): string
    {
        if(preg_match("/(\d)(.75)/",$marks)){
            $marks = (int) $marks;
            $marks++;
            $marks .= "-";
        }
        if(preg_match("/(\d)(.5)/",$marks)){
            $marks = (int) $marks;
            $marks .= "+";
        }
        return "<div class=\"marks weight$weight\">
            $marks
            <span class=\"marksTooltip\">
                Skrót: $shortCut <br />
                Waga: $weight <br />
                Nauczyciel: $teacher</span></div>";
    }    
    public function absenceType(string $typ){
        $tab = array(
            'NB' => 'Nieobecność',
            'SP' => 'Spóźnienie',
            'OB' => 'Obecność'
        );
        return $tab[$typ];
    }
}