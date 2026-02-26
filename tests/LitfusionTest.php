<?php
/**
 * Tests for LitFusion
 */

use PHPUnit\Framework\TestCase;
use Litfusion\Litfusion;

class LitfusionTest extends TestCase {
    private Litfusion $instance;

    protected function setUp(): void {
        $this->instance = new Litfusion(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Litfusion::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
