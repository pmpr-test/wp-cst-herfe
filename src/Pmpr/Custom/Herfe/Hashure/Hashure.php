<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f8bbba3             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Herfe\Setting; class Hashure extends Common { public function mameiwsayuyquoeq() { Ajax::symcgieuakksimmu(); Product::symcgieuakksimmu(); if ($this->caokeucsksukesyo()->cqusmgskowmesgcg()->iqqgmieeqemiowuk('subscription')) { Subscription::symcgieuakksimmu(); } } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('admin_init', [$this, 'yeyiguyegmmyusea']); } public function yeyiguyegmmyusea() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->awumyiewiaosiyyy()) { $yewiaiaauukwsgku = $this->weysguygiseoukqw(Setting::egweiqiwaegscoyq); $qqwegysogaocgeww = $this->weysguygiseoukqw(Setting::mmuyiaqessmqcqwk); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(__('Setting', PR__CST__HERFE), $this->kmuweyayaqoeqiyw()->oiucukewkckkwiqc()); if (!$yewiaiaauukwsgku || !$qqwegysogaocgeww) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('Hashure functionality cannot be start until you enter your credentials in the %s.', PR__CST__HERFE), $iwywmkygwewiamwm), 'fill-hashure-credentials', Constants::imkacwmiuiykyuim); } else { if (!$this->auamgqiwisysomsa()->kkmkcysyceyiwskq()) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->oiugciyawoeieace($this, sprintf(__('We are unable to connect to the hashure service, please check the user information you have entered in the %s.', PR__CST__HERFE), $iwywmkygwewiamwm), 'invalid-hashure-credentials', Constants::imkacwmiuiykyuim); } } } } }
