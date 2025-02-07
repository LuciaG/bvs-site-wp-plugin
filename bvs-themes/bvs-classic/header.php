<?php
/**
 * @package BVS
 * @subpackage Classic_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

	<style type="text/css" media="screen">
		@import url( <?php bloginfo('stylesheet_url'); ?> );
	</style>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />	
	
	<?php wp_head(); ?>
</head>

<body>
    <div class="container">

        <div class="bar">
            <div id="otherVersions">
            	<?php mlf_links_to_languages(); ?>
            </div>
            <div id="contact"> 
                <span><a href="../php/contact.php?lang=pt">Contato</a></span>
            </div>
        </div>
        <div class="top">
            <div id="parent">
                <img src="<?php bloginfo('template_url') ?>/images/pt/logobvs.gif" alt="Biblioteca Virtual em Saúde"/>
            </div>
            <div id="identification">
                <h1><span><?php bloginfo('name'); ?></span></h1>
            </div>
            <div id="institutionList">
                <ul>
                    <li><img src="<?php bloginfo('template_url') ?>/images/pt/logoOpas.gif" alt="BIREME | OPAS | OMS logo"/></li>
                    <li><a href="http://www.bireme.br/" target="_blank">BIREME</a></li>
                    <li><a href="http://www.paho.org/" target="_blank">OPAS</a></li>
                    <li><a href="http://www.who.int/" target="_blank">OMS</a></li>
                </ul>
            </div>
        </div>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Sub-header") ) :  endif; ?>
</div>
    
<!-- end header -->
