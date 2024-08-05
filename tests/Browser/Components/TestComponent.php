<?php

namespace Tests\Browser\Components;

use Laravel\Dusk\Browser;
use Laravel\Dusk\Component;

class TestComponent extends Component
{
    public function __construct(
        private readonly string $selector
    ) {
    }

    public function selector(): string
    {
        return "{$this->selector}.test"; // Becomes '[dusk="$selector.test"]' instead of '[dusk="$selector"].test'
    }

    public function assert(Browser $browser): void
    {
        $browser->assertVisible($this->selector()); // Fails here
    }

    public function elements(): array
    {
        return [];
    }
}
