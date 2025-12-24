<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             694c4d407b242             |
    |_______________________________________|
*/
 $oqseeekuqisekiwy = pr_get_dokan_template_params('statuses', []); ?>
<div class="dashboard-widget orders">
    <div class="widget-title">
        <i class="fas fa-shopping-cart"></i>
		<?php  esc_attr_e('Orders', 'dokan-lite'); ?>
    </div>

    <div class="content-half-part">
        <ul class="list-unstyled list-count">
            <li>
                <a href="<?php  echo esc_url($orders_url); ?>">
                    <span class="title"><?php  esc_attr_e('Total', 'dokan-lite'); ?></span>
                    <span class="count"><?php  echo esc_html($orders_count->total); ?></span>
                </a>
            </li>

			<?php  foreach ($oqseeekuqisekiwy as $iueymcwwscwqkiyq => $uccqaiikscymwkyi) { ?>
                <li>
                    <a href="<?php  echo esc_url($uccqaiikscymwkyi['url'] ?? '#'); ?>"
                       style="color: <?php  echo esc_attr($uccqaiikscymwkyi['color'] ?? '#000'); ?>">
                        <span class="title"><?php  echo esc_html($uccqaiikscymwkyi['label'] ?? ''); ?></span>
                        <span class="count"><?php  echo esc_html(number_format_i18n($uccqaiikscymwkyi['value'], 0)); ?></span>
                    </a>
                </li>
			<?php  } ?>
        </ul>
    </div>
    <div class="content-half-part">
        <canvas id="order-stats"></canvas>
    </div>
</div> <!-- .orders -->

<script type="text/javascript">
    jQuery(function ($) {
        var order_stats = <?php  echo wp_json_encode(array_values(wp_list_pluck($oqseeekuqisekiwy, 'value'))); ?>;
        var colors = <?php  echo wp_json_encode(array_values(wp_list_pluck($oqseeekuqisekiwy, 'color'))); ?>;
        var labels = <?php  echo wp_json_encode(array_values(wp_list_pluck($oqseeekuqisekiwy, 'label'))); ?>;

        var ctx = $("#order-stats").get(0).getContext("2d");
        var donn = new Chart(ctx, {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: order_stats,
                    backgroundColor: colors
                }],
                labels: labels,
            },
            options: {
                plugins: {
                    legend: false
                }
            }
        });
    });
</script>
