<?php

namespace App;

class Designer extends Worker
{
        use HasRest;
    protected string $position = 'developer';


    public function work()
    {
        print_r('Designing'); // TODO: Implement work() method.
    }
}