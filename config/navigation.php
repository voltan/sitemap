<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

/**
 * Module meta
 *
 * @author Hossein Azizabadi <azizabadi@faragostaresh.com>
 */
return array(
    'admin' => array(
        'generat' => array(
            'label'         => _t('Generat'),
            'route'         => 'admin',
            'module'        => 'sitemap',
            'controller'    => 'index',
            'action'        => 'index',
        ),
        'top' => array(
            'label'         => _t('Top links'),
            'route'         => 'admin',
            'module'        => 'sitemap',
            'controller'    => 'index',
            'action'        => 'top',
        ),
        'list' => array(
            'label'         => _t('List links'),
            'route'         => 'admin',
            'module'        => 'sitemap',
            'controller'    => 'index',
            'action'        => 'list',
        ),
        'tools' => array(
            'label'         => _t('Tools'),
            'route'         => 'admin',
            'module'        => 'sitemap',
            'controller'    => 'index',
            'action'        => 'tools',
        ),
    ),
);