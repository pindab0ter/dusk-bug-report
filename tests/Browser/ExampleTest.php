<?php

/** @noinspection PhpUnhandledExceptionInspection */

declare(strict_types=1);

use Laravel\Dusk\Browser;
use Tests\Browser\Components\TestComponent;

test('basic example', function () {
    $this->browse(fn (Browser $browser) => $browser
        ->visit('/')
        ->within(
            selector: new TestComponent('@foo'),
            callback: fn (Browser $browser) => $browser // Fails in TestComponent::assert
                ->assertVisible('@foo.test')));
});
