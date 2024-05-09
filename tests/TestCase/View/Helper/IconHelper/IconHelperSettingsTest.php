<?php

declare(strict_types=1);

namespace Mindfactory\Svgicons\Test\TestCase\View\Helper\IconHelper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Mindfactory\Svgicons\View\Helper\IconHelper;

/**
 * Mindfactory\Svgicons\View\Helper\IconHelper Test Case
 */
class IconHelperSettingsTest extends TestCase
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

    // Test addFill

    /** @test */
    public function addFill_in_root(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('addFill', true);

        $result = $this->Icon->get('provider-a.real-no-currentcolor');
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'fill' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function addFfill_in_iconSet(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('iconSets.provider-a.addFill', true);

        $result = $this->Icon->get('provider-a.real-no-currentcolor');
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'fill' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function addFfill_in_options(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');

        $result = $this->Icon->get('provider-a.real-no-currentcolor', '', ['addFill' => true]);
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'fill' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    // Test Addstroke

    /** @test */
    public function addStoke_in_root(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('addStroke', true);

        $result = $this->Icon->get('provider-a.real-no-currentcolor');
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function addStroke_in_iconSet(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('iconSets.provider-a.addStroke', true);

        $result = $this->Icon->get('provider-a.real-no-currentcolor');
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function addStroke_in_options(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');

        $result = $this->Icon->get('provider-a.real-no-currentcolor', '', ['addStroke' => true]);
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    // Test appendCss

    /** @test */
    public function appendCss_not_set(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('defaultCss', 'size-4');

        $result = $this->Icon->get('provider-a.real', 'size-6');
        $expected = [
            'svg' => [
                'class' => 'size-6',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'fill' => 'none',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function appendCss_in_root(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('defaultCss', 'size-4');
        $this->Icon->setConfig('appendCss', true);

        $result = $this->Icon->get('provider-a.real', 'text-white');
        $expected = [
            'svg' => [
                'class' => 'size-4 text-white',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'fill' => 'none',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }


    /** @test */
    public function appendCss_in_iconSet(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('defaultCss', 'size-4');
        $this->Icon->setConfig('iconSets.provider-a.appendCss', true);

        $result = $this->Icon->get('provider-a.real', 'text-white');
        $expected = [
            'svg' => [
                'class' => 'size-4 text-white',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'fill' => 'none',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function appendCss_in_options(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('defaultCss', 'size-4');

        $result = $this->Icon->get('provider-a.real', 'text-white', ['appendCss' => true]);
        $expected = [
            'svg' => [
                'class' => 'size-4 text-white',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'fill' => 'none',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    // Test defaultCss

    /** @test */
    public function defaultCss_in_root(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('defaultCss', 'size-4');


        $result = $this->Icon->get('provider-a.real');
        $expected = [
            'svg' => [
                'class' => 'size-4',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'fill' => 'none',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function defaultCss_in_iconSet(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('defaultCss', 'size-6');
        $this->Icon->setConfig('iconSets.provider-a.defaultCss', 'size-4');


        $result = $this->Icon->get('provider-a.real');
        $expected = [
            'svg' => [
                'class' => 'size-4',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'fill' => 'none',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'stroke' => 'currentColor',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    // Test delimiter


    /** @test */
    public function delimiter_in_root(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('delimiter', '/');


        $result = $this->Icon->get('provider-a/a-a');
        $expected = 'svg-a-a';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function overide_root_in_iconSet(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('addStroke', true);
        $this->Icon->setConfig('iconSets.provider-a.addStroke', false);

        $result = $this->Icon->get('provider-a.real-no-currentcolor');
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function overide_root_in_options(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('addStroke', true);

        $result = $this->Icon->get('provider-a.real-no-currentcolor', '', ['addStroke' => false]);
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function overide_iconSet_in_options(): void
    {
        $this->Icon->setConfig('iconSets.provider-a.svg', 'node_modules/provider-a/{icon}.svg');
        $this->Icon->setConfig('iconSets.provider-a.addStroke', true);

        $result = $this->Icon->get('provider-a.real-no-currentcolor', '', ['addStroke' => false]);
        $expected = [
            'svg' => [
                'xmlns' => 'http://www.w3.org/2000/svg',
                'viewBox' => '0 0 24 24',
                'stroke-width' => '1.5',
                'aria-hidden' => 'true',
                'data-slot' => 'icon',
            ],
            'path' => [
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
                'd' => 'M5 12h14',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }
}
