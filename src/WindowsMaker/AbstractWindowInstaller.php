<?php

namespace Povil\Windows\WindowsMaker;

interface AbstractWindowInstaller
{
    public function installWindow(Color $color): string;
}
