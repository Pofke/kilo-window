<?php

namespace Povil\Windows\WindowsMaker\Factories;

use Povil\Windows\WindowsMaker\AbstractFactory;
use Povil\Windows\WindowsMaker\AbstractWindowInstaller;
use Povil\Windows\WindowsMaker\Installers\PlasticWindow;

class PlasticFactory implements AbstractFactory
{
    public function createInstaller(): AbstractWindowInstaller
    {
        return new PlasticWindow();
    }
}
