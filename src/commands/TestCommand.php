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
    public function validationRules()
    {
        return [
            'beta' => [
                'on' => [BooleanValidator::class],
                'enabled' => [
                    [
                        'class' => BooleanValidator::class,
                        'filter' => false
                    ]
                ]
            ]
        ];
    }

    public function actions()
    {
        
    }

    public function beta()
    {
        var_dump($this->getParam('on'));
        echo "this is beta";
    }

    public function main()
    {
        echo "this is a test function";
    }
}
