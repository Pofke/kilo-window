<?php

namespace Povil\Windows\WindowsMaker\Installers;

use Povil\Windows\WindowsMaker\AbstractWindowInstaller;
use Povil\Windows\WindowsMaker\Color;

class AluminumWindow implements AbstractWindowInstaller
{
    public function installWindow(Color $color): string
    {
        return "This a aluminum window. I was installed by Aluminum window master. It is " . $color->generateColor();
    }
}
