<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61c032888f5d8             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Contact; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Ajax extends Container { const ACTION_SUBMIT_FORM = "\x63\157\x6e\164\141\143\164\x5f\146\157\162\155\137\x73\x75\142\x6d\x69\164"; const myikkigscysoykgy = ["\163\x75\142\155\x69\x74\x5f\x66\x6f\162\x6d" => self::ACTION_SUBMIT_FORM]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::ACTION_SUBMIT_FORM, [$this, "\x65\x69\x67\x75\x6d\157\157\165\141\x77\145\x6b\165\151\x63\147"]); parent::wigskegsqequoeks(); } public function eigumoouawekuicg() { $occymigcemkqucuw = false; $aqmwamyiwgeeymqa = ManipulateServer::yyqgamuwwakgciey(); if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto ygcsmkuycoagwyou; } try { $ocogsiouoiuuguym = ManipulateArray::gucyquqwoimkiiaq($aqmwamyiwgeeymqa, [self::NAME, self::muqaqimusmckkieq, self::memskaacyikisggk, "\x73\165\x62\x6a\x65\143\164", "\x77\x65\142\x73\151\x74\x65", "\x6d\145\163\x73\x61\x67\x65"], "\x65\163\x63\137\163\x71\x6c"); $ocogsiouoiuuguym[self::ioksewgkgwwikiwo] = ManipulateUser::meymqemgekqiawec(); $ocogsiouoiuuguym[self::iockmgiyoygcswog] = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($aqmwamyiwgeeymqa, "\x6f\x77\x6e\145\162")); $yeccawueyssugoko = Submission::symcgieuakksimmu(); $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($ocogsiouoiuuguym); if ($sogksuscggsicmac[self::ckcawaoawwioqecq]) { goto mosqsmqimqgqoase; } $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, "\145\x72\x72\157\162\163"); goto omugkkesagcyagmk; mosqsmqimqgqoase: $uamcoiueqaamsqma = $this->rkwyoeqieaoggqus(); $occymigcemkqucuw = true; omugkkesagcyagmk: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->sagusgigmkeysock(); } ygcsmkuycoagwyou: if (is_array($uamcoiueqaamsqma)) { goto kqksuugcgsyeoayy; } $uamcoiueqaamsqma = ManipulateBootstrap::oockkqiqsssakuug($uamcoiueqaamsqma, $occymigcemkqucuw ? self::ckcawaoawwioqecq : self::wyaqwomqwwaoiwas); kqksuugcgsyeoayy: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); } }
