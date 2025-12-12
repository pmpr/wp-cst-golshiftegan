<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             693b611fac7be             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Golshiftegan\Plugin\Woocommerce\Email; class CustomerDeliveredOrder extends Email { public function __construct() { $this->status = 'delivered'; $this->title = __('Delivered Order', PR__CST__GOLSHIFTEGAN); $this->email_group = 'order-processing'; $this->template_html = 'emails/customer-completed-order.php'; $this->template_plain = 'emails/plain/customer-completed-order.php'; parent::__construct(); $this->description = $this->email_improvements_enabled ? __('Send an email to customers notifying them that their order is delivered and has been shipped', PR__CST__GOLSHIFTEGAN) : __('Delivered Order emails are sent to customers when their orders are marked delivered and usually indicate that their orders have been shipped.', PR__CST__GOLSHIFTEGAN); } }
