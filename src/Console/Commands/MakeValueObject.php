<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeValueObject extends GeneratorCommand
{
  protected $name = 'make:value-object';

  protected $description = 'Create a new Value Object class';

  protected $type = 'Value Object';

  protected function getStub()
  {
    return __DIR__ . '/../../value-object.stub';
  }

  protected function getDefaultNamespace($rootNamespace)
  {
    return $rootNamespace . '\Domain\ValueObjects';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the value object class.'],
    ];
  }
}
