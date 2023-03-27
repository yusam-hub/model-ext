<?php

namespace YusamHub\ModelExt\Tests\Examples;

use YusamHub\ModelExt\ModelExt;

class Example1Model extends ModelExt implements Example1ModelInterface
{
    use Example1Trait;
    public function __construct(array $attributes = [])
    {
        $this->modelExtImportAttributes($attributes, false);
    }
}