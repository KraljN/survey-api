<?php
namespace PHPSTORM_META {
    // Pest global functions
    expectedReturnValues(\it(), \PHPUnit\Framework\TestCase::class);
    expectedReturnValues(\test(), \PHPUnit\Framework\TestCase::class);
    expectedReturnValues(\pest(), \Pest\PestInstance::class);
    expectedReturnValues(\expect(), \Pest\Expectation::class);
    expectedReturnValues(\describe(), void);
    expectedReturnValues(\beforeEach(), void);
    expectedReturnValues(\afterEach(), void);
    expectedReturnValues(\beforeAll(), void);
    expectedReturnValues(\afterAll(), void);
    expectedReturnValues(\extend(), void);
    expectedReturnValues(\uses(), \Pest\TestCase::class);
    expectedReturnValues(\dataset(), array);
    expectedReturnValues(\skip(), void);
    expectedReturnValues(\only(), void);
    expectedReturnValues(\group(), void);
    expectedReturnValues(\depends(), void);
}
