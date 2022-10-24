<?php

namespace Povil\Windows\WindowsMaker;

interface AbstractFactory
{
    public function createInstaller(): AbstractWindowInstaller;
}
