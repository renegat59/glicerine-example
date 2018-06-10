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

    protected function init()
    {
        $this->proto('beta', 'Beta description')
            ->addParamRule('on', RequiredValidator::class)
            ->addParamRule('on', BooleanValidator::class)
            ->addParamDescription('on', 'On Description')
            ->addParamRules('enabled', [
                [
                    'class' => BooleanValidator::class,
                    'filter' => false,
                    'tfValues' => ['yes', 'no']
                ],
                RequiredValidator::class
            ])
            ->addParamDescription('enabled', 'Enabled Description');
    }

    public function beta()
    {
        var_dump($this->getParam('on'));
        echo "this is beta";
        return ExitCode::SUCCESS;
    }

    public function main()
    {
        Output::writeLine("this is a test function", Color::BLUE);
        return ExitCode::SUCCESS;
    }
}
