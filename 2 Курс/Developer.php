<?php

namespace App;

class Developer extends Worker
{
        use HasRest;
    protected string $position = 'developer';
    public function work()
    {
        parent::
        print_r('Developing'); // TODO: Implement work() method.
    }
}