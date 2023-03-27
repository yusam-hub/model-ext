<?php

namespace YusamHub\ModelExt\Tests;

use YusamHub\ModelExt\Tests\Examples\Example1Model;

class ExampleTest extends \PHPUnit\Framework\TestCase
{
    public function testDefault()
    {
        $example1Model = new Example1Model([
            'id' => 0,
            'title' => 'test',
        ]);
        var_dump($example1Model->modelExtAttributeNames());
        var_dump($example1Model->modelExtAttributes());
        var_dump($example1Model->modelExtAttributeGet('title'));
        $example1Model->createdAt = date("Y-m-d H:i:s");
        $example1Model->modifiedAt = date("Y-m-d H:i:s", time()+100000);

        $s = serialize($example1Model);
        var_dump($s);
        /**
         * @var Example1Model $o;
         */
        $o = unserialize($s);
        var_dump($o->id);
        var_dump($o->title);
        var_dump($o->createdAt);
        var_dump($o->modifiedAt);
        $o = clone $example1Model;
        var_dump($o->id);
        var_dump($o->title);
        var_dump($o->createdAt);
        var_dump($o->modifiedAt);
        $this->assertTrue(true);
    }
}