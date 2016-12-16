<?php
$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__.'/src')
    ;

return PhpCsFixer\Config::create()
    ->setRules([
        '@Symfony' => true,
        'empty_return' => false,
        'blankline_after_open_tag' => false,
        'ordered_imports' => true,
        'phpdoc_no_empty_return' => false,
    ])
    ->setFinder($finder)
    ;