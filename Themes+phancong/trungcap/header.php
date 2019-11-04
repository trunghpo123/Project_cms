<!DOCTYPE html>
<html <?php language_attributes();?>/>
<head>
    <meta charset="<?php bloginfo('charset');?>"/>
    <link rel="profile" href="http://gmgp.org/xfn/11"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../trungcap/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="pingback" href="<?php bloginfo('pingback_url');?>"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="container">
    <div class="logo">
        <?php trungcap_header(); ?>
        <!--<?php trungcap_menu( 'primary-menu' ); ?>-->
        <?php get_template_part('modul/1','content') ?>
        <?php get_template_part('modul/10','content') ?>
        </div>
        
        
        
    </div>
        