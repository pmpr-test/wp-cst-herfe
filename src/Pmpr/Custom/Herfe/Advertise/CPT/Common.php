<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46b4daa8f             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Herfe\Advertise\CPT; use Pmpr\Common\Foundation\CPT; use Pmpr\Common\Foundation\FormGenerator\Backend\Component\Tab; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use WP_Query; abstract class Common extends CPT { const eskcyegwccqukqwc = "\x61\x64\x64\x72\145\x73\163"; const cqkewmmoacqamyce = "\141\144\x76\145\162\164\x69\163\x65"; const kueeagiqseeaeogs = "\x61\x64\x76\145\x72\x74\x69\x73\x65\162"; const caoyceiaegocywwg = "\155\141\x70\137\154\157\x63\141\164\x69\x6f\x6e"; const wicyseygwoyqqyya = "\163\157\143\x69\x61\x6c\x5f\x61\x63\143\x6f\165\156\164\163"; const yemysyaskkuqgeyc = "\143\x6f\x6e\164\141\143\164\137\x69\156\x66\x6f\162\155\x61\164\x69\x6f\x6e"; public function __construct($aokagokqyuysuksm = null) { parent::__construct($aokagokqyuysuksm); $this->oyeskqayoscwciem()->hsgasemokseccoao($this->miwqiiqeegeqcwis()); } public function mgoeqkosywwaoqyw() { parent::mgoeqkosywwaoqyw(); $this->oyeskqayoscwciem()->wsekoqmcyeuyegam()->soeowumgcwuiaica(true)->esgmeqiuqsaomgmw(false)->kwksqwkmuuoakaqg(true)->wiskakymeaywyeuw(self::cqkewmmoacqamyce); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\160\162\145\x5f\x67\x65\x74\x5f\160\x6f\163\x74\x73", [$this, "\x63\x73\157\163\x6f\x77\143\x67\x65\153\147\x75\151\x67\161\153"])->cecaguuoecmccuse("\165\x73\145\x72\x5f\150\141\163\137\143\x61\160", [$this, "\161\x71\171\163\x75\x79\x73\x79\141\x79\145\163\x79\x6f\141\x6d"], 10, 3); parent::kgquecmsgcouyaya(); } public function ucgqwmuigscaceuu() : bool { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); return !$ewgmommeawggyaek->scmcyesmmikkucie(Constants::gewmeskawiqikkoc) && $ewgmommeawggyaek->scmcyesmmikkucie(self::kueeagiqseeaeogs); } public function qqysuysyayesyoam($smiuugcoukoiceoq, $smgioooysaacyigy, $ywmkwiwkosakssii) { if (isset($ywmkwiwkosakssii[0], $ywmkwiwkosakssii[2]) && $this->ucgqwmuigscaceuu()) { $gmgycmymygamqwsk = ["\145\x64\151\x74\137\x70\x6f\163\x74", "\x64\145\x6c\x65\x74\x65\137\160\157\x73\x74"]; if (in_array($ywmkwiwkosakssii[0], $gmgycmymygamqwsk)) { $useksmwkuswkwcqg = $this->miwqiiqeegeqcwis(); $wyoiwuqokyeeuguk = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ciugwooasaqcywas($useksmwkuswkwcqg, [], Constants::oyaoekcogwkcekcc); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $post = $seumokooiykcomco->get($ywmkwiwkosakssii[2]); if ($seumokooiykcomco->gueasuouwqysmomu($post) === $useksmwkuswkwcqg) { if (!$this->amgkkwcswommwoqw() || !$seumokooiykcomco->uqwgsuysegkweago($useksmwkuswkwcqg, Constants::ocayisqocqoekqiq)) { if (!in_array($seumokooiykcomco->iooowgsqoyqseyuu($post), $wyoiwuqokyeeuguk, true)) { foreach ((array) $smgioooysaacyigy as $gkswkiicccswksiq) { if (array_key_exists($gkswkiicccswksiq, $smiuugcoukoiceoq)) { $smiuugcoukoiceoq[$gkswkiicccswksiq] = false; } } } } } } } return $smiuugcoukoiceoq; } public function csosowcgekguigqk($gqgemcmoicmgaqie) { $uqewsooiogygggym = $gqgemcmoicmgaqie->get(Constants::uouymeyqasaeckso); if (!is_array($uqewsooiogygggym)) { $uqewsooiogygggym = [$uqewsooiogygggym]; } if ($gqgemcmoicmgaqie instanceof WP_Query && $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg() && in_array($this->miwqiiqeegeqcwis(), $uqewsooiogygggym)) { if ($this->ucgqwmuigscaceuu()) { $gqgemcmoicmgaqie = $this->msqgaouaissgquek($gqgemcmoicmgaqie); } } return $gqgemcmoicmgaqie; } public abstract function msqgaouaissgquek(WP_Query $gqgemcmoicmgaqie) : WP_Query; public function mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii = []) { if ($post = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::mswoacegomcucaik)) { $meqocwsecsywiiqs = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($post); $icwicymcioeyeyek["\x6d\157\x72\145\x5f\151\x6e\146\x6f\162\155\141\164\151\x6f\156" . Constants::icmokuskwoskgace] = sprintf(__("\x4d\x6f\162\x65\x20\111\x6e\146\x6f\x72\155\x61\x74\x69\157\x6e\40\x41\142\157\x75\x74\40\x25\163", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::wicyseygwoyqqyya . Constants::icmokuskwoskgace] = sprintf(__("\45\x73\47\x73\40\123\157\143\x69\x61\154\40\101\143\x63\x6f\x75\156\x74\x73", PR__CST__HERFE), $meqocwsecsywiiqs); $icwicymcioeyeyek[self::yemysyaskkuqgeyc . Constants::icmokuskwoskgace] = sprintf(__("\x25\163\x27\163\40\111\x6e\146\157\x72\155\x61\164\x69\x6f\156", PR__CST__HERFE), $meqocwsecsywiiqs); } return parent::mqwaqckeiyqqoiiw($icwicymcioeyeyek, $ywmkwiwkosakssii); } private function wcwascmcugywicqi($aokagokqyuysuksm) : Collection { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->qqmgmgasauucoago($aokagokqyuysuksm)->gswweykyogmsyawy(__("\x49\x74\145\x6d\x73", PR__CST__HERFE))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\124\151\164\x6c\145", PR__CST__HERFE)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qgqyauaqwqmqseim)->gswweykyogmsyawy(__("\x49\x63\157\x6e", PR__CST__HERFE))->mmwqwkuqkqccuqye()->mkmssscwmeekwgqo())->usosgsaaimqcysyk(); } public function ouymyccisioymugo() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\x63\157\x6e\x74\141\x63\164\137\151\156\x66\157\x72\x6d\141\164\x69\157\156")->saemoowcasogykak(IconInterface::eaqiyqmgsusqueum)->gswweykyogmsyawy(__("\103\157\x6e\164\x61\x63\x74\x20\x49\x6e\x66\x6f\162\x6d\x61\164\151\157\156", PR__CST__HERFE))->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::yemysyaskkuqgeyc)->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi)->mkmssscwmeekwgqo()->gswweykyogmsyawy(__("\x54\171\x70\145", PR__CST__HERFE))->acauweqyyugwisqc([Constants::ogigqueukwysusii => __("\114\x69\156\x6b", PR__CST__HERFE), Constants::memskaacyikisggk => __("\x50\x68\157\x6e\145", PR__CST__HERFE), Constants::muqaqimusmckkieq => __("\105\155\x61\151\x6c", PR__CST__HERFE), Constants::eamuoicwqcokyggc => __("\x48\x6f\x75\x72\163", PR__CST__HERFE), Constants::eqcaaskcigqcmmww => __("\x4c\157\143\141\x74\x69\x6f\156", PR__CST__HERFE)]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::ciyoccqkiamemcmm)->gswweykyogmsyawy(__("\126\x61\x6c\x75\145", PR__CST__HERFE))->kqqqugemmqagucuq()->mkmssscwmeekwgqo())); } public function yucwyuocwkgwwiwy() : Tab { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return $uuyucgkyusckoaeq->doeuiogekyiwgsgw("\163\x6f\x63\x69\x61\154\x5f\141\x63\143\x6f\x75\x6e\164\x73")->gswweykyogmsyawy(__("\x53\157\x63\x69\141\x6c\40\x41\x63\143\157\165\156\x74\163", PR__CST__HERFE))->saemoowcasogykak(IconInterface::sigiamiycuoykgei)->mkksewyosgeumwsa($this->wcwascmcugywicqi(self::wicyseygwoyqqyya)->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::auqoykcmsiauccao)->gswweykyogmsyawy(__("\x55\x72\154", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo())); } public function cgyweieiiwqaueke() : array { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); return [$uuyucgkyusckoaeq->quaegkgkucwyeiqg(Constants::mscgqqsgosmsqygq)->gswweykyogmsyawy(__("\x4c\157\x67\x6f", PR__CST__HERFE))->eswksowyeqcsokew(Constants::egwoacukmsioosum)->mkmssscwmeekwgqo()->ycueqsmmommygueu(), $uuyucgkyusckoaeq->uouyygwcgsmygaee(self::eskcyegwccqukqwc)->gswweykyogmsyawy(__("\x41\144\144\162\x65\x73\x73", PR__CST__HERFE))->qsecygiycssgacqs(3)->mkmssscwmeekwgqo(), $uuyucgkyusckoaeq->ymuegqgyuagyucws(self::caoyceiaegocywwg)->gswweykyogmsyawy(__("\115\141\x70\x20\x4c\x6f\x63\x61\164\x69\x6f\x6e\x20\125\x72\x6c", PR__CST__HERFE))->xkgcwkwsqysqamic()->mkmssscwmeekwgqo()]; } public function wamymgessigsusmg($soiqkasigoogeiuw) : array { if (!is_array($soiqkasigoogeiuw)) { $soiqkasigoogeiuw = [$soiqkasigoogeiuw]; } $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $oyiyuuoguwwaksaa = [Constants::ygyiacciqgemekwc => Constants::iamiiekkgssgeaew]; foreach ($soiqkasigoogeiuw as $cmeamwmgwcmoweao) { $oyiyuuoguwwaksaa[] = [Constants::ykemsyouoqyoaysg => "\75", Constants::ascagqcquwgmygkm => Constants::gicwoyoeuwosyuau, Constants::ciyoccqkiamemcmm => $seumokooiykcomco->iooowgsqoyqseyuu($cmeamwmgwcmoweao)]; } $qawuqcsueakkgiio = max(1, $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->qaumqeeagueuqkcg(Constants::kkcqmwgccaygggcu, 1)); $wpQuery = $seumokooiykcomco->owicscwgeuqcqaig(Constants::aqmqeywcmyguggoo, [Constants::kkcqmwgccaygggcu => $qawuqcsueakkgiio, Constants::cuoyscoiacswuauq => $oyiyuuoguwwaksaa, Constants::gikuasuikwemyqoq => Constants::wmmucsiyiyusmssm, Constants::goqgcigmiawyauai => 2]); return [Constants::qwumqqyuasyskkkc => $wpQuery->get_posts(), Constants::uiiqiokqwmccomiu => $wpQuery->max_num_pages, Constants::asmooogmgyecqqka => $qawuqcsueakkgiio]; } public function kmqoyaiymkcmomwi($aiooqyausygaasqm, $aigsgikoosikweqa) { $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ycuekasamuuasigw = $seumokooiykcomco->iooowgsqoyqseyuu($aigsgikoosikweqa); $cwgqkcumeaswoscu = $seumokooiykcomco->iooowgsqoyqseyuu($aiooqyausygaasqm); if ($ycuekasamuuasigw !== $seumokooiykcomco->igawqaomowicuayw(self::kueeagiqseeaeogs, $cwgqkcumeaswoscu)) { $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ksmqawcowkmegigw(self::kueeagiqseeaeogs, $ycuekasamuuasigw, $cwgqkcumeaswoscu); } } public function amgkkwcswommwoqw() : bool { return true; } }
