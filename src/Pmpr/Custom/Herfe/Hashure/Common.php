<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b38fc35e81e             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Hashure; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Herfe\Container; abstract class Common extends Container { const kmagyyokkyyyqqay = "\x70\154\141\x79"; const waqeayycosiamskm = "\x6d\x6f\x76\151\145"; const uwuwcacyyakgoqsu = "\150\164\164\160\163\72\x2f\x2f\x68\x61\x73\x68\x75\162\x65\56\x63\x6f\155\57"; const imeuqgwqyuywuwgm = "\162\x65\x67\x69\163\x74\145\x72\145\144\x5f\157\156\137\150\x61\x73\150\x75\x72\145"; protected ?API $api = null; public function auamgqiwisysomsa() : API { if (!$this->api) { $this->api = API::symcgieuakksimmu(); } return $this->api; } public function agwayuocqseimuwo($ycoeoaakqyskgykq, $owiuekcekysskaoe) : bool { $sogksuscggsicmac = $this->auamgqiwisysomsa()->subscribe($ycoeoaakqyskgykq, time(), $owiuekcekysskaoe); if ($sogksuscggsicmac) { if (!is_wp_error($sogksuscggsicmac)) { $this->caokeucsksukesyo()->issssuygyewuaswa()->ksmqawcowkmegigw(self::imeuqgwqyuywuwgm, 1, $ycoeoaakqyskgykq); return true; } $this->caokeucsksukesyo()->mskuyeumceaigegs()->debug("\x45\162\x72\157\x72\x20\x6f\x6e\x20\x73\165\x62\x73\x63\x72\151\142\145\40\x75\163\145\162\x20\157\x6e\x20\x68\141\163\x68\x75\x72\x65\x3a\x20" . $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac)); } return false; } public function yauqeuqwioeoqcou($product, $mkucggyaiaukqoce, string $ccamueccusigaaio = self::waqeayycosiamskm) : string { if (!in_array($ccamueccusigaaio, [self::kmagyyokkyyyqqay, self::waqeayycosiamskm])) { $ccamueccusigaaio = self::kmagyyokkyyyqqay; } $eeamcawaiqocomwy = $mgegoogckgsumooq = ''; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $umkkkaqkwugkemce = $seumokooiykcomco->igawqaomowicuayw(self::ykuiiemcsgauwaya, $product); if ($umkkkaqkwugkemce && is_numeric($umkkkaqkwugkemce)) { if ($mkucggyaiaukqoce = $yoiguusocukqeayg->get($mkucggyaiaukqoce)) { $mgegoogckgsumooq = $this->auamgqiwisysomsa()->yswgycwoywsmywyu($mkucggyaiaukqoce); } if ($mgegoogckgsumooq) { $eeamcawaiqocomwy = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo("\165\163\151\x6e\x67\137\164\x6f\153\145\156", $mgegoogckgsumooq, trailingslashit(self::uwuwcacyyakgoqsu . $ccamueccusigaaio) . $umkkkaqkwugkemce); } } return $eeamcawaiqocomwy; } public function ysuoseskooqusqua() : bool { $sogksuscggsicmac = $this->ocksiywmkyaqseou("\x73\x75\142\x73\143\x72\x69\x70\x74\x69\157\156\x5f\143\x68\145\143\153\x5f\x61\x63\143\145\163\163", Constants::oimusiegakqgwosg, $this->caokeucsksukesyo()->issssuygyewuaswa()->get(), ["\162\165\154\145\137\164\x79\160\x65" => "\x61\143\x63\x65\x73\x73", "\x61\x63\x63\x65\163\x73\137\x74\x79\160\x65" => Constants::cqycgsyykemiygou]); if (Constants::oimusiegakqgwosg === $sogksuscggsicmac) { $sogksuscggsicmac = false; } return $sogksuscggsicmac; } public function aewkomyuuweewcce($ycoeoaakqyskgykq) : bool { return (bool) $this->caokeucsksukesyo()->issssuygyewuaswa()->igawqaomowicuayw(self::imeuqgwqyuywuwgm, $ycoeoaakqyskgykq); } public function qmoswyyemykyycko($product) : bool { $weksiguqgqscsoee = false; if ($umkkkaqkwugkemce = $this->caokeucsksukesyo()->aqasygcsqysmmyke()->iooowgsqoyqseyuu($product)) { $weksiguqgqscsoee = !empty($this->caokeucsksukesyo()->ayueggmoqeeukqmq()->igawqaomowicuayw(self::ykuiiemcsgauwaya, $umkkkaqkwugkemce)); } return $weksiguqgqscsoee; } }
