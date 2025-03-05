<?php

namespace Yolxitron\MakeExtensions\Console\Commands;

use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputArgument;

class MakeTransformer extends GeneratorCommand
{
  /**
   * The name and signature of the console command.
   */
  protected $name = 'make:transformer';

  /**
   * The console command description.
   */
  protected $description = 'Create a new API Transformer class';

  /**
   * The type of class being generated.
   */
  protected $type = 'Transformer';

  /**
   * Get the stub file for the generator.
   */
  protected function getStub()
  {
    // If you're publishing stubs, you could do:
    // return base_path('stubs/make-extensions/transformer.stub');

    // Otherwise, reference stubs directly in your package:
    return __DIR__ . '/../../stubs/transformer.stub';
  }

  /**
   * Get the default namespace for the class.
   */
  protected function getDefaultNamespace($rootNamespace)
  {
    return $rootNamespace . '\Transformers';
  }

  /**
   * Get the console command arguments.
   */
  protected function getArguments()
  {
    return [
      ['name', InputArgument::REQUIRED, 'The name of the transformer class.'],
    ];
  }
}
