<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__.'/fuel/app/classes/controller');
;

/*
$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(__DIR__.'/fuel/app/classes/model');
;
*/

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::PSR2_LEVEL)
    //->fixers(array('trailing_spaces', 'encoding'))
    ->finder($finder)
;


