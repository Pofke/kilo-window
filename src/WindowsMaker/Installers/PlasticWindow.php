<?php

namespace Povil\Windows\WindowsMaker\Installers;

use Povil\Windows\WindowsMaker\AbstractWindowInstaller;
use Povil\Windows\WindowsMaker\Color;

class PlasticWindow implements AbstractWindowInstaller
{
    public function installWindow(Color $color): string
    {
        return "This a plastic window. I was installed by Plastic window expert. It is " . $color->generateColor();
    }
}
