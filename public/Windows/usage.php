<?php


use Povil\Windows\WindowsMaker\AbstractFactory;
use Povil\Windows\WindowsMaker\Color;
use Povil\Windows\WindowsMaker\Colors\Blue;
use Povil\Windows\WindowsMaker\Colors\Brown;
use Povil\Windows\WindowsMaker\Colors\Red;
use Povil\Windows\WindowsMaker\Factories\AluminumFactory;
use Povil\Windows\WindowsMaker\Factories\PlasticFactory;

require_once '../../vendor/autoload.php';


const NEW_LINE = '<br/>';

function callForInstaller(AbstractFactory $windowInstaller, Color $color): void
{
    echo $windowInstaller->createInstaller()->installWindow($color);
}

callForInstaller(new AluminumFactory(), new Brown());
echo NEW_LINE;
callForInstaller(new PlasticFactory(), new Blue());
echo NEW_LINE;
callForInstaller(new PlasticFactory(), new Red());

