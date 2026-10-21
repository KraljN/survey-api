<?php

/**
 * @noinspection PhpUnused
 * @noinspection PhpUndefinedNamespace
 * @noinspection PhpUndefinedClass
 * @noinspection PhpMissingReturnTypeInspection
 * @noinspection PhpMissingStubsInspection
 */

namespace {
    use Closure;
    use Pest\Expectation;
    use Pest\PestInstance;
    use PHPUnit\Framework\TestCase;

    if (false) {
        /**
         * Register a test.
         */
        function test(string $description, Closure $closure): mixed {}

        /**
         * Register a test (alias for test).
         */
        function it(string $description, Closure $closure): mixed {}

        /**
         * Describe a test group.
         */
        function describe(string $description, Closure $closure): void {}

        /**
         * Register a beforeEach hook.
         */
        function beforeEach(Closure $closure): void {}

        /**
         * Register an afterEach hook.
         */
        function afterEach(Closure $closure): void {}

        /**
         * Register a beforeAll hook.
         */
        function beforeAll(Closure $closure): void {}

        /**
         * Register an afterAll hook.
         */
        function afterAll(Closure $closure): void {}

        /**
         * Create an expectation.
         */
        function expect(mixed $value): Expectation {}

        /**
         * Get the Pest instance.
         */
        function pest(): PestInstance {}

        /**
         * Skip the current test.
         */
        function skip(string $message = ''): void {}

        /**
         * Mark the current test as todo.
         */
        function todo(string $message = ''): void {}

        /**
         * Get the current test case.
         */
        function getTestCase(): ?TestCase {}
    }
}
