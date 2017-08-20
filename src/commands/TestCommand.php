<?php

/**
 * Description of TestCommand
 *
 * @author Mateusz P <bananq@gmail.com>
 */

namespace glicerineexample\commands;

use Glicerine\validators\BooleanValidator;

class TestCommand extends \Glicerine\core\Command
{
    public function validation()
    {
        return [
            'on' => BooleanValidator::class
        ];
    }

    public function actions()
    {
        
    }

    public function beta()
    {
        echo "this is beta";
    }

    public function main()
    {
        echo "this is a test function";
    }
}
