<?php

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * https://www.d3data.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Stein <support@shopmodule.com>
 * @link      https://www.oxidmodule.com
 */


/**
 * Metadata version
 */

$sMetadataVersion = '2.0';

$sModuleId = 'removegooglefonts';

/**
 * Module information
 */

$aModule = [
    'id'          => $sModuleId,
    'title'       => '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> Google Fonts lokal einbinden',
    'description' => [
        'de' => 'Bindet Google Fonts lokal ein',
        'en' => '',
    ],
    'version'     => '1.0.0.0',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'http://www.oxidmodule.com/',
    'blocks'    => [
        [
            'template'         => 'layout/base.tpl',
            'block'            => 'base_style',
            'file'             => '/Application/views/blocks/layout/d3_base_style.tpl'
        ],
        [
            'template'         => 'layout/base.tpl',
            'block'            => 'base_fonts',
            'file'             => '/Application/views/blocks/layout/d3_base_fonts.tpl'
        ]
    ],
];