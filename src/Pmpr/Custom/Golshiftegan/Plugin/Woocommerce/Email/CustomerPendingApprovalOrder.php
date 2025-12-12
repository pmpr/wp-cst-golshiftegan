<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             693b611fac7be             |
    |_______________________________________|
*/
 namespace Pmpr\Custom\Golshiftegan\Plugin\Woocommerce\Email; use Pmpr\Common\Foundation\Interfaces\Constants; class CustomerPendingApprovalOrder extends Email { public function __construct() { $this->status = 'pending-approval'; $this->email_group = 'order-exceptions'; $this->triggerFrom = [Constants::sgoswgskyiiwkyuo, Constants::uasuowkaguiwoouw, Constants::moimkuyueiyqwyki]; $this->title = __('Order Pending Approval', PR__CST__GOLSHIFTEGAN); $this->template_html = 'emails/customer-on-hold-order.php'; $this->template_plain = 'emails/plain/customer-on-hold-order.php'; parent::__construct(); $this->description = $this->email_improvements_enabled ? __('Send an email to customers notifying them when their order has been placed on pending approval', PR__CST__GOLSHIFTEGAN) : __('This is an order notification sent to customers containing order details after an order is placed pending-approval from Pending, Cancelled or Failed order status.', PR__CST__GOLSHIFTEGAN); } }
