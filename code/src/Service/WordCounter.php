<?php

namespace App\Service;

class WordCounter
{
    public function wordsPerMinuteCalculator(string $rawText) : int
    {
        $words = explode(' ', $rawText);
        $wordsCount = 0;

        foreach($words as $word){
            if(strlen($word) > 3){
                $wordsCount ++;
            }
            $result = round($wordsCount / 200);
        }
        return $result;

    }
}