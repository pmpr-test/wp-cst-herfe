<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f6f8bbba3             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Cover\Breadcrumb\Generator; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Query; class Gallery extends Common { public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->usuqmwksoeaayaig(Constants::gicwoyoeuwosyuau)->ckaeqgiaiqwsccke(1)->muuwuqssqkaieqge(__('Galleries', PR__CST__HERFE))->guiaswksukmgageq(__('Gallery', PR__CST__HERFE))->gucwmccyimoagwcm(__('Gallery post type', PR__CST__HERFE))->yioesawwewqaigow(IconInterface::aiwqewoqsmmiqggm)->ockgcoiccyiuuwue('create_posts', self::kueeagiqseeaeogs); } public function kgquecmsgcouyaya() { $this->aqaqisyssqeomwom('breadcrumb_before_add_item', [$this, 'csaymuooaeyuasee'], 10, 3); parent::kgquecmsgcouyaya(); } public function msqgaouaissgquek(WP_Query $gqgemcmoicmgaqie) : WP_Query { $kieokceicuuaiuso = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas(self::kueeagiqseeaeogs, [], Constants::oyaoekcogwkcekcc); $gqgemcmoicmgaqie->set(Constants::cuoyscoiacswuauq, [[Constants::ascagqcquwgmygkm => self::kueeagiqseeaeogs, Constants::ciyoccqkiamemcmm => $kieokceicuuaiuso, Constants::ykemsyouoqyoaysg => 'IN']]); return $gqgemcmoicmgaqie; } public function csaymuooaeyuasee($oammesyieqmwuwyi, $uwomkgseoiegeume, $eaekkwggowaaogiu) { if ($uwomkgseoiegeume instanceof PageInfo && $eaekkwggowaaogiu instanceof Generator && Constants::gicwoyoeuwosyuau === $uwomkgseoiegeume->gueasuouwqysmomu() && $this->cukiusasccucgwqc()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($aigsgikoosikweqa = $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $seumokooiykcomco->get())) { $oammesyieqmwuwyi[] = $eaekkwggowaaogiu->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($aigsgikoosikweqa), $seumokooiykcomco->ycqquoiyyuesegsy($aigsgikoosikweqa), false); } } return $oammesyieqmwuwyi; } public function qyecwywaoyamkmci() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); $this->sikqggwmmykuiymy($uuyucgkyusckoaeq->scyscgskcwukckyy($ymqmyyeuycgmigyo)->gswweykyogmsyawy(__('Advertiser Metadata', PR__CST__HERFE))->saemoowcasogykak(IconInterface::uimgcyyaugqcacea)->aucimgwswmgaocae($uuyucgkyusckoaeq->doeuiogekyiwgsgw(Constants::ioomakeyqiqowgmk)->gswweykyogmsyawy(__('General', PR__CST__HERFE))->saemoowcasogykak(IconInterface::wukkqukiiuuoyiiy)->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(self::kueeagiqseeaeogs)->gswweykyogmsyawy(__('Advertiser', PR__CST__HERFE))->ukqywcsoogkyoaoa(self::kueeagiqseeaeogs)->mkmssscwmeekwgqo()->eumecwmqmukqgyea())->ewweaossowcqywaw($this->cgyweieiiwqaueke()))->aucimgwswmgaocae($this->ouymyccisioymugo())->aucimgwswmgaocae($this->yucwyuocwkgwwiwy())->iicugouwccwgikag()); } public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { $sogksuscggsicmac = $this->wamymgessigsusmg($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik)); $icwicymcioeyeyek['events'] = $sogksuscggsicmac[Constants::qwumqqyuasyskkkc]; $icwicymcioeyeyek['pagination_args'] = [Constants::uiiqiokqwmccomiu => $sogksuscggsicmac[Constants::uiiqiokqwmccomiu], Constants::asmooogmgyecqqka => $sogksuscggsicmac[Constants::asmooogmgyecqqka]]; return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } public function aqygoeiikwkmkyke() : array { return [self::kueeagiqseeaeogs => __('Advertiser', PR__CST__HERFE)]; } public function yiaammmogmaisoka($qgoqiacsiccwoawi, $gcqseksiskwueksc) { switch ($qgoqiacsiccwoawi) { case self::kueeagiqseeaeogs: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($aigsgikoosikweqa = $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $gcqseksiskwueksc)) { $wgkqagumoowawogg = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq(); echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($seumokooiykcomco->qcgakseyaikigqco($aigsgikoosikweqa), $wgkqagumoowawogg->yyykkcyiksewsoqy($aigsgikoosikweqa)); if ($saqqouasaaiakeei = $wgkqagumoowawogg->usieywkaugusugwm($gcqseksiskwueksc)) { $this->kmqoyaiymkcmomwi($saqqouasaaiakeei, $aigsgikoosikweqa); } if ($kceeogsoqackcyis = $seumokooiykcomco->igawqaomowicuayw(Constants::mscgqqsgosmsqygq, $gcqseksiskwueksc)) { $this->kmqoyaiymkcmomwi($kceeogsoqackcyis, $aigsgikoosikweqa); } } break; } } }
