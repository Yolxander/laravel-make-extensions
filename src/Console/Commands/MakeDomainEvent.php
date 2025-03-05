<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeDomainEvent extends GeneratorCommand
{
  protected $name = 'make:domain-event';

  protected $description = 'Create a new Domain Event class';

  protected $type = 'Domain Event';

  protected function getStub()
  {
    return __DIR__ . '/../../../stubs/domain-event.stub';
  }

  protected function getDefaultNamespace($rootNamespace)
  {
    return $rootNamespace . '\Domain\Events';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the domain event class.'],
    ];
  }
}
