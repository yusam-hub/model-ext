<?php

namespace YusamHub\ModelExt\Traits;

use YusamHub\ModelExt\Interfaces\ModelExtInterface;

trait ModelExtGetSetMagicTrait
{
    public function __get($name)
    {
        if ($this instanceof ModelExtInterface) {
            return $this->modelExtAttributeGet($name);
        }
    }

    public function __set($name, $value)
    {
        if ($this instanceof ModelExtInterface) {
            $this->modelExtAttributeSet($name, $value);
        }
    }
}