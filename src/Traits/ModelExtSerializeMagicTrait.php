<?php

namespace YusamHub\ModelExt\Traits;

use YusamHub\ModelExt\Interfaces\ModelExtInterface;

trait ModelExtSerializeMagicTrait
{
    public function __serialize(): array
    {
        if ($this instanceof ModelExtInterface) {
            return $this->modelExtAttributes();
        }
        return [];
    }

    public function __unserialize(array $data): void
    {
        if ($this instanceof ModelExtInterface) {
            $this->modelExtImportAttributes($data);
        }
    }
}