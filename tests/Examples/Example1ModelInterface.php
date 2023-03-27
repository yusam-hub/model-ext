<?php

namespace YusamHub\ModelExt\Tests\Examples;

/**
 * @property int $id
 * @property string $title
 * @property string $createdAt
 * @property string|null $modifiedAt
 */
interface Example1ModelInterface
{
    const ATTRIBUTE_NAME_ID = 'id';
    const ATTRIBUTE_NAME_TITLE = 'title';
    const ATTRIBUTE_NAME_CREATED_AT = 'createdAt';
    const ATTRIBUTE_NAME_MODIFIED_AT = 'modifiedAt';

}