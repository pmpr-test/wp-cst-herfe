<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c83a399b8a5             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Verification; use Pmpr\Common\Foundation\Interfaces\Constants; class Ajax extends Common { const wiysygukkaksueso = 'user_verification_'; const sqcceoquokuosyio = self::wiysygukkaksueso . 'resend_email_verification'; const cywmgkqugawikkqk = self::wiysygukkaksueso . 'verify_user_email_with_pin'; const woukciwqmcuiqemo = self::wiysygukkaksueso . 'verify_user_password_with_pin'; const kuiogsycyeeyseek = self::wiysygukkaksueso . 'resend_password_verification'; public function wigskegsqequoeks() { $this->iqkqummseggmikgo(self::cywmgkqugawikkqk, [$this, 'umaqmciaeeeeamss'])->iqkqummseggmikgo(self::sqcceoquokuosyio, [$this, 'wayqeammqkyaiyuc'])->iqkqummseggmikgo(self::woukciwqmcuiqemo, [$this, 'amkcckaooowyiwgk'])->iqkqummseggmikgo(self::kuiogsycyeeyseek, [$this, 'iywywmwuksygeowm']); } public function umaqmciaeeeeamss() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($ycoeoaakqyskgykq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc()) { if ($ygoisyckyyyesigw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::cyccyieqqskguayc)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $usuiaiccyskmwqws = $this->siiissmewwaiqosa($ycoeoaakqyskgykq); $kcacywcwwywmkkoi = Frontend::symcgieuakksimmu(); if ($voiomegiweayqcag = $gkyciwoiiisgywcs->get($usuiaiccyskmwqws, Constants::cyccyieqqskguayc)) { $owiuekcekysskaoe = $gkyciwoiiisgywcs->get($usuiaiccyskmwqws, Constants::uikygkewwaiowmwe); if (!$this->yisayuwsmwqeiaco($owiuekcekysskaoe)) { $oyiokksswogocuwm = $gkyciwoiiisgywcs->get($usuiaiccyskmwqws, Constants::yuogawgcguqacgqa, 0); if ($oyiokksswogocuwm < 5) { if ($voiomegiweayqcag == $ygoisyckyyyesigw) { $occymigcemkqucuw = (bool) $this->kwsaiaucmouiaaya($ycoeoaakqyskgykq); if ($occymigcemkqucuw) { $keccaugmemegoimu = __('Your email verified successfully.', PR__CST__HERFE); } else { $keccaugmemegoimu = __('Something wrong on verification email, please try again.', PR__CST__HERFE); } } else { $keccaugmemegoimu = __('Your entered code is not correct.', PR__CST__HERFE); $usuiaiccyskmwqws[Constants::yuogawgcguqacgqa] = $oyiokksswogocuwm + 1; $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::wqkoqyiyawmgueoc, $usuiaiccyskmwqws, $ycoeoaakqyskgykq); } } else { $keccaugmemegoimu = sprintf(__('Code entered incorrect more than 5 times, %s.', PR__CST__HERFE), $kcacywcwwywmkkoi->uwceaocckcmgoiga()); } } else { $keccaugmemegoimu = sprintf(__('Verification code expired, %s.', PR__CST__HERFE), $kcacywcwwywmkkoi->uwceaocckcmgoiga()); } } else { $keccaugmemegoimu = $kcacywcwwywmkkoi->uwceaocckcmgoiga(); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Verification Code', PR__CST__HERFE)); } } else { $keccaugmemegoimu = __('Request is not from a logging user.', PR__CST__HERFE); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function wayqeammqkyaiyuc() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($ycoeoaakqyskgykq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc()) { $usuiaiccyskmwqws = $this->siiissmewwaiqosa($ycoeoaakqyskgykq); if ($usuiaiccyskmwqws) { $occymigcemkqucuw = true; $this->ewcsyqaaigkicgse(self::oqyacmcuqwmeiocy, $ycoeoaakqyskgykq); $keccaugmemegoimu = [Constants::eoskkkieowogacws => __('New verification code send to your email.', PR__CST__HERFE), Constants::icymuyeowqaciyyu => $this->ieiqqykwywquyeoa($ycoeoaakqyskgykq, self::eewamesyyeqqgswo)]; } else { $keccaugmemegoimu = __('You dont need email verification, please refresh the page.', PR__CST__HERFE); } } else { $keccaugmemegoimu = __('Request is not from a logging user.', PR__CST__HERFE); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function amkcckaooowyiwgk() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($ycoeoaakqyskgykq = $this->mesawoeoqsekmumk()) { if ($ygoisyckyyyesigw = $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::cyccyieqqskguayc)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $usuiaiccyskmwqws = $this->iqgquqwgmegqooec($ycoeoaakqyskgykq); $kcacywcwwywmkkoi = Frontend::symcgieuakksimmu(); if ($voiomegiweayqcag = $gkyciwoiiisgywcs->get($usuiaiccyskmwqws, Constants::cyccyieqqskguayc)) { $owiuekcekysskaoe = $gkyciwoiiisgywcs->get($usuiaiccyskmwqws, Constants::uikygkewwaiowmwe); if (!$this->yisayuwsmwqeiaco($owiuekcekysskaoe)) { $oyiokksswogocuwm = $gkyciwoiiisgywcs->get($usuiaiccyskmwqws, Constants::yuogawgcguqacgqa, 0); if ($oyiokksswogocuwm < 5) { if ($voiomegiweayqcag == $ygoisyckyyyesigw) { $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $keccaugmemegoimu = $this->caokeucsksukesyo()->wikusamwomuogoau()->yiyqecawioyosoaw('myaccount/form-reset-password.php', [Constants::ascagqcquwgmygkm => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->sisqmmikmeuogcou($yoiguusocukqeayg->get($ycoeoaakqyskgykq, true)), Constants::yuguikokwoymmqem => $yoiguusocukqeayg->ygwimyogyaqgumam($ycoeoaakqyskgykq, Constants::miqkwqsewyogmsak, true)]); $occymigcemkqucuw = true; } else { $keccaugmemegoimu = __('Your entered code is not correct.', PR__CST__HERFE); $usuiaiccyskmwqws[Constants::yuogawgcguqacgqa] = $oyiokksswogocuwm + 1; $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::wqkoqyiyawmgueoc, $usuiaiccyskmwqws, $ycoeoaakqyskgykq); } } else { $keccaugmemegoimu = sprintf(__('Code entered incorrect more than 5 times, %s.', PR__CST__HERFE), $kcacywcwwywmkkoi->uwceaocckcmgoiga()); } } else { $keccaugmemegoimu = sprintf(__('Verification code expired, %s.', PR__CST__HERFE), $kcacywcwwywmkkoi->uwceaocckcmgoiga()); } } else { $keccaugmemegoimu = $kcacywcwwywmkkoi->uwceaocckcmgoiga(); } } else { $keccaugmemegoimu = $this->caokeucsksukesyo()->euekiyuksecoccus()->cackyykusuowuiwg(__('Verification Code', PR__CST__HERFE)); } } else { $keccaugmemegoimu = __('Your verification code is expired, use your email to reset your password.', PR__CST__HERFE); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } public function iywywmwuksygeowm() { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $eiicaiwgqkgsekce->aoyemeikggcigigu(true); $occymigcemkqucuw = false; if ($ycoeoaakqyskgykq = $this->mesawoeoqsekmumk()) { $usuiaiccyskmwqws = $this->siiissmewwaiqosa($ycoeoaakqyskgykq); if ($usuiaiccyskmwqws) { $occymigcemkqucuw = true; $this->ewcsyqaaigkicgse(self::imskmgmiuaigaimy, $ycoeoaakqyskgykq); $keccaugmemegoimu = [Constants::eoskkkieowogacws => __('New verification code send to your email.', PR__CST__HERFE), Constants::icymuyeowqaciyyu => $this->ieiqqykwywquyeoa($ycoeoaakqyskgykq, self::mukekcmuskkwmscy)]; } else { $keccaugmemegoimu = __('Something wrong, please refresh the page.', PR__CST__HERFE); } } else { $keccaugmemegoimu = __('Your verification code is expired, use your email to reset your password.', PR__CST__HERFE); } $eiicaiwgqkgsekce->uaggqsoeugksgooc($keccaugmemegoimu, $occymigcemkqucuw); } }
