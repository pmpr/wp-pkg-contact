<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c3429d7def1             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Contact; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function wywyecaauygmwewe() : bool { return (bool) $this->weysguygiseoukqw(Setting::ggoymkamgwwomoeg); } public function ikiwgimsoiwswmeo($ggauoeuaesiymgee = null) { $qmcuiciekkawmmms = null; if (!$this->wywyecaauygmwewe()) { goto egasokooagakisiy; } $qmcuiciekkawmmms = $this->weysguygiseoukqw(Setting::kicoscymgmgqeqgy, $ggauoeuaesiymgee); egasokooagakisiy: return $qmcuiciekkawmmms; } public function wiwcgumsygqcomeo($ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::aisguagukaewucii => self::emgcgiseaoouacge, self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $naiuumgusmkcowsa = ManipulateArray::sagscekukkacqaaw($this->weysguygiseoukqw(Setting::awgyeicugseiscuq, []), self::iuqumwggccmcuyem); $sogksuscggsicmac = []; if (!($naiuumgusmkcowsa && is_array($naiuumgusmkcowsa))) { goto qmeoaqmsuseueqiy; } foreach ($naiuumgusmkcowsa as $kyocyoemugcyqqyu) { if (ManipulateArray::uuegkqwagymmusiy($kyocyoemugcyqqyu, [self::auqoykcmsiauccao, self::ascagqcquwgmygkm, self::qgqyauaqwqmqseim, self::qescuiwgsyuikume])) { goto ickcmqoiosquugwe; } $esoqqaumyukywmmy = ManipulateArray::get($kyocyoemugcyqqyu, self::ascagqcquwgmygkm); if (!($uusmaiomayssaecw && $esoqqaumyukywmmy == $uusmaiomayssaecw)) { goto qmiwsequckckoaei; } return $kyocyoemugcyqqyu; qmiwsequckckoaei: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($esoqqaumyukywmmy, $ooiewiwkegguusum))) { goto goeoymmqqqeeoime; } goto qgegkeomwscwwiuw; goeoymmqqqeeoime: if (!($aqykuigiuwmmcieu === self::emgcgiseaoouacge)) { goto eiawsoasmscmqswa; } $kyocyoemugcyqqyu = $kyocyoemugcyqqyu[self::qescuiwgsyuikume]; eiawsoasmscmqswa: $sogksuscggsicmac[$esoqqaumyukywmmy] = $kyocyoemugcyqqyu; ickcmqoiosquugwe: qgegkeomwscwwiuw: } kecwuwwcwokuksyq: qmeoaqmsuseueqiy: return $sogksuscggsicmac; } public function ycesyyguqyyecywm($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::ackcaikowcokggsc => [], self::aisguagukaewucii => self::emgcgiseaoouacge, self::squoamkioomemiyi => '', self::ascagqcquwgmygkm => '']); $uusmaiomayssaecw = $ywmkwiwkosakssii[self::ascagqcquwgmygkm]; $sqeykgyoooqysmca = $ywmkwiwkosakssii[self::squoamkioomemiyi]; $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[self::ackcaikowcokggsc]; $oammesyieqmwuwyi = []; if (!$this->weysguygiseoukqw(Setting::oawkyuooiqukeuuu)) { goto twkmiuomimomscew; } $qcokcugqceckmigs = $this->weysguygiseoukqw(Setting::qmcgaquwsgaoeuoi, []); foreach ($qcokcugqceckmigs as $yyimiwcuegayoskq) { if (ManipulateArray::uuegkqwagymmusiy($yyimiwcuegayoskq, [self::ascagqcquwgmygkm, self::qescuiwgsyuikume, self::ciyoccqkiamemcmm, self::qgqyauaqwqmqseim])) { goto eyiamcekkgkiawqy; } $amkeygycoeasmacg = ManipulateArray::get($yyimiwcuegayoskq, self::ascagqcquwgmygkm); if (!($uusmaiomayssaecw && $amkeygycoeasmacg == $uusmaiomayssaecw)) { goto cgewcsueoyaeikgm; } return $yyimiwcuegayoskq; cgewcsueoyaeikgm: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($amkeygycoeasmacg, $ooiewiwkegguusum))) { goto sukskmcwsoysiuqu; } goto cuoqqgaygogsmmic; sukskmcwsoysiuqu: $ggieqgskosocamou = ManipulateArray::get($yyimiwcuegayoskq, self::squoamkioomemiyi); if (!($sqeykgyoooqysmca && $ggieqgskosocamou !== $sqeykgyoooqysmca)) { goto igymseewwyiocoug; } goto cuoqqgaygogsmmic; igymseewwyiocoug: if (!($aqykuigiuwmmcieu === self::emgcgiseaoouacge)) { goto mqccmesakuemceqi; } $yyimiwcuegayoskq = $yyimiwcuegayoskq[self::qescuiwgsyuikume]; mqccmesakuemceqi: $oammesyieqmwuwyi[$amkeygycoeasmacg] = $yyimiwcuegayoskq; eyiamcekkgkiawqy: cuoqqgaygogsmmic: } ygkcacsyyckescqs: twkmiuomimomscew: return $oammesyieqmwuwyi; } public function ceegukcouccwicus($ggauoeuaesiymgee = 1) { return $this->weysguygiseoukqw(Setting::qskksqisocqqqayg, $ggauoeuaesiymgee); } public function wgwyskmsyqawcoky($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::omscksekmkuoguow, $ggauoeuaesiymgee); } public function rkwyoeqieaoggqus($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::aiyeuymiomaukaaa, $ggauoeuaesiymgee); } public function mmouaqgeagummsqc($ggauoeuaesiymgee = null) : string { $uuyoeicyoayimaoa = ManipulateArray::get(Setting::suesuewiciggeaau, $this->ceegukcouccwicus()); return sprintf($this->weysguygiseoukqw(Setting::aqowcgkssgcoumum, $ggauoeuaesiymgee), $uuyoeicyoayimaoa); } }
