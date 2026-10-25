<?php
/**
 * Placeholder until plugin packages under plugins/ ship their own test suites.
 */

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class MonorepoSmokeTest extends TestCase {

	public function test_composer_autoload_is_available(): void {
		$this->assertTrue(class_exists(TestCase::class));
	}
}
