<?php

/**
 * Description of TestCommand
 *
 * @author Mateusz P <bananq@gmail.com>
 */

namespace glicerineexample\commands;

use Glicerine\console\Color;
use Glicerine\console\Output;
use Glicerine\core\Command;
use Glicerine\core\ExitCode;
use Glicerine\validators\BooleanValidator;
use Glicerine\validators\NumericValidator;
use Glicerine\validators\RequiredValidator;

class TestCommand extends Command
{
    public function validationRules()
    {
        return [
            'beta' => [
                'on' => [BooleanValidator::class, RequiredValidator::class],
                'enabled' => [
                    [
                        'class' => BooleanValidator::class,
                        'filter' => false,
                        'tfValues' => ['yes', 'no']
                    ],
                    RequiredValidator::class
                ]
            ],
            'numbers' => [
                'num' => [
                    [
                        'class' => NumericValidator::class,
                        'onlyInt' => true,
                        'range' => [0, 10]
                    ]
                ],
                'bool' => [BooleanValidator::class]
            ]
        ];
    }

    protected function enabledActions(): array
    {
        return [
            'numbers'
        ];
    }

    public function numbers()
    {
        Output::writeLine($this->getParam('num'), Color::CYAN);
        return ExitCode::SUCCESS;
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
