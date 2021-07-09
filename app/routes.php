<?php
use core\Router;

Router::add('^login$', ['controller' => 'User', 'action' => 'login']);
Router::add('^signup$', ['controller' => 'User', 'action' => 'signup']);
Router::add('^logout$', ['controller' => 'User', 'action' => 'logout']);

Router::add('^docs/(?P<alias>[a-z-]+)$', ['controller' => 'Docs']);
Router::add('^tutorials/(?P<alias>[a-z-]+)$', ['controller' => 'Tutorials', 'action' => 'tutorial']);

// default admin routes
Router::add('^admin$', ['prefix' => 'admin', 'controller' => 'Main', 'action' => 'index']);

Router::add('^admin/?(?P<controller>[a-z-]+)/?(?P<action>[a-z-]+)?/?(?P<alias>[a-z-]+)?$', ['prefix' => 'admin']);


