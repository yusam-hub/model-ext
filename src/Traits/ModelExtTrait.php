<?php

namespace YusamHub\ModelExt\Traits;

use YusamHub\ModelExt\ModelExtException;

trait ModelExtTrait
{
    private bool $modelExtInitComplete = false;
    private array $modelExtAttributeNames = [];
    private array $modelExtAttributeValues = [];

    public function modelExtInit(): void
    {
        if ($this->modelExtInitComplete) return;

        $refObj = new \ReflectionClass($this);
        $this->modelExtAttributeNames = array_values(array_filter($refObj->getConstants(), function ($v, $k){
            return str_starts_with($k, self::PREFIX_ATTRIBUTE_NAME);
        }, ARRAY_FILTER_USE_BOTH));
        $this->modelExtAttributeValues = array_fill_keys($this->modelExtAttributeNames, null);

        $this->modelExtInitComplete = true;
    }

    public function modelExtAttributeNames(): array
    {
        $this->modelExtInit();
        return $this->modelExtAttributeNames;
    }

    public function modelExtAttributes(): array
    {
        $this->modelExtInit();
        return $this->modelExtAttributeValues;
    }

    public function modelExtImportAttributes(array $attributes, bool $exceptionNotExists = true): void
    {
        $this->modelExtInit();
        foreach ($attributes as $k => $v) {
            $this->modelExtAttributeSet($k, $v, $exceptionNotExists);
        }
    }

    public function modelExtAttributeGet(string $name, $default = null, bool $exceptionNotExists = true)
    {
        if (in_array($name, $this->modelExtAttributeNames)) {
            return $this->modelExtAttributeValues[$name];
        }
        if ($exceptionNotExists) {
            throw new ModelExtException(sprintf('Attribute [%s] not exists', $name));
        }
        return $default;
    }

    public function modelExtAttributeSet(string $name, $value, bool $exceptionNotExists = true): void
    {
        if (in_array($name, $this->modelExtAttributeNames)) {
            $this->modelExtAttributeValues[$name] = $value;
            return;
        }
        if ($exceptionNotExists) {
            throw new ModelExtException(sprintf('Attribute [%s] not exists', $name));
        }
    }
}