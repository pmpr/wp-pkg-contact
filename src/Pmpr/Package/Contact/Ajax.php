<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             61b07ebdba9a0             |
    |_______________________________________|
*/
 namespace Pmpr\Package\Contact; use Exception; use Pmpr\Common\Foundation\Manipulate\ManipulateServer; use Pmpr\Common\Foundation\Manipulate\ManipulateUser; use Pmpr\Common\Foundation\Manipulate\Theme\ManipulateBootstrap; use Pmpr\Common\Foundation\Manipulate\Type\ManipulateArray; class Ajax extends Container { const ACTION_SUBMIT_FORM = "\143\157\x6e\164\x61\x63\164\137\x66\157\x72\x6d\137\163\165\142\155\151\x74"; const ACTIONS = ["\x73\165\x62\155\x69\x74\137\146\157\162\155" => self::ACTION_SUBMIT_FORM]; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::ACTION_SUBMIT_FORM, [$this, "\x65\151\147\165\x6d\x6f\x6f\x75\141\x77\x65\153\x75\151\x63\147"]); parent::wigskegsqequoeks(); } public function eigumoouawekuicg() { goto quamuugoocyyceec; ygcgoaokauigwuus: $uamcoiueqaamsqma = ManipulateBootstrap::oockkqiqsssakuug($uamcoiueqaamsqma, $occymigcemkqucuw ? self::SUCCESS : self::DANGER); goto ysiqakyaiooyscwy; qyyyycwaookqaoke: omuauimgkygcecsc: goto ssywsaaqqaucesau; qcssigmcayuyweiy: $aqmwamyiwgeeymqa = ManipulateServer::yyqgamuwwakgciey(); goto iymaiwqimisgacmk; quamuugoocyyceec: $occymigcemkqucuw = false; goto qcssigmcayuyweiy; iymaiwqimisgacmk: if (!$this->miueaekaaugaccmg($uamcoiueqaamsqma)) { goto omuauimgkygcecsc; } goto mugscgugcogcasue; ysiqakyaiooyscwy: wwcqoeuwskquakwy: goto auumaoycmsmsgigs; ssywsaaqqaucesau: if (is_array($uamcoiueqaamsqma)) { goto wwcqoeuwskquakwy; } goto ygcgoaokauigwuus; mugscgugcogcasue: try { goto aeiemwacaiygemmg; aeiemwacaiygemmg: $ocogsiouoiuuguym = ManipulateArray::gucyquqwoimkiiaq($aqmwamyiwgeeymqa, [self::NAME, self::EMAIL, self::PHONE, "\163\165\x62\x6a\145\143\x74", "\167\x65\x62\163\x69\x74\x65", "\155\x65\x73\x73\141\147\x65"], "\145\163\143\137\163\161\x6c"); goto yyqygaokeccgugos; kyiuewcikkqagwwg: $occymigcemkqucuw = true; goto aumowowgewgqmwci; giuccakymqymawgk: $sogksuscggsicmac = $yeccawueyssugoko->gscuuyuyauokoyuo($ocogsiouoiuuguym); goto sicgyiyiocyygkoc; aumowowgewgqmwci: yggseoaommssscwo: goto oasggeyceiyieuuo; gcucsowqoeiwmyyq: $uamcoiueqaamsqma = $this->rkwyoeqieaoggqus(); goto kyiuewcikkqagwwg; oeusomaaeekakake: $ocogsiouoiuuguym[self::OWNER] = ManipulateUser::kuswmimkgmyuymiu(ManipulateArray::get($aqmwamyiwgeeymqa, "\157\167\156\145\162")); goto kwuckkyqaygwgcuy; kwuckkyqaygwgcuy: $yeccawueyssugoko = Submission::symcgieuakksimmu(); goto giuccakymqymawgk; cyosacayacumuaks: $uamcoiueqaamsqma = ManipulateArray::get($sogksuscggsicmac, "\x65\x72\162\157\x72\x73"); goto ikcwmsgocyuqiumc; eqiiaokcgakicaye: iuwkiyimqmgguose: goto gcucsowqoeiwmyyq; sicgyiyiocyygkoc: if ($sogksuscggsicmac[self::SUCCESS]) { goto iuwkiyimqmgguose; } goto cyosacayacumuaks; yyqygaokeccgugos: $ocogsiouoiuuguym[self::IP] = ManipulateUser::meymqemgekqiawec(); goto oeusomaaeekakake; ikcwmsgocyuqiumc: goto yggseoaommssscwo; goto eqiiaokcgakicaye; oasggeyceiyieuuo: } catch (Exception $wgaoewqkwgomoaai) { $uamcoiueqaamsqma = $wgaoewqkwgomoaai->sagusgigmkeysock(); } goto qyyyycwaookqaoke; auumaoycmsmsgigs: $this->uaggqsoeugksgooc($occymigcemkqucuw, $uamcoiueqaamsqma); goto ousmyagwsiooumos; ousmyagwsiooumos: } }
