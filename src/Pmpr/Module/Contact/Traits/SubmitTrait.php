<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             626e61f900619             |
    |_______________________________________|
*/
 namespace Pmpr\Module\Contact\Traits; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; use Pmpr\Module\Contact\Setting; use Pmpr\Module\Contact\Submission; trait SubmitTrait { public function ygkskmsksmmiqaqu(&$uamcoiueqaamsqma, array $icwicymcioeyeyek = []) : bool { $occymigcemkqucuw = false; if ($icwicymcioeyeyek) { goto eegqyykygiccaoeo; } $icwicymcioeyeyek = ManipulateServer::yyqgamuwwakgciey(); eegqyykygiccaoeo: try { if ($yeccawueyssugoko = Submission::symcgieuakksimmu()) { goto soqqemyioggmoakg; } $uamcoiueqaamsqma = __("\123\x6f\x6d\x65\x74\x68\151\x6e\147\x20\167\162\157\x6e\147\40\x6f\x6e\40\163\x65\162\x76\145\162", PR__MDL__CONTACT); goto acaqummmoyiemqss; soqqemyioggmoakg: $icwicymcioeyeyek = ManipulateArray::gucyquqwoimkiiaq($icwicymcioeyeyek, [$yeccawueyssugoko::NAME, $yeccawueyssugoko::muqaqimusmckkieq, $yeccawueyssugoko::memskaacyikisggk, $yeccawueyssugoko::qkimemawswowsmoa, $yeccawueyssugoko::oeoceeacyascgkai, $yeccawueyssugoko::eoskkkieowogacws], true, "\x65\163\x63\137\163\x71\x6c"); $icwicymcioeyeyek[$yeccawueyssugoko::ioksewgkgwwikiwo] = ManipulateUser::meymqemgekqiawec(); $icwicymcioeyeyek[$yeccawueyssugoko::iockmgiyoygcswog] = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($icwicymcioeyeyek, $yeccawueyssugoko::iockmgiyoygcswog)); $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($icwicymcioeyeyek); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto ywqgcegomwaiuquc; } $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, self::iwyueouqaqegmcas); goto wmmggowmigekyoso; ywqgcegomwaiuquc: $uamcoiueqaamsqma = Setting::eiwcuqigayigimak(Setting::aiyeuymiomaukaaa); $occymigcemkqucuw = true; wmmggowmigekyoso: acaqummmoyiemqss: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->sagusgigmkeysock(); } return $occymigcemkqucuw; } }
