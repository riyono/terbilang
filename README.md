# Terbilang

Number spelling in the Indonesian language, for huge numbers too.

Most PHP libraries I have seen (as of the time of writing) can only convert
 * numbers up to 10^12 (triliun). What if we need to spell out huge number,
 * like 20988936657440586486151264256610222593863921 (a 44 digit prime)?

Terbilang::convert("20988936657440586486151264256610222593863921");
=> "dua puluh tredesiliun sembilan ratus delapan puluh delapan duodesiliun sembilan ratus tiga puluh enam undesiliun enam ratus lima puluh tujuh desiliun empat ratus empat puluh noniliun lima ratus delapan puluh enam oktiliun empat ratus delapan puluh enam septiliun seratus lima puluh satu sekstiliun dua ratus enam puluh empat kuintiliun dua ratus lima puluh enam kuadriliun enam ratus sepuluh triliun dua ratus dua puluh dua miliar lima ratus sembilan puluh tiga juta delapan ratus enam puluh tiga ribu sembilan ratus dua puluh satu"
