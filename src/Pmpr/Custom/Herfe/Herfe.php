<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae86f72704             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Herfe\Advertise\Advertise; use Pmpr\Custom\Herfe\CPT\CPT; use Pmpr\Custom\Herfe\CTX\CTX; use Pmpr\Custom\Herfe\Hashure\Hashure; use Pmpr\Custom\Herfe\Page\Page; use Pmpr\Custom\Herfe\Subscription\Subscription; use Pmpr\Custom\Herfe\Verification\Verification; use Pmpr\Custom\Herfe\Woocommerce\Woocommerce; class Herfe extends ComponentInitiator { const uiiqamagukacsssy = "\143\163\164\x5f\x68\145\162\146\145\x68\x5f"; public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\110\145\x72\x66\x65\x20\x43\x75\x73\164\157\155", PR__CST__HERFE); }, Constants::wuowaiyouwecckaw => false]); } public function mameiwsayuyquoeq() { if (!$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()) { goto ayyweymyuuiauamo; } Setting::symcgieuakksimmu(); ayyweymyuuiauamo: CPT::symcgieuakksimmu(); CTX::symcgieuakksimmu(); Page::symcgieuakksimmu(); Advertise::symcgieuakksimmu(); Verification::symcgieuakksimmu(); StructuredData::symcgieuakksimmu(); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x70\154\165\147\x69\x6e\x73\137\154\x6f\x61\144\145\x64", [$this, "\151\143\167\x63\x67\155\x63\157\151\155\x71\145\x69\147\171\x65"])->qcsmikeggeemccuu("\167\160", [$this, "\141\x63\x67\147\167\141\x69\151\x6d\x6d\x73\x69\x71\x6f\x65\x63"], 9999); } public function aqyikqugcomoqqqi() { if (!$this->gmiyqqaekqcsoime("\x73\165\x62\163\x63\162\151\160\x74\151\157\x6e")) { goto mosqsmqimqgqoase; } Subscription::symcgieuakksimmu(); mosqsmqimqgqoase: } public function icwcgmcoimqeigye() { if (!$this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { goto omugkkesagcyagmk; } Hashure::symcgieuakksimmu(); Woocommerce::symcgieuakksimmu(); omugkkesagcyagmk: } public function acggwaiimmsiqoec() { $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); if ($mumyimcwkaemyyue->goecwaaykqoaaagg()) { goto qqewoyookaskiuek; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $yeacayasgueouoqc = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->ekcymmyqoceukosc(true); $yiasugywggckywoa = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gooqqcmsyseiaikc($yeacayasgueouoqc); $mkomwsiykqigmqca = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::okmiyqowuqogaiiy, "\57"); if (!(trailingslashit($mkomwsiykqigmqca) !== $mkomwsiykqigmqca)) { goto iggyqogweyosuikc; } $gqusacuooiagkuom = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy(); $mkomwsiykqigmqca = trailingslashit($mkomwsiykqigmqca); $gwgucoaaqcwwciqq = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::ckiaowgkqoewoseo, $gqusacuooiagkuom->gmigwwwmwemyaayy()); $gqgemcmoicmgaqie = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::meieskyuuegwwcsy); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($yiasugywggckywoa, Constants::maiomwmauyekiseg, $gqusacuooiagkuom->wymyeyweagqomiim() ? "\x68\x74\x74\160\x73" : "\150\x74\164\160"); $igscmsiuisqaqwkk = "{$aaqqkgyougeiueyq}\72\57\57{$gwgucoaaqcwwciqq}{$mkomwsiykqigmqca}"; if (!$gqgemcmoicmgaqie) { goto kqksuugcgsyeoayy; } parse_str($gqgemcmoicmgaqie, $gqgemcmoicmgaqie); if (!$gqgemcmoicmgaqie) { goto ygcsmkuycoagwyou; } $igscmsiuisqaqwkk = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo($gqgemcmoicmgaqie, $igscmsiuisqaqwkk); ygcsmkuycoagwyou: kqksuugcgsyeoayy: $gqusacuooiagkuom->gwqgmkqcgwwmweom($igscmsiuisqaqwkk); exit; iggyqogweyosuikc: qqewoyookaskiuek: } }
