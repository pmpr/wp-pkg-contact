<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61afe1607e490             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Contact; use Pmpr\Common\Foundation\Container\Container as BaseClass; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Manipulate\ManipulateFormat; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Container extends BaseClass { public function __construct() { $this->settingObj = Setting::symcgieuakksimmu(); parent::__construct(); } public function wywyecaauygmwewe() : bool { return (bool) $this->weysguygiseoukqw(Setting::ENABLE_LOCATION); } public function ikiwgimsoiwswmeo($ggauoeuaesiymgee = null) { goto emqswoaawgeyosmi; okkmcocqokkskasy: ocywegekakimmwcq: goto qiiigwkqeoewsuwm; esikeyqyuikmaiek: $qmcuiciekkawmmms = $this->weysguygiseoukqw(Setting::MARKUP, $ggauoeuaesiymgee); goto okkmcocqokkskasy; qiiigwkqeoewsuwm: return $qmcuiciekkawmmms; goto esaqcqqwuussiiwo; iwsmmkqaoksmocok: if (!$this->wywyecaauygmwewe()) { goto ocywegekakimmwcq; } goto esikeyqyuikmaiek; emqswoaawgeyosmi: $qmcuiciekkawmmms = null; goto iwsmmkqaoksmocok; esaqcqqwuussiiwo: } public function wiwcgumsygqcomeo($ywmkwiwkosakssii = []) : array { goto oocuemosmeeekgas; uoeasoimegouymka: $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::OUTPUT]; goto egsycocugqyyswsi; cgmgqucewwssmicq: ikqeeaysmqgcgawq: goto mkomygccqkmkumsi; ciucewqgyoiouesq: foreach ($naiuumgusmkcowsa as $kyocyoemugcyqqyu) { goto yqagomygmeoecwey; sguskaeaaqcagqgc: mscgewkcqcoowweg: goto agkmiayuawacakau; aueaceeyommgkicu: if (!($aqykuigiuwmmcieu === self::NAMES)) { goto gsygwgsiawgmqiyi; } goto mysueeoswqgccmui; yqagomygmeoecwey: if (ManipulateArray::uuegkqwagymmusiy($kyocyoemugcyqqyu, [self::URL, self::KEY, self::ICON, self::TITLE])) { goto qsgqwyqaqiowkmco; } goto qikaewekoecykeou; eucqomyqykgoiuge: if (!($uusmaiomayssaecw && $esoqqaumyukywmmy == $uusmaiomayssaecw)) { goto suqcsgaosywaauuu; } goto usymasgsyqgsuocg; oqousikwiiqagoyw: goto mscgewkcqcoowweg; goto zayqqeqgcwkekwws; qikaewekoecykeou: $esoqqaumyukywmmy = ManipulateArray::get($kyocyoemugcyqqyu, self::KEY); goto eucqomyqykgoiuge; aiccyaswigkaycqk: suqcsgaosywaauuu: goto sqyokemumceysegy; zayqqeqgcwkekwws: wwukgaquuyoissgy: goto aueaceeyommgkicu; sqyokemumceysegy: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($esoqqaumyukywmmy, $ooiewiwkegguusum))) { goto wwukgaquuyoissgy; } goto oqousikwiiqagoyw; usymasgsyqgsuocg: return $kyocyoemugcyqqyu; goto aiccyaswigkaycqk; yuuyikiacmmueosu: qsgqwyqaqiowkmco: goto sguskaeaaqcagqgc; mysueeoswqgccmui: $kyocyoemugcyqqyu = $kyocyoemugcyqqyu[self::TITLE]; goto egmayaiikwsskgmy; egmayaiikwsskgmy: gsygwgsiawgmqiyi: goto ucuoeymyqeokgsya; ucuoeymyqeokgsya: $sogksuscggsicmac[$esoqqaumyukywmmy] = $kyocyoemugcyqqyu; goto yuuyikiacmmueosu; agkmiayuawacakau: } goto cgmgqucewwssmicq; egsycocugqyyswsi: $ooiewiwkegguusum = $ywmkwiwkosakssii[self::INCLUDE]; goto qiaimmucomukkeka; oocuemosmeeekgas: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::INCLUDE => [], self::OUTPUT => self::NAMES, self::KEY => '']); goto qkcsykuocwuyaice; qkcsykuocwuyaice: $uusmaiomayssaecw = $ywmkwiwkosakssii[self::KEY]; goto uoeasoimegouymka; osuscoaaomwcqkew: if (!($naiuumgusmkcowsa && is_array($naiuumgusmkcowsa))) { goto syuaummumssgwwee; } goto ciucewqgyoiouesq; mkomygccqkmkumsi: syuaummumssgwwee: goto ussceseaimqywuiy; aoquoewagkseayug: $sogksuscggsicmac = []; goto osuscoaaomwcqkew; ussceseaimqywuiy: return $sogksuscggsicmac; goto oyiuemaaykgkqqam; qiaimmucomukkeka: $naiuumgusmkcowsa = ManipulateArray::sagscekukkacqaaw($this->weysguygiseoukqw(Setting::SOCIAL, []), self::PRIORITY); goto aoquoewagkseayug; oyiuemaaykgkqqam: } public function ycesyyguqyyecywm($ywmkwiwkosakssii = []) { goto mgcuiguaomoqwwwm; ooqksueucyagyuoe: if (!$this->weysguygiseoukqw(Setting::ENABLE_INFO)) { goto smcguieygyqcaqgs; } goto osmmoyqkqoucsgow; aukucaieceiwesmm: smcguieygyqcaqgs: goto kqyoakickmseyyeq; yssqmyoaokkksukc: $oammesyieqmwuwyi = []; goto ooqksueucyagyuoe; wgiygcmqaokywuqa: foreach ($qcokcugqceckmigs as $yyimiwcuegayoskq) { goto goqmywuiicciasyk; yoagcooekomeokwg: if (!($sqeykgyoooqysmca && $ggieqgskosocamou !== $sqeykgyoooqysmca)) { goto ukomuiwukymcoaso; } goto eckcqesiokgwkkiw; quaqmuusokiyqgqe: if (!($ooiewiwkegguusum && is_array($ooiewiwkegguusum) && !in_array($amkeygycoeasmacg, $ooiewiwkegguusum))) { goto ceiwqkyquikcemmo; } goto smiemmcqqukyguuu; eckcqesiokgwkkiw: goto sqmoqymckwsogsqg; goto ecouwqosmoyyqmkw; skuqigsokaguscas: $oammesyieqmwuwyi[$amkeygycoeasmacg] = $yyimiwcuegayoskq; goto quyogmwugsyoaaiu; mmgmqogugasaqkgg: sqmoqymckwsogsqg: goto wmumywgyyeagqoeq; siecswkggyikqkga: $amkeygycoeasmacg = ManipulateArray::get($yyimiwcuegayoskq, self::KEY); goto qkuiwoqksgayqqmg; yuqgwwmqwqiuwmaw: uycesqqkoeamocgm: goto quaqmuusokiyqgqe; mqiiqkuaoekeuswo: if (!($aqykuigiuwmmcieu === self::NAMES)) { goto wkgskiuiukiuyque; } goto qmoocweoekqueuyy; quyogmwugsyoaaiu: oyiuyywyeoskckuw: goto mmgmqogugasaqkgg; sgiwoiscywusgmmm: wkgskiuiukiuyque: goto skuqigsokaguscas; ecouwqosmoyyqmkw: ukomuiwukymcoaso: goto mqiiqkuaoekeuswo; goqmywuiicciasyk: if (ManipulateArray::uuegkqwagymmusiy($yyimiwcuegayoskq, [self::KEY, self::TITLE, self::VALUE, self::ICON])) { goto oyiuyywyeoskckuw; } goto siecswkggyikqkga; smiemmcqqukyguuu: goto sqmoqymckwsogsqg; goto iksewmsaugayqaqq; qkuiwoqksgayqqmg: if (!($uusmaiomayssaecw && $amkeygycoeasmacg == $uusmaiomayssaecw)) { goto uycesqqkoeamocgm; } goto easqmyamcmeesgya; yamyagayiooyeekg: $ggieqgskosocamou = ManipulateArray::get($yyimiwcuegayoskq, self::TYPE); goto yoagcooekomeokwg; iksewmsaugayqaqq: ceiwqkyquikcemmo: goto yamyagayiooyeekg; qmoocweoekqueuyy: $yyimiwcuegayoskq = $yyimiwcuegayoskq[self::TITLE]; goto sgiwoiscywusgmmm; easqmyamcmeesgya: return $yyimiwcuegayoskq; goto yuqgwwmqwqiuwmaw; wmumywgyyeagqoeq: } goto iauwuugggmegwisk; sckioayasmkcoeoo: $ooiewiwkegguusum = $ywmkwiwkosakssii[self::INCLUDE]; goto yssqmyoaokkksukc; yuoeumyiuqkuouey: $sqeykgyoooqysmca = $ywmkwiwkosakssii[self::TYPE]; goto eyiwqgqcsqakwqss; kqyoakickmseyyeq: return $oammesyieqmwuwyi; goto micceocwuwkyusic; eyiwqgqcsqakwqss: $aqykuigiuwmmcieu = $ywmkwiwkosakssii[self::OUTPUT]; goto sckioayasmkcoeoo; osmmoyqkqoucsgow: $qcokcugqceckmigs = $this->weysguygiseoukqw(Setting::CONTACT_INFO, []); goto wgiygcmqaokywuqa; mgcuiguaomoqwwwm: $ywmkwiwkosakssii = ManipulateFormat::omaawkkwwyesqwcc($ywmkwiwkosakssii, [self::INCLUDE => [], self::OUTPUT => self::NAMES, self::TYPE => '', self::KEY => '']); goto eoyiumycaigawmmc; eoyiumycaigawmmc: $uusmaiomayssaecw = $ywmkwiwkosakssii[self::KEY]; goto yuoeumyiuqkuouey; iauwuugggmegwisk: gqmewagyagamokok: goto aukucaieceiwesmm; micceocwuwkyusic: } public function ceegukcouccwicus($ggauoeuaesiymgee = 1) { return $this->weysguygiseoukqw(Setting::TIME_LIMIT, $ggauoeuaesiymgee); } public function wgwyskmsyqawcoky($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::REPLY_MESSAGE, $ggauoeuaesiymgee); } public function rkwyoeqieaoggqus($ggauoeuaesiymgee = null) { return $this->weysguygiseoukqw(Setting::THANKS_MESSAGE, $ggauoeuaesiymgee); } public function mmouaqgeagummsqc($ggauoeuaesiymgee = null) : string { $uuyoeicyoayimaoa = ManipulateArray::get(Setting::HOURS_LIST, $this->ceegukcouccwicus()); return sprintf($this->weysguygiseoukqw(Setting::TIME_LIMIT_MESSAGE, $ggauoeuaesiymgee), $uuyoeicyoayimaoa); } }
