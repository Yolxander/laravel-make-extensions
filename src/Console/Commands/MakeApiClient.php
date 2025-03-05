<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeApiClient extends GeneratorCommand
{
  protected $name = 'make:api-client';

  protected $description = 'Create a new API Client class';

  protected $type = 'API Client';

  protected function getStub()
  {
    return __DIR__ . '/../../stubs/api-client.stub';
  }

  protected function getDefaultNamespace($rootNamespace)
  {
    return $rootNamespace . '\ApiClients';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the API Client class.'],
    ];
  }
}
