<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6800f86bf07ff             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\CTX; use Pmpr\Common\Cover\Breadcrumb\Generator; use Pmpr\Common\Foundation\Data\PageInfo; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\CTX; class ArticleCategory extends CTX { const iycaakaceqgiqose = 'frontend_title'; const kuuqsmqmkcmkyyyc = 'render_priority'; public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->ickqomquaqgqywkw(true)->kukswgcoysaeescm(Constants::oguseymmyyoyaako)->ckwgqocyuaysggma(Constants::ouywiegeiyuaaawo, 'article-category')->muuwuqssqkaieqge(__('Article Categories', PR__CST__HERFE))->guiaswksukmgageq(__('Article Category', PR__CST__HERFE))->gucwmccyimoagwcm(__('Article Category for products', PR__CST__HERFE)); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('single_term_title', [$this, 'cieaeqqcagwmkmio'], 99)->cecaguuoecmccuse('template_include', [$this, 'siqcwoksoymqkiim'], 99); $this->aqaqisyssqeomwom('get_term_title', [$this, 'qwawcyqqauwockso'], 99, 2)->aqaqisyssqeomwom('breadcrumb_before_add_item', [$this, 'csaymuooaeyuasee'], 10, 3); parent::kgquecmsgcouyaya(); } public function csaymuooaeyuasee($oammesyieqmwuwyi, $uwomkgseoiegeume, $eaekkwggowaaogiu) { $ymqmyyeuycgmigyo = $this->miwqiiqeegeqcwis(); if ($uwomkgseoiegeume instanceof PageInfo && $eaekkwggowaaogiu instanceof Generator && $this->migkyseymeomymmy() && $ymqmyyeuycgmigyo === $uwomkgseoiegeume->gueasuouwqysmomu()) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $cskucqcumqsyimye = $this->caokeucsksukesyo()->gscioiumssogceuc(); if ($useksmwkuswkwcqg = $cskucqcumqsyimye->imgymusqgccqsqqq(Constants::wsuusqigsoomsyky)) { array_pop($oammesyieqmwuwyi); $oammesyieqmwuwyi[] = $eaekkwggowaaogiu->wuqmciamumosasqa($cskucqcumqsyimye->uikgwcuascgeissw($useksmwkuswkwcqg, Constants::NAME), $cskucqcumqsyimye->myagyqumwekameww($useksmwkuswkwcqg), false); $iowyegiumsyoskym = $seumokooiykcomco->ciugwooasaqcywas(Constants::wsuusqigsoomsyky, [Constants::cuoyscoiacswuauq => [Constants::ascagqcquwgmygkm => 'article_categories', Constants::ciyoccqkiamemcmm => '"' . $this->caokeucsksukesyo()->kckogqkiycqeumoa()->iooowgsqoyqseyuu() . '"', Constants::ykemsyouoqyoaysg => Constants::augocsiaqqukkuui], Constants::goqgcigmiawyauai => 1]); $iqukmgwwwsaimcic = null; if ($iowyegiumsyoskym) { $iqukmgwwwsaimcic = array_pop($iowyegiumsyoskym); } if ($iqukmgwwwsaimcic) { $oammesyieqmwuwyi[] = $eaekkwggowaaogiu->wuqmciamumosasqa($seumokooiykcomco->qcgakseyaikigqco($iqukmgwwwsaimcic), $seumokooiykcomco->ycqquoiyyuesegsy($iqukmgwwwsaimcic), false); } } } return $oammesyieqmwuwyi; } public function qwawcyqqauwockso($meqocwsecsywiiqs, $iwewcwusemqaiggk) { return $this->quamkwgqasmecugk($iwewcwusemqaiggk, $meqocwsecsywiiqs); } public function cieaeqqcagwmkmio($meqocwsecsywiiqs) { return $this->quamkwgqasmecugk($this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->imgymusqgccqsqqq(), $meqocwsecsywiiqs); } public function quamkwgqasmecugk($iwewcwusemqaiggk, $ymqmyyeuycgmigyo) { if ($iwewcwusemqaiggk && $this->caokeucsksukesyo()->owicscwgeuqcqaig()->syukqeyowauuucwi()) { if ($moyaaaascoeowegu = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->igawqaomowicuayw($iwewcwusemqaiggk, self::iycaakaceqgiqose, true)) { $ymqmyyeuycgmigyo = $moyaaaascoeowegu; } } return $ymqmyyeuycgmigyo; } public function aoqwywcqmoqaukkq() { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::iycaakaceqgiqose)->gswweykyogmsyawy(__('Frontend Title', PR__CST__HERFE))->gucwmccyimoagwcm(__('Leave empty if you want use default title.', PR__CST__HERFE)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(self::kuuqsmqmkcmkyyyc)->gswweykyogmsyawy(__('Render Priority', PR__CST__HERFE))->escqqisecooswqgo()); parent::aoqwywcqmoqaukkq(); } public function siqcwoksoymqkiim($qqscaoyqikuyeoaw) { if ($this->migkyseymeomymmy()) { $qqscaoyqikuyeoaw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->ucwagioskkwqgkmq(); } return $qqscaoyqikuyeoaw; } }
