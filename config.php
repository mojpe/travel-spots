<?php

if( __DEBUG__ ) 
{    
    // Debug Mode - Development
     return array(
                'templates.path'    => './templates/',
                'debug' => true,
                'log.enabled' => true,
                'log.writer' => new \Yee\Log\FileLogger(
                    array(
                        'path' => __DIR__.'/logs',
                        'name_format' => 'Y-m-d',
                        'message_format' => '%label% - %date% - %message%'
                    )
                ),
                'session' => 'php',   // php, database or memcached
                'cache.path'=> __DIR__.'/cache',
                'cache.timeout'=> 1800,
                'system.base.url'   => "http://travelspots.dev",
                'system.base.path'  => "/var/www/travelspots.dev/",
                'database' => array(
                    'default' => array(
                        'database.host' => 'localhost',
                        'database.user' => '',
                        'database.pass' => '',
                        'database.name' => '',
                        'database.port' => 3306
                    )
                )
    
    );

} else {
    // Production Mode   
    return array(
                'templates.path'    => './templates/',
                'debug' => false,
                'log.enabled' => true,
                'log.writer' => new \Yee\Log\FileLogger(
                    array(
                        'path' => __DIR__.'/logs',
                        'name_format' => 'Y-m-d',
                        'message_format' => '%label% - %date% - %message%'
                    )
                ),
                'session' => 'php',   // php, database or memcached
                'cache.path'=> __DIR__.'/cache',
                'cache.timeout'=> 1800,
                'system.base.url'   => "http://travelspots.dev",
                'system.base.path'  => "/var/www/travelspots.dev/"
    
    );
    
}    