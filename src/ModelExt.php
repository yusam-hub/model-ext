<?php

namespace YusamHub\ModelExt;

use YusamHub\ModelExt\Interfaces\ModelExtInterface;
use YusamHub\ModelExt\Traits\ModelExtGetSetMagicTrait;
use YusamHub\ModelExt\Traits\ModelExtSerializeMagicTrait;
use YusamHub\ModelExt\Traits\ModelExtTrait;

abstract class ModelExt implements ModelExtInterface
{
    use ModelExtTrait;
    use ModelExtGetSetMagicTrait;
    use ModelExtSerializeMagicTrait;
}