<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             694c4d407b242             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Golshiftegan\Plugin\Dokan; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Custom\Golshiftegan\Container; use Pmpr\Custom\Golshiftegan\Traits\OrderTrait; class Vendor extends Container { use OrderTrait; public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse('dokan_get_vendor_orders_args', [$this, 'mcqycyiysgueqiis'])->cecaguuoecmccuse('dokan_seller_total_sales', [$this, 'qasqcgqqiiiekmye'], 99, 2); } public function qasqcgqqiiiekmye($gyskouoummumqciy, $uwcscmwcskmmkgww) { global $wpdb; $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); return (float) $eqwoegegiamegqsm->qaumqeeagueuqkcg($eqwoegegiamegqsm->prepare("SELECT SUM(order_total) as earnings FROM {$wpdb->prefix}dokan_orders WHERE seller_id = %d AND order_status IN('wc-delivered', 'wc-pending-approval')", $uwcscmwcskmmkgww)); } public function mcqycyiysgueqiis($ywmkwiwkosakssii) { if (isset($ywmkwiwkosakssii[Constants::ciywsqoeiymemsys])) { $ywmkwiwkosakssii[Constants::ciywsqoeiymemsys] = $this->awyaawmockcwmkcy($ywmkwiwkosakssii[Constants::ciywsqoeiymemsys]); } return $ywmkwiwkosakssii; } }
