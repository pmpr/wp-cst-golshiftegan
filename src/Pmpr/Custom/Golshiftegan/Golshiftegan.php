<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             693b6045d16a1             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Golshiftegan; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Golshiftegan\Plugin\Dokan\Dokan; use Pmpr\Custom\Golshiftegan\Plugin\Woocommerce\Woocommerce; class Golshiftegan extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __('Golshiftegan Custom', PR__CST__GOLSHIFTEGAN); }, Constants::wuowaiyouwecckaw => false]); } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('plugins_loaded', [$this, 'icwcgmcoimqeigye']); } public function icwcgmcoimqeigye() { if ($this->caokeucsksukesyo()->wikusamwomuogoau()->ggocakcisguuokai()) { Woocommerce::symcgieuakksimmu(); } if ($this->caokeucsksukesyo()->gmymsiemouuyyocw()->ggocakcisguuokai()) { Dokan::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk('jalali')) { Jalali::symcgieuakksimmu(); } } }
