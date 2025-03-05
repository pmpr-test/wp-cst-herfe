<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839b9a9fd3             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Woocommerce; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Herfe\Container; class Checkout extends Container { public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('woocommerce_checkout_fields', [$this, 'oiqueiyiwgyyuuos']); } public function oiqueiyiwgyyuuos($ikgwqyuyckaewsow) { $ccqsocmmyewikeuc = true; if ($ugsykqkcsqouwoug = $this->caokeucsksukesyo()->wikusamwomuogoau()->ygywcicqqwcumoku()) { foreach ($ugsykqkcsqouwoug as $igqsaukqcqscimok) { $product = $igqsaukqcqscimok[Constants::uiwqcumqkgikqyue] ?? null; if ($product && !$product->is_virtual()) { $ccqsocmmyewikeuc = false; break; } } if ($ccqsocmmyewikeuc) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $ikgwqyuyckaewsow['billing'] = []; } else { $maaoegqeuuywqsqo = [ Constants::kagqiwogmiguosiw, Constants::scagkwwiiquocimc, 'address_1', 'address_2', 'postcode', 'country', 'state', 'city', ]; foreach ($maaoegqeuuywqsqo as $kekikiwsckuiyuyo) { unset($ikgwqyuyckaewsow['billing']["billing_{$kekikiwsckuiyuyo}"]); } } } } return $ikgwqyuyckaewsow; } }
