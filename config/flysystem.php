<?php

/*
 * This file is part of Laravel Flysystem.
 *
 * (c) Graham Campbell <graham@mineuk.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | Flysystem Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the connections setup for your application. Examples of
    | configuring each supported driver is shown below. You can of course have
    | multiple connections per driver.
    |
    */

    'connections' => [

        'ftp' => [
            'driver'   => 'ftp',
            'host'     => 'offlinegmbh.ch',
            'port'     => 21,
            'username' => 'onlineftp@offlinegmbh.ch',
            'password' => 'x7S22!$l=?*dx4/9(=2f5D_',
            // 'root'       => '/path/to/root',
            // 'passive'    => true,
            // 'ssl'        => true,
            // 'timeout'    => 20,
            // 'visibility' => 'public',
            // 'eventable'  => true,
            // 'cache'      => 'foo'
        ],

    ],


    /*
    |--------------------------------------------------------------------------
    | Default Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the connections below you wish to use as
    | your default connection for all work. Of course, you may use many
    | connections at once using the manager class.
    |
    */

    'default'     => 'ftp',

];