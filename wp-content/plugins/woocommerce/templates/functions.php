<?php

add_action('woocommerce_befire_add_to_cart_form', 'print_something_below_short_description');
function print_something_below_short_description()
{
	echo "TEST";
}