<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeIntegrationTest extends GeneratorCommand
{
  protected $name = 'make:integration-test';

  protected $description = 'Create a new Integration Test class';

  protected $type = 'Integration Test';

  protected function getStub()
  {
    return __DIR__ . '/../../../stubs/integration-test.stub';
  }

  /**
   * By default, Laravel tests live in the `tests/` folder.
   * Adjust as you prefer (e.g., Tests\Integration).
   */
  protected function getDefaultNamespace($rootNamespace)
  {
    return 'Tests\\Integration';
  }

  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the integration test class.'],
    ];
  }
}
