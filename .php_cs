<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->exclude('somedir')
    ->in(__DIR__.DIRECTORY_SEPARATOR.'src')
    ->in(__DIR__.DIRECTORY_SEPARATOR.'spec')
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->finder($finder)
;
