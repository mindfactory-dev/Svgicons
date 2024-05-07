<?php

declare(strict_types=1);

namespace Mindfactory\Svgicons\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Mindfactory\Svgicons\View\Helper\IconHelper;

/**
 * Mindfactory\Svgicons\View\Helper\IconHelperRealIcons Test Case
 */
class IconHelperRealIconsTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \Mindfactory\Svgicons\View\Helper\IconHelper
     */
    protected $Icon;

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        error_reporting(E_ALL);
        parent::setUp();
        $view = new View();
        $this->Icon = new IconHelper($view);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Icon);

        parent::tearDown();
    }

    /** @test */
    public function heroicons(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'realicons' => [
                    'svg' => 'node_modules/real-icons/{icon}.svg'
                ]
            ],
        ]);

        $result = $this->Icon->get('realicons.heroicons', 'size-6');


        $this->assertStringContainsString('<svg', $result);
        $this->assertStringContainsString('class="size-6"', $result);
        $this->assertStringContainsString('"currentColor"', $result);
        $this->assertStringContainsString('</svg>', $result);
    }

    /** @test */
    public function lucide(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'realicons' => [
                    'svg' => 'node_modules/real-icons/{icon}.svg'
                ]
            ],
        ]);

        $result = $this->Icon->get('realicons.lucide', 'size-6');

        $this->assertStringContainsString('<svg', $result);
        $this->assertStringContainsString('class="size-6"', $result);
        $this->assertStringContainsString('"currentColor"', $result);
        $this->assertStringContainsString('</svg>', $result);
    }

    /** @test */
    public function materialDesign(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'realicons' => [
                    'svg' => 'node_modules/real-icons/{icon}.svg',
                    'addFill' => true,
                ]
            ],
        ]);

        $result = $this->Icon->get('realicons.material-design', 'size-6');

        $this->assertStringContainsString('<svg', $result);
        $this->assertStringContainsString('class="size-6"', $result);
        $this->assertStringContainsString('"currentColor"', $result);
        $this->assertStringContainsString('</svg>', $result);
    }

    /** @test */
    public function bootstrap(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'realicons' => [
                    'svg' => 'node_modules/real-icons/{icon}.svg'
                ]
            ],
        ]);

        $result = $this->Icon->get('realicons.bootstrap', 'size-6');

        $this->assertStringContainsString('<svg', $result);
        $this->assertStringContainsString('class="size-6"', $result);
        $this->assertStringContainsString('"currentColor"', $result);
        $this->assertStringContainsString('</svg>', $result);
    }
}
