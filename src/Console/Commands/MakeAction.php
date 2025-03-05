<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeAction extends GeneratorCommand
{
  protected $name = 'make:action';

  protected $description = 'Create a new Action (Use Case) class';

  protected $type = 'Action';

  protected function getStub()
  {
    return __DIR__ . '/../../../stubs/action.stub';
  }

  protected function getDefaultNamespace($rootNamespace)
  {
    return $rootNamespace . '\Actions';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the action class.'],
    ];
  }
}
