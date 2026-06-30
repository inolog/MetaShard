<?php
/**
 * Tests for MetaShard
 */

use PHPUnit\Framework\TestCase;
use Metashard\Metashard;

class MetashardTest extends TestCase {
    private Metashard $instance;

    protected function setUp(): void {
        $this->instance = new Metashard(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Metashard::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
