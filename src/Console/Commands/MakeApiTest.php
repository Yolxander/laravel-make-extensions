<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeApiTest extends GeneratorCommand
{
  protected $name = 'make:api-test';

  protected $description = 'Create a new API Test class';

  protected $type = 'API Test';

  protected function getStub()
  {
    return __DIR__ . '/../../api-test.stub';
  }

  /**
   * Adjust as desired. For example, maybe `Tests\Feature\Api`.
   */
  protected function getDefaultNamespace($rootNamespace)
  {
    return 'Tests\\Api';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the API test class.'],
    ];
  }
}
