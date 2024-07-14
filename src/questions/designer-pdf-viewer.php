<?php
/*
 * https://www.hackerrank.com/challenges/designer-pdf-viewer/problem?isFullScreen=true
 *
 * Complete the 'designerPdfViewer' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY h
 *  2. STRING word
 */

function designerPdfViewer($h, $word) {
    // Write your code here

    $alphabetArray = array_flip(range('a', 'z'));

    $maxHeight = 0;
    $wordLength = strlen($word);

    for ($i = 0; $i < $wordLength ; $i++) {
        $charIndex = $alphabetArray[$word[$i]];
        if ($h[$charIndex] > $maxHeight) {
            $maxHeight = $h[$charIndex];
        }
    }

    return $maxHeight * $wordLength;

}