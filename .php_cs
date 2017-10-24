<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'src')
    ->in(__DIR__ . DIRECTORY_SEPARATOR . 'tests')
;

return PhpCsFixer\Config::create()
    ->setUsingCache(true)
    ->setRules([
        '@Symfony' => true,
        'array_syntax' => ['syntax' => 'long'],
        'trailing_comma_in_multiline_array' => false,
        'binary_operator_spaces' => ['align_double_arrow' => true],
        'concat_space' => ['spacing' => 'one'],
        'yoda_style' => ['equal' => false, 'identical' => false],
    ])
    ->setFinder($finder)
;
