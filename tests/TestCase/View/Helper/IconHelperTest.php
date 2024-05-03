<?php

declare(strict_types=1);

namespace Mindfactory\Svgicons\Test\TestCase\View\Helper;

use Cake\TestSuite\TestCase;
use Cake\View\View;
use Mindfactory\Svgicons\View\Helper\IconHelper;

/**
 * Mindfactory\Svgicons\View\Helper\IconHelper Test Case
 */
class IconHelperTest extends TestCase
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
    public function returns_icon_content(): void
    {
        $this->Icon->setConfig('iconSets', ['provider-a' => 'provider-a']);

        $result = $this->Icon->get('provider-a.a-a');
        $expected = 'svg-a-a';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function default_icon_set_when_no_one_provided(): void
    {

        $result = $this->Icon->get('heroicon');
        $expected = 'svg-heroicon';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function default_icon_set_when_one_is_provided(): void
    {
        $this->Icon->setConfig('iconSets', ['default' => 'provider-a/']);

        $result = $this->Icon->get('a-a');
        $expected = 'svg-a-a';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function wrong_icon_name(): void
    {
        $result = $this->Icon->get('wrong-icon-name');
        $expected = '';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function wrong_provider_name(): void
    {
        $result = $this->Icon->get('wrong-provider-name.icon');
        $expected = '';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function with_other_delimiter(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'provider-a' => 'provider-a'
            ],
            'delimiter' => '/'
        ]);

        $result = $this->Icon->get('provider-a/a-a');
        $expected = 'svg-a-a';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function node_modules_in_difrent_path(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'provider-b' => 'provider-b'
            ],
            'pathToNodeModulesFolder' => ROOT . 'path/to/node_modules/folder/',
        ]);

        $result = $this->Icon->get('provider-b.b-a');
        $expected = 'svg-b-a';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function setting_with_slashes(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'provider-b' => '/provider-b/'
            ],
            'pathToNodeModulesFolder' => ROOT . 'path/to/node_modules/folder/',
        ]);

        $result = $this->Icon->get('provider-b.b-a');
        $expected = 'svg-b-a';

        $this->assertEquals($expected, $result);
    }

    /** @test */
    public function setting_without_slashes(): void
    {
        $this->Icon->setConfig([
            'iconSets' => [
                'provider-b' => 'provider-b'
            ],
            'pathToNodeModulesFolder' => ROOT . 'path/to/node_modules/folder',
        ]);

        $result = $this->Icon->get('provider-b.b-a');
        $expected = 'svg-b-a';

        $this->assertEquals($expected, $result);
    }
}
