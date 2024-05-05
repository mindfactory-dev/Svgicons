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
                'realicons' => 'node_modules/real-icons/{icon}.svg'
            ],
        ]);

        $result = $this->Icon->get('realicons.heroicons', 'size-6');
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
                'd' => 'M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5',
            ],
            '/svg',
        ];

        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function lucide(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'realicons' => 'node_modules/real-icons/{icon}.svg'
            ],
        ]);

        $result = $this->Icon->get('realicons.lucide', 'size-6');

        $expected = [
            '<!-- @license lucide-static v0.378.0 - ISC --',
            'svg' => [
                'class' => 'size-6',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'width' => '24',
                'height' => '24',
                'viewBox' => '0 0 24 24',
                'fill' => 'none',
                'stroke' => 'currentColor',
                'stroke-width' => '2',
                'stroke-linecap' => 'round',
                'stroke-linejoin' => 'round',
            ],
            ['path' => ['d' => 'M3.5 13h6']],
            ['path' => ['d' => 'm2 16 4.5-9 4.5 9']],
            ['path' => ['d' => 'M18 7v9',]],
            ['path' => ['d' => 'm14 12 4 4 4-4',]],
            '/svg',
        ];


        $this->assertHtml($expected, $result);
    }

    /** @test */
    public function materialDesign(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'realicons' => 'node_modules/real-icons/{icon}.svg'
            ],
        ]);

        $result = $this->Icon->get('realicons.material-design', 'size-6');

        $expected = [
            'svg' => [
                'class' => 'size-6',
                'xmlns' => 'http://www.w3.org/2000/svg',
                'width' => '24',
                'height' => '24',
                'viewBox' => '0 0 24 24',
            ],
            ['path' => ['d' => 'M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zM9 15H7.5v-4.5H6V9h3v6zm4.75 0L12 12.75V15h-1.5V9H12v2.25L13.75 9h1.75l-2.25 3 2.25 3h-1.75zm5.75-2.5H18V14h-1v-1.5h-1.5v-1H17V10h1v1.5h1.5v1z']],
            '/svg',
        ];


        $this->assertHtml($expected, $result);
    }
}
