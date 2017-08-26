<?php

/**
 * Description of TestCommand
 *
 * @author Mateusz P <bananq@gmail.com>
 */

namespace glicerineexample\commands;

use Glicerine\core\Command;
use Glicerine\core\ExitCode;
use Glicerine\validators\BooleanValidator;

class TestCommand extends Command
{
    public function validationRules()
    {
        return [
            'beta' => [
                'on' => [BooleanValidator::class],
                'enabled' => [
                    [
                        'class' => BooleanValidator::class,
                        'filter' => false,
                        'tfValues' => ['yes', 'no']
                    ]
                ]
            ]
        ];
    }

    protected function enabledActions(): array
    {
        return [
//            'beta'
        ];
    }

    public function beta()
    {
        var_dump($this->getParam('on'));
        echo "this is beta";
        return ExitCode::SUCCESS;
    }

    public function main()
    {
        echo "this is a test function";
        return ExitCode::SUCCESS;
    }
}
