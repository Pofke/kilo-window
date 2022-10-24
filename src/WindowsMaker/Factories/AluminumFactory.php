<?php

namespace Povil\Windows\WindowsMaker\Factories;

use Povil\Windows\WindowsMaker\AbstractFactory;
use Povil\Windows\WindowsMaker\AbstractWindowInstaller;
use Povil\Windows\WindowsMaker\Installers\AluminumWindow;

class AluminumFactory implements AbstractFactory
{
    public function createInstaller(): AbstractWindowInstaller
    {
        return new AluminumWindow();
    }
}
