<?php

use Rector\Config\RectorConfig;

return RectorConfig::configure()
    ->withPaths([__DIR__.'/src', __DIR__.'/tests'])
    ->withRules([
        Rector\Php74\Rector\Closure\ClosureToArrowFunctionRector::class,
        Rector\Php80\Rector\FunctionLike\UnionTypesRector::class,
    ]);