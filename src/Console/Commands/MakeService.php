<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeService extends GeneratorCommand
{
  protected $name = 'make:service';

  protected $description = 'Create a new Service class';

  protected $type = 'Service';

  protected function getStub()
  {
    return __DIR__ . '/../../service.stub';
  }

  protected function getDefaultNamespace($rootNamespace)
  {
    return $rootNamespace . '\Services';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the service class.'],
    ];
  }
}
