<?php

namespace YusamHub\ModelExt\Interfaces;

interface ModelExtInterface
{
    const PREFIX_ATTRIBUTE_NAME = 'ATTRIBUTE_NAME_';
    public function modelExtInit(): void;
    public function modelExtAttributeNames(): array;
    public function modelExtAttributes(): array;
    public function modelExtImportAttributes(array $attributes, bool $exceptionNotExists = true): void;
    public function modelExtAttributeGet(string $name, $default = null, bool $exceptionNotExists = true);
    public function modelExtAttributeSet(string $name, $value, bool $exceptionNotExists = true): void;
}