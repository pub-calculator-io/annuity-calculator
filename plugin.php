<?php
/*
Plugin Name: CI Annuity calculator
Plugin URI: https://www.calculator.io/annuity-calculator/
Description: Annuity calculator that uses the formula FV = PV (1 + R)^n to help investors calculate annuity growth over time and make retirement decisions.
Version: 1.0.0
Author: Calculator.io
Author URI: https://www.calculator.io/
License: GPLv2 or later
Text Domain: ci_annuity_calculator
*/

if (!defined('ABSPATH')) exit;

if (!function_exists('add_shortcode')) return "No direct call for Annuity Calculator by Calculator.iO";

function display_ci_annuity_calculator(){
    $page = 'index.html';
    return '<h2><img src="' . esc_url(plugins_url('assets/images/icon-48.png', __FILE__ )) . '" width="48" height="48">Annuity Calculator</h2><div><iframe style="background:transparent; overflow: scroll" src="' . esc_url(plugins_url($page, __FILE__ )) . '" width="100%" frameBorder="0" allowtransparency="true" onload="this.style.height = this.contentWindow.document.documentElement.scrollHeight + \'px\';" id="ci_annuity_calculator_iframe"></iframe></div>';
}

add_shortcode( 'ci_annuity_calculator', 'display_ci_annuity_calculator' );