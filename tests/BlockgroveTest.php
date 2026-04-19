<?php
/**
 * Tests for BlockGrove
 */

use PHPUnit\Framework\TestCase;
use Blockgrove\Blockgrove;

class BlockgroveTest extends TestCase {
    private Blockgrove $instance;

    protected function setUp(): void {
        $this->instance = new Blockgrove(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Blockgrove::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
