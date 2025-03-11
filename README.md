# Yolxander Laravel Make Extensions

**Yolxander Laravel Make Extensions** is a Composer package that adds custom `php artisan make:*` commands for scaffolding additional file types commonly used in modern Laravel applications. It provides generators for Transformers, API Clients, Integration/API Tests, Domain Events, Value Objects, Services, and Actions, making it easier to maintain a clean project structure.

## Features

- **Transformers** (`make:transformer`): Converts your Eloquent models or domain data into consistent JSON response formats.
- **API Clients** (`make:api-client`): Scaffolds classes to handle third-party HTTP calls.
- **Integration Tests** (`make:integration-test`): Quickly create tests for multi-system flows (e.g., DB + external API).
- **API Tests** (`make:api-test`): Generate test boilerplate to verify your application’s API endpoints.
- **Domain Events** (`make:domain-event`): Event classes for Domain-Driven Design or event sourcing.
- **Value Objects** (`make:value-object`): Immutable classes that encapsulate domain logic (e.g., `Money`, `Email`).
- **Services** (`make:service`): Encapsulates business logic or external operations.
- **Actions** (`make:action`): Single-use-case classes to make your application logic more modular.

## Requirements

- **PHP** `>= 8.0` (or higher)
- **Laravel** `8, 9, 10, 11, or 12` (depending on your version constraints)
- **illuminate/support** and **illuminate/console** matching the above Laravel versions

## Installation

1. **Install via Composer**:

   ```bash
   composer require yolxander/laravel-make-extensions
   ```
   Or specify a version constraint if needed:
   ```bash
   composer require yolxander/laravel-make-extensions:^1.3
   ```

2. **Publish stubs** (optional):

   ```bash
   php artisan vendor:publish --tag=make-extensions-stubs
   ```
   This will copy the stub files into your project so you can customize them locally (e.g., `stubs/make-extensions/transformer.stub`).

## Usage

Once installed, you should see the following new Artisan commands:

- **Make Transformer**
  ```bash
  php artisan make:transformer UserTransformer
  ```
  Creates a `UserTransformer` in `app/Transformers` (or your default namespace).

- **Make API Client**
  ```bash
  php artisan make:api-client SomeServiceClient
  ```
  Generates an `API Client` class in `app/ApiClients`.

- **Make Integration Test**
  ```bash
  php artisan make:integration-test PaymentIntegrationTest
  ```
  Creates a test in `tests/Integration` for combined system flows.

- **Make API Test**
  ```bash
  php artisan make:api-test UserApiTest
  ```
  Generates a test class in `tests/Api` (or similar) for endpoint testing.

- **Make Domain Event**
  ```bash
  php artisan make:domain-event OrderShippedEvent
  ```
  Scaffolds a domain event in `app/Domain/Events`.

- **Make Value Object**
  ```bash
  php artisan make:value-object Money
  ```
  Creates an immutable class in `app/Domain/ValueObjects`.

- **Make Service**
  ```bash
  php artisan make:service PaymentService
  ```
  Spawns a service class in `app/Services`.

- **Make Action**
  ```bash
  php artisan make:action CreateOrderAction
  ```
  Adds an action class in `app/Actions`.

> **Tip**: Each command automatically references a matching stub file. If you’ve published stubs, you can edit them to fit your exact coding style.

## Configuration

- **Service Provider**: This package includes a service provider (`MakeExtensionsServiceProvider`) that’s auto-discovered by Laravel (thanks to the `"extra"` block in the package’s `composer.json`). No manual registration is needed unless you’re not relying on auto-discovery.
- **Stubs Path**: By default, each command references its stub file at `src/stubs/`. If you publish stubs, you can modify your command classes to point to the published location or leave the defaults as-is.

## Contributing

1. Fork the repo & clone it locally.
2. Create a new branch for your feature or bug fix: `git checkout -b feature/awesome-new-command`.
3. Commit your changes: `git commit -m "Add a new make:awesome command"`.
4. Push to GitHub: `git push origin feature/awesome-new-command`.
5. Open a Pull Request on GitHub and describe the proposed changes.

## License

This package is open-sourced software licensed under the [MIT license](LICENSE.md).
*(Or use “proprietary” or another license, depending on your `composer.json` configuration.)*

---

### About Yolxander Laravel Make Extensions

**Yolxander** designed this package to simplify the scaffolding of additional file types beyond default Laravel commands. With these commands, you can keep your code organized by generating stubs for domain events, value objects, or specialized tests—particularly helpful on teams practicing Domain-Driven Design, advanced testing, or large-scale API development.

For questions, ideas, or support, feel free to open an issue or submit a pull request. Thank you for using **Yolxander Laravel Make Extensions**!
