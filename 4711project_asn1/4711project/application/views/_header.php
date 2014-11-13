<?php
if (!defined('APPPATH'))
    exit('No direct script access allowed');
/**
 * view/_header.php
 *
 * Parse {title} to change the page title.
 * This header is displayed on top of all major views.
 * Also contains the main navigation menu, subject to change.
 *
 * ------------------------------------------------------------------------
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>{title}</title>
        <meta HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <link href="/assets/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
        <link rel="stylesheet" type="text/css" media="all" href="/assets/cass/reset.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/assets/css/text.css" />
        <link rel="stylesheet" type="text/css" media="all" href="/assets/css/lightbox.css" />
        <link rel="stylesheet" type="text/css" href="/assets/css/style.css"/>
    </head>
    <body>
        <div class="container">
            <div id="header">
                <span class="myhead">Korea Tourism</span>
                <span class="mynav">
                    <ul>
                        <!-- 
                        Links below are different than in lab write up.
                        They are using the URL Helper function site_url() to 
                        call functions in the gallery controller.
                        -->
                        <li><a href='/'>Home</a></li>
                        <li><a href="/accom/all">Accommodations</a></li>
                        <li><a href="/food/top">Places to eat</a></li>
                        <li><a href="/fun/top">Places to have fun</a></li>
                        <li><a href="/about">About</a></li>
                    </ul>
                </span>
            </div>
            <div class="alone"></div>           
            <div id="content">