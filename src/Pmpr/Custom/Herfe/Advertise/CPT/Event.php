<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86bf07ff             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Cover\Breadcrumb\Generator; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Query; class Event extends Common { public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->usuqmwksoeaayaig(Constants::aqmqeywcmyguggoo)->ckaeqgiaiqwsccke(1)->muuwuqssqkaieqge(__('Events', PR__CST__HERFE))->guiaswksukmgageq(__('Event', PR__CST__HERFE))->gucwmccyimoagwcm(__('Event post type', PR__CST__HERFE))->yioesawwewqaigow(IconInterface::qwaaumsqyisawagq)->ockgcoiccyiuuwue('create_posts', self::kueeagiqseeaeogs); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('breadcrumb_before_add_item', [$this, 'csaymuooaeyuasee'], 10, 3); parent::kgquecmsgcouyaya(); } public function msqgaouaissgquek(WP_Query $gqgemcmoicmgaqie) : WP_Query { $soiqkasigoogeiuw = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(Constants::gicwoyoeuwosyuau, [], Constants::oyaoekcogwkcekcc); $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, [[Constants::ascagqcquwgmygkm => Constants::gicwoyoeuwosyuau, Constants::ciyoccqkiamemcmm => $soiqkasigoogeiuw, Constants::ykemsyouoqyoaysg => 'IN']]); return $gqgemcmoicmgaqie; } public function csaymuooaeyuasee($oammesyieqmwuwyi, $uwomkgseoiegeume, $eaekkwggowaaogiu) { if ($uwomkgseoiegeume instanceof PageInfo && $eaekkwggowaaogiu instanceof Generator && $this->cukiusasccucgwqc() && $this->miwqiiqeegeqcwis() === $uwomkgseoiegeume->gueasuouwqysmomu()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($cmeamwmgwcmoweao = $seumokooiykcomco->igawqaomowicuayw(Constants::gicwoyoeuwosyuau, $seumokooiykcomco->get())) { if ($aigsgikoosikweqa = $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $cmeamwmgwcmoweao)) { $oammesyieqmwuwyi[] = $eaekkwggowaaogiu->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($aigsgikoosikweqa), $seumokooiykcomco->ycqquoiyyuesegsy($aigsgikoosikweqa), false); } $oammesyieqmwuwyi[] = $eaekkwggowaaogiu->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($cmeamwmgwcmoweao), $seumokooiykcomco->ycqquoiyyuesegsy($cmeamwmgwcmoweao), false); } } return $oammesyieqmwuwyi; } public function qyecwywaoyamkmci() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->sikqggwmmykuiymy($uuyucgkyusckoaeq->scyscgskcwukckyy($ymqmyyeuycgmigyo)->gswweykyogmsyawy(__('Event Metadata', PR__CST__HERFE))->saemoowcasogykak(IconInterface::uimgcyyaugqcacea)->aucimgwswmgaocae($uuyucgkyusckoaeq->doeuiogekyiwgsgw(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__CST__HERFE))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::gicwoyoeuwosyuau)->ukqywcsoogkyoaoa(Constants::gicwoyoeuwosyuau)->gswweykyogmsyawy(__('Gallery', PR__CST__HERFE))->mkmssscwmeekwgqo()->eumecwmqmukqgyea()))->aucimgwswmgaocae($this->ouymyccisioymugo())->iicugouwccwgikag()); } public function aqygoeiikwkmkyke() : array { return [self::kueeagiqseeaeogs => __('Advertiser', PR__CST__HERFE), Constants::gicwoyoeuwosyuau => __('Gallery', PR__CST__HERFE)]; } public function yiaammmogmaisoka($qgoqiacsiccwoawi, $gcqseksiskwueksc) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); switch ($qgoqiacsiccwoawi) { case self::kueeagiqseeaeogs: $cmeamwmgwcmoweao = $seumokooiykcomco->igawqaomowicuayw(Constants::gicwoyoeuwosyuau, $gcqseksiskwueksc); if ($cmeamwmgwcmoweao && ($aigsgikoosikweqa = $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $cmeamwmgwcmoweao))) { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($seumokooiykcomco->qcgakseyaikigqco($aigsgikoosikweqa), $wgkqagumoowawogg->yyykkcyiksewsoqy($aigsgikoosikweqa)); if ($saqqouasaaiakeei = $wgkqagumoowawogg->usieywkaugusugwm($gcqseksiskwueksc)) { $this->kmqoyaiymkcmomwi($saqqouasaaiakeei, $aigsgikoosikweqa); } } break; case Constants::gicwoyoeuwosyuau: if ($cmeamwmgwcmoweao = $seumokooiykcomco->igawqaomowicuayw(Constants::gicwoyoeuwosyuau, $gcqseksiskwueksc)) { echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($seumokooiykcomco->qcgakseyaikigqco($cmeamwmgwcmoweao), $wgkqagumoowawogg->yyykkcyiksewsoqy($cmeamwmgwcmoweao)); } break; } } }
