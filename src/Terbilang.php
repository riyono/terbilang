<?php

namespace Riyono;

/*
 * Number spelling in Indonesian language, for huge numbers too.
 *
 * Most PHP libraries I seen (as of the time of writing) only deals with
 * numbers up to 10^12 (triliun). What if you need to convert numbers
 * as big as 20988936657440586486151264256610222593863921 to words?
 */

class Terbilang
{
    public static function convert($number)
    {
        if (empty($number)) {
            return 'nol';
        }

        $powers = [3 => 'ribu', 6 => 'juta', 9 => 'miliar', 12 => 'triliun',
                   15 => 'kuadriliun', 18 => 'kuintiliun', 21 => 'sekstiliun',
                   24 => 'septiliun', 27 => 'oktiliun', 30 => 'noniliun',
                   33 => 'desiliun', 36 => 'undesiliun', 39 => 'duodesiliun',
                   42 => 'tredesiliun', 45 => 'kuatordesiliun',
                   48 => 'kuindesiliun', 51 => 'sedesiliun',
                   54 => 'septendesiliun', 57 => 'oktodesiliun',
                   60 => 'novemdesiliun', 63 => 'vigintiliun',
                   66 => 'unvigintiliun', 69 => 'duovigintiliun',
                   72 => 'trevigintiliun', 75 => 'kuatorvigintiliun',
                   78 => 'kuinvigintiliun', 81 => 'sesvigintiliun',
                   84 => 'septemvigintiliun', 87 => 'oktovigintiliun',
                   90 => 'novemvigintiliun', 93 => 'trigintiliun',
        ];

        $elements = [];

        $length = strlen($number);

        if ($length % 3) {
            $number = str_repeat('0', 3 - ($length % 3)) . $number;
        }

        $chunks = str_split($number, 3);

        $power = 3 * count($chunks);

        foreach ($chunks as $n => $chunk) {
            $power -= 3;

            if (0 == $chunk) {
                continue;
            }

            if (0 == $power) {
                $elements = array_merge(
                    $elements,
                    self::processChunk($chunk)
                );
            } elseif (1 == $chunk && 3 == $power && 4 == $length) {
                $elements = array_merge(
                    $elements,
                    ['seribu']
                );
            } else {
                $elements = array_merge(
                    $elements,
                    self::processChunk($chunk),
                    [$powers[$power]]
                );
            }
        }

        return implode(' ', $elements);
    }

    private static function processChunk($chunk)
    {
        $elements = [];
        $hundreds = floor($chunk / 100);
        $tens = floor(($chunk % 100) / 10);
        $ones = $chunk % 10;

        $lookup = [1 => 'satu', 'dua', 'tiga', 'empat', 'lima', 'enam',
                   'tujuh', 'delapan', 'sembilan'
        ];

        if (1 == $hundreds) {
            $elements[] = 'seratus';
        } elseif (2 <= $hundreds) {
            $elements[] = $lookup[$hundreds];
            $elements[] = 'ratus';
        }

        if (0 == $tens && 1 <= $ones) {
            $elements[] = $lookup[$ones];
        }

        if (1 == $tens) {
            if (2 <= $ones) {
                $elements[] = $lookup[$ones];
                $elements[] = 'belas';
            } elseif (1 == $ones) {
                $elements[] = 'sebelas';
            } elseif (0 == $ones) {
                $elements[] = 'sepuluh';
            }
        }

        if (2 <= $tens) {
            $elements[] = $lookup[$tens];
            $elements[] = 'puluh';
            if (1 <= $ones) {
                $elements[] = $lookup[$ones];
            }
        }

        return $elements;
    }
}
