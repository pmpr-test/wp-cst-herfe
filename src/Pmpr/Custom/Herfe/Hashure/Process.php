<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839b9a9fd3             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Herfe\Herfe; use Pmpr\Custom\Herfe\Queue; class Process extends Queue { const cacwskwsgkqwiigo = Herfe::uiiqamagukacsssy . 'register_user_on_hashure'; const ooswogsyumieecec = Herfe::uiiqamagukacsssy . 'cancel_register_user_on_hashure'; public function ikcgmcycisiccyuc() { parent::ikcgmcycisiccyuc(); $this->group .= 'hashure'; } public function ggyqwumkkweiegea($ycoeoaakqyskgykq, $owiuekcekysskaoe) : int { $ksaameoqigiaoigg = 0; if (!$this->acsowueuoecissoe($ycoeoaakqyskgykq)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::cacwskwsgkqwiigo, [$ycoeoaakqyskgykq, $owiuekcekysskaoe]); } return $ksaameoqigiaoigg; } public function acsowueuoecissoe($ycoeoaakqyskgykq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::cacwskwsgkqwiigo, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$ycoeoaakqyskgykq]]); } public function ioeokeqikmmekmkg($ycoeoaakqyskgykq) : int { $ksaameoqigiaoigg = 0; if (!$this->cauicesaumygsssw($ycoeoaakqyskgykq)) { $ksaameoqigiaoigg = $this->ekyiieacymauaume(self::ooswogsyumieecec, [$ycoeoaakqyskgykq]); } return $ksaameoqigiaoigg; } public function cauicesaumygsssw($ycoeoaakqyskgykq) : bool { return $this->exists([Constants::cmooywkooekaakwk => self::ooswogsyumieecec, Constants::ciywsqoeiymemsys => Constants::sgoswgskyiiwkyuo, Constants::okeuagwgwkmiokac => [$ycoeoaakqyskgykq]]); } }
