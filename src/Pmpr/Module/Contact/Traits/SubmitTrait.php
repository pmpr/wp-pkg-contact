<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             64bff83307020             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Module\Contact\Model\Submission; use Pmpr\Module\Contact\Setting; trait SubmitTrait { public function ygkskmsksmmiqaqu(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) : bool { $occymigcemkqucuw = false; if ($icwicymcioeyeyek) { goto yssscwioiyygssec; } $icwicymcioeyeyek = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(); yssscwioiyygssec: try { $yeccawueyssugoko = Submission::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($icwicymcioeyeyek, [$yeccawueyssugoko::NAME, $yeccawueyssugoko::muqaqimusmckkieq, $yeccawueyssugoko::memskaacyikisggk, $yeccawueyssugoko::qkimemawswowsmoa, $yeccawueyssugoko::oeoceeacyascgkai, $yeccawueyssugoko::eoskkkieowogacws]); $icwicymcioeyeyek[self::ioksewgkgwwikiwo] = $this->caokeucsksukesyo()->issssuygyewuaswa()->mmscegoieayuaguo(); $icwicymcioeyeyek[self::iockmgiyoygcswog] = $this->caokeucsksukesyo()->issssuygyewuaswa()->kuswmimkgmyuymiu($gkyciwoiiisgywcs->get($icwicymcioeyeyek, $yeccawueyssugoko::iockmgiyoygcswog)); $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ieumumsgyguceusy; } $uamcoiueqaamsqma = $sogksuscggsicmac[self::iwyueouqaqegmcas]; goto coywmiyqgsweuiic; ieumumsgyguceusy: $uamcoiueqaamsqma = Setting::symcgieuakksimmu()->giiuwsmyumqwwiyq(Setting::aiyeuymiomaukaaa); $occymigcemkqucuw = true; coywmiyqgsweuiic: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $this->kyacickkomkioeyu($wgaoewqkwgomoaai); } return $occymigcemkqucuw; } }
