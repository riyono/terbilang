<?php

namespace spec\Riyono;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class TerbilangSpec extends ObjectBehavior
{
    public function it_return_nol_for_0()
    {
        $this::convert(0)->shouldReturn('nol');
    }
    public function it_return_satu_for_1()
    {
        $this::convert(1)->shouldReturn('satu');
    }
    public function it_return_dua_for_2()
    {
        $this::convert(2)->shouldReturn('dua');
    }
    public function it_return_tiga_for_3()
    {
        $this::convert(3)->shouldReturn('tiga');
    }
    public function it_return_empat_for_4()
    {
        $this::convert(4)->shouldReturn('empat');
    }
    public function it_return_lima_for_5()
    {
        $this::convert(5)->shouldReturn('lima');
    }
    public function it_return_enam_for_6()
    {
        $this::convert(6)->shouldReturn('enam');
    }
    public function it_return_tujuh_for_7()
    {
        $this::convert(7)->shouldReturn('tujuh');
    }
    public function it_return_delapan_for_8()
    {
        $this::convert(8)->shouldReturn('delapan');
    }
    public function it_return_sembilan_for_9()
    {
        $this::convert(9)->shouldReturn('sembilan');
    }
    public function it_return_sepuluh_for_10()
    {
        $this::convert(10)->shouldReturn('sepuluh');
    }
    public function it_return_sebelas_for_11()
    {
        $this::convert(11)->shouldReturn('sebelas');
    }
    public function it_return_dua_belas_for_12()
    {
        $this::convert(12)->shouldReturn('dua belas');
    }
    public function it_return_tiga_belas_for_13()
    {
        $this::convert(13)->shouldReturn('tiga belas');
    }
    public function it_return_empat_belas_for_14()
    {
        $this::convert(14)->shouldReturn('empat belas');
    }
    public function it_return_lima_belas_for_15()
    {
        $this::convert(15)->shouldReturn('lima belas');
    }
    public function it_return_enam_belas_for_16()
    {
        $this::convert(16)->shouldReturn('enam belas');
    }
    public function it_return_tujuh_belas_for_17()
    {
        $this::convert(17)->shouldReturn('tujuh belas');
    }
    public function it_return_delapan_belas_for_18()
    {
        $this::convert(18)->shouldReturn('delapan belas');
    }
    public function it_return_sembilan_belas_for_19()
    {
        $this::convert(19)->shouldReturn('sembilan belas');
    }
    public function it_return_dua_puluh_for_20()
    {
        $this::convert(20)->shouldReturn('dua puluh');
    }
    public function it_return_dua_puluh_satu_for_21()
    {
        $this::convert(21)->shouldReturn('dua puluh satu');
    }
    public function it_return_dua_puluh_dua_for_22()
    {
        $this::convert(22)->shouldReturn('dua puluh dua');
    }
    public function it_return_dua_puluh_tiga_for_23()
    {
        $this::convert(23)->shouldReturn('dua puluh tiga');
    }
    public function it_return_dua_puluh_empat_for_24()
    {
        $this::convert(24)->shouldReturn('dua puluh empat');
    }
    public function it_return_dua_puluh_lima_for_25()
    {
        $this::convert(25)->shouldReturn('dua puluh lima');
    }
    public function it_return_dua_puluh_enam_for_26()
    {
        $this::convert(26)->shouldReturn('dua puluh enam');
    }
    public function it_return_dua_puluh_tujuh_for_27()
    {
        $this::convert(27)->shouldReturn('dua puluh tujuh');
    }
    public function it_return_dua_puluh_delapan_for_28()
    {
        $this::convert(28)->shouldReturn('dua puluh delapan');
    }
    public function it_return_dua_puluh_sembilan_for_29()
    {
        $this::convert(29)->shouldReturn('dua puluh sembilan');
    }
    public function it_return_tiga_puluh_for_30()
    {
        $this::convert(30)->shouldReturn('tiga puluh');
    }
    public function it_return_empat_puluh_for_40()
    {
        $this::convert(40)->shouldReturn('empat puluh');
    }
    public function it_return_lima_puluh_for_50()
    {
        $this::convert(50)->shouldReturn('lima puluh');
    }
    public function it_return_enam_puluh_for_60()
    {
        $this::convert(60)->shouldReturn('enam puluh');
    }
    public function it_return_tujuh_puluh_for_70()
    {
        $this::convert(70)->shouldReturn('tujuh puluh');
    }
    public function it_return_delapan_puluh_for_80()
    {
        $this::convert(80)->shouldReturn('delapan puluh');
    }
    public function it_return_sembilan_puluh_for_90()
    {
        $this::convert(90)->shouldReturn('sembilan puluh');
    }
    public function it_return_seratus_for_100()
    {
        $this::convert(100)->shouldReturn('seratus');
    }
    public function it_return_seratus_satu_for_101()
    {
        $this::convert(101)->shouldReturn('seratus satu');
    }
    public function it_return_seratus_sepuluh_for_110()
    {
        $this::convert(110)->shouldReturn('seratus sepuluh');
    }
    public function it_return_seratus_sebelas_for_111()
    {
        $this::convert(111)->shouldReturn('seratus sebelas');
    }
    public function it_return_seratus_dua_belas_for_112()
    {
        $this::convert(112)->shouldReturn('seratus dua belas');
    }
    public function it_return_seratus_dua_puluh_for_120()
    {
        $this::convert(120)->shouldReturn('seratus dua puluh');
    }
    public function it_return_seratus_dua_puluh_satu_for_121()
    {
        $this::convert(121)->shouldReturn('seratus dua puluh satu');
    }
    public function it_return_seratus_tiga_puluh_sembilan_for_139()
    {
        $this::convert(139)->shouldReturn('seratus tiga puluh sembilan');
    }
    public function it_return_dua_ratus_for_200()
    {
        $this::convert(200)->shouldReturn('dua ratus');
    }
    public function it_return_dua_ratus_satu_for_201()
    {
        $this::convert(201)->shouldReturn('dua ratus satu');
    }
    public function it_return_dua_ratus_sepuluh_for_210()
    {
        $this::convert(210)->shouldReturn('dua ratus sepuluh');
    }
    public function it_return_dua_ratus_sebelas_for_211()
    {
        $this::convert(211)->shouldReturn('dua ratus sebelas');
    }
    public function it_return_dua_ratus_dua_belas_for_212()
    {
        $this::convert(212)->shouldReturn('dua ratus dua belas');
    }
    public function it_return_dua_ratus_dua_puluh_for_220()
    {
        $this::convert(220)->shouldReturn('dua ratus dua puluh');
    }
    public function it_return_dua_ratus_dua_puluh_satu_for_221()
    {
        $this::convert(221)->shouldReturn('dua ratus dua puluh satu');
    }
    public function it_return_dua_ratus_tiga_puluh_sembilan_for_239()
    {
        $this::convert(239)->shouldReturn('dua ratus tiga puluh sembilan');
    }
    public function it_return_sembilan_ratus_sembilan_puluh_sembilan_for_999()
    {
        $this::convert(999)->shouldReturn('sembilan ratus sembilan puluh sembilan');
    }
    public function it_return_seribu_for_1_000()
    {
        $this::convert(1000)->shouldReturn('seribu');
    }
    public function it_return_seribu_satu_for_1_001()
    {
        $this::convert(1001)->shouldReturn('seribu satu');
    }
    public function it_return_seribu_sepuluh_for_1_010()
    {
        $this::convert(1010)->shouldReturn('seribu sepuluh');
    }
    public function it_return_seribu_sebelas_for_1_011()
    {
        $this::convert(1011)->shouldReturn('seribu sebelas');
    }
    public function it_return_seribu_dua_belas_for_1_012()
    {
        $this::convert(1012)->shouldReturn('seribu dua belas');
    }
    public function it_return_seribu_dua_puluh_for_1_020()
    {
        $this::convert(1020)->shouldReturn('seribu dua puluh');
    }
    public function it_return_seribu_dua_puluh_satu_for_1_021()
    {
        $this::convert(1021)->shouldReturn('seribu dua puluh satu');
    }
    public function it_return_dua_ribu_for_2_000()
    {
        $this::convert(2000)->shouldReturn('dua ribu');
    }
    public function it_return_dua_ribu_sebelas_for_2_011()
    {
        $this::convert(2011)->shouldReturn('dua ribu sebelas');
    }
    public function it_return_dua_ribu_dua_belas_for_2_012()
    {
        $this::convert(2012)->shouldReturn('dua ribu dua belas');
    }
    public function it_return_dua_ribu_dua_puluh_satu_for_2_021()
    {
        $this::convert(2021)->shouldReturn('dua ribu dua puluh satu');
    }
    public function it_return_sepuluh_ribu_dua_puluh_satu_for_10_021()
    {
        $this::convert(10021)->shouldReturn('sepuluh ribu dua puluh satu');
    }
    public function it_return_sebelas_ribu_for_11_000()
    {
        $this::convert(11000)->shouldReturn('sebelas ribu');
    }
    public function it_return_sebelas_ribu_seratus_sebelas_for_11_111()
    {
        $this::convert(11111)->shouldReturn('sebelas ribu seratus sebelas');
    }
    public function it_return_seratus_satu_ribu_for_101_000()
    {
        $this::convert(101000)->shouldReturn('seratus satu ribu');
    }
    public function it_return_seratus_sebelas_ribu_seratus_sebelas_for_111_111()
    {
        $this::convert(111111)->shouldReturn('seratus sebelas ribu seratus sebelas');
    }
    public function it_return_satu_juta_for_1_000_000()
    {
        $this::convert(1000000)->shouldReturn('satu juta');
    }
    public function it_return_satu_juta_satu_ribu_for_1_001_000()
    {
        $this::convert(1001000)->shouldReturn('satu juta satu ribu');
    }
    public function it_return_satu_juta_seratus_satu_ribu_for_1_101_000()
    {
        $this::convert(1101000)->shouldReturn('satu juta seratus satu ribu');
    }
    public function it_return_dua_juta_for_2_000_000()
    {
        $this::convert(2000000)->shouldReturn('dua juta');
    }
    public function it_return_sebelas_juta_for_11_000_000()
    {
        $this::convert(11000000)->shouldReturn('sebelas juta');
    }
    public function it_return_satu_miliar_for_1_000_000_000()
    {
        $this::convert(1000000000)->shouldReturn('satu miliar');
    }
    public function it_return_satu_miliar_for_1_000_000_001()
    {
        $this::convert(1000000001)->shouldReturn('satu miliar satu');
    }
    public function it_return_satu_miliar_sebelas_for_1_000_000_011()
    {
        $this::convert(1000000011)->shouldReturn('satu miliar sebelas');
    }
    public function it_return_satu_miliar_satu_juta_satu_ribu_satu_for_1_001_001_001()
    {
        $this::convert(1001001001)->shouldReturn('satu miliar satu juta satu ribu satu');
    }
    public function it_return_seratus_sebelas_miliar_seratus_satu_juta_sebelas_ribu_satu_for_111_101_011_001()
    {
        $this::convert(111101011001)->shouldReturn('seratus sebelas miliar seratus satu juta sebelas ribu satu');
    }
    public function it_return_sembilan_ratus_sembilan_puluh_sembilan_miliar_for_999_000_000_000()
    {
        $this::convert(999000000000)->shouldReturn('sembilan ratus sembilan puluh sembilan miliar');
    }
    public function it_return_seratus_sebelas_triliun_for_111_000_000_000_000()
    {
        $this::convert(111000000000000)->shouldReturn('seratus sebelas triliun');
    }
    public function it_returns_the_correct_string_for_2_147_483_647()
    {
        $lines = [];

        // 2 x 10^9
        $lines[] = 'dua miliar';
        // 147 x 10^6
        $lines[] = 'seratus empat puluh tujuh juta';
        // 483 x 10^3
        $lines[] = 'empat ratus delapan puluh tiga ribu';
        // 647 x 10^0
        $lines[] = 'enam ratus empat puluh tujuh';

        $this::convert(2147483647)->shouldReturn(implode(' ', $lines));
    }
    public function it_returns_the_correct_string_for_9_223_372_036_854_775_807()
    {
        $lines = [];

        // 9 x 10^18
        $lines[] = 'sembilan kuintiliun';
        // 223 x 10^15
        $lines[] = 'dua ratus dua puluh tiga kuadriliun';
        // 372 x 10^12
        $lines[] = 'tiga ratus tujuh puluh dua triliun';
        // 036 x 10^9
        $lines[] = 'tiga puluh enam miliar';
        // 854 x 10^6
        $lines[] = 'delapan ratus lima puluh empat juta';
        // 775 x 10^3
        $lines[] = 'tujuh ratus tujuh puluh lima ribu';
        // 807 x 10^0
        $lines[] = 'delapan ratus tujuh';

        $this::convert(9223372036854775807)->shouldReturn(implode(' ', $lines));
    }
    public function it_returns_the_correct_string_for_19_223_372_036_854_775_807()
    {
        $lines = [];

        // 19 x 10^18
        $lines[] = 'sembilan ratus sembilan belas kuintiliun';
        // 223 x 10^15
        $lines[] = 'dua ratus dua puluh tiga kuadriliun';
        // 372 x 10^12
        $lines[] = 'tiga ratus tujuh puluh dua triliun';
        // 036 x 10^9
        $lines[] = 'tiga puluh enam miliar';
        // 854 x 10^6
        $lines[] = 'delapan ratus lima puluh empat juta';
        // 775 x 10^3
        $lines[] = 'tujuh ratus tujuh puluh lima ribu';
        // 807 x 10^0
        $lines[] = 'delapan ratus tujuh';

        $this::convert("919223372036854775807")->shouldReturn(implode(' ', $lines));
    }
    public function it_return_the_correct_string_for_235_308_667_854_246_927_585_207_737_302_990_649_719_308_316_264_031_458_521_789_123_695_552_773_432_097_103_028_194_115_584()
    {
        $lines = [];
        // 235 x 10^93
        $lines[] = 'dua ratus tiga puluh lima trigintiliun';
        // 308 x 10^90
        $lines[] = 'tiga ratus delapan novemvigintiliun';
        // 667 x 10^87
        $lines[] = 'enam ratus enam puluh tujuh oktovigintiliun';
        // 854 x 10^84
        $lines[] = 'delapan ratus lima puluh empat septemvigintiliun';
        // 246 x 10^81
        $lines[] = 'dua ratus empat puluh enam sesvigintiliun';
        // 745 x 10^78
        $lines[] = 'tujuh ratus empat puluh lima kuinvigintiliun';
        // 927 x 10^75
        $lines[] = 'sembilan ratus dua puluh tujuh kuatorvigintiliun';
        // 585 x 10^72
        $lines[] = 'lima ratus delapan puluh lima trevigintiliun';
        // 207 x 10^69
        $lines[] = 'dua ratus tujuh duovigintiliun';
        // 737 x 10^66
        $lines[] = 'tujuh ratus tiga puluh tujuh unvigintiliun';
        // 302 x 10^63
        $lines[] = 'tiga ratus dua vigintiliun';
        // 990 x 10^60
        $lines[] = 'sembilan ratus sembilan puluh novemdesiliun';
        // 649 x 10^57
        $lines[] = 'enam ratus empat puluh sembilan oktodesiliun';
        // 719 x 10^54
        $lines[] = 'tujuh ratus sembilan belas septendesiliun';
        // 308 x 10^51
        $lines[] = 'tiga ratus delapan sedesiliun';
        // 316 x 10^48
        $lines[] = 'tiga ratus enam belas kuindesiliun';
        // 264 x 10^45
        $lines[] = 'dua ratus enam puluh empat kuatordesiliun';
        // 031 x 10^42
        $lines[] = 'tiga puluh satu tredesiliun';
        // 458 x 10^39
        $lines[] = 'empat ratus lima puluh delapan duodesiliun';
        // 521 x 10^36
        $lines[] = 'lima ratus dua puluh satu undesiliun';
        // 789 x 10^33
        $lines[] = 'tujuh ratus delapan puluh sembilan desiliun';
        // 123 x 10^30
        $lines[] = 'seratus dua puluh tiga noniliun';
        // 695 x 10^27
        $lines[] = 'enam ratus sembilan puluh lima oktiliun';
        // 552 x 10^24
        $lines[] = 'lima ratus lima puluh dua septiliun';
        // 773 x 10^21
        $lines[] = 'tujuh ratus tujuh puluh tiga sekstiliun';
        // 432 x 10^18
        $lines[] = 'empat ratus tiga puluh dua kuintiliun';
        // 097 x 10^15
        $lines[] = 'sembilan puluh tujuh kuadriliun';
        // 103 x 10^12
        $lines[] = 'seratus tiga triliun';
        // 028 x 10^9
        $lines[] = 'dua puluh delapan miliar';
        // 194 x 10^6
        $lines[] = 'seratus sembilan puluh empat juta';
        // 115 x 10^3
        $lines[] = 'seratus lima belas ribu';
        // 584 x 10^0
        $lines[] = 'lima ratus delapan puluh empat';

        $this::convert("235308667854246745927585207737302990649719308316264031458521789123695552773432097103028194115584")
             ->shouldReturn(implode(' ', $lines));
    }
}
