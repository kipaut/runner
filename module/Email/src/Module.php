<?php

namespace Email;

use Zend\Mvc\MvcEvent;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
    }

    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
