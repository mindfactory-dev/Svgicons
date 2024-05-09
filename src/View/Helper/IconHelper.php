<?php

declare(strict_types=1);

namespace Mindfactory\Svgicons\View\Helper;

use Cake\View\Helper;
use Cake\View\View;

/**
 * Icon helper
 */
class IconHelper extends Helper
{
    /**
     * Default configuration.
     *
     * @var array<string, mixed>
     */
    protected array $_defaultConfig = [
        'addFill' => false,
        'addStroke' => false,
        'appendeCss' => false,
        'defaultCss' => null,
        'delimiter' => '.',
        'iconSets' => [],
    ];

    public function get(string $icon, string | null $cssClass = null, array $options = []): string
    {
        // Extract iconset and icon name from icon params
        if (str_contains($icon, $this->getConfig('delimiter'))) {
            $iconSet = substr($icon, 0, strrpos($icon, $this->getConfig('delimiter')));
            $iconName = substr(strrchr($icon, $this->getConfig('delimiter')), 1);
        } else {
            $iconName = $icon;
            $iconSet = 'default';
        }

        // Load availible iconSets
        $iconSets = $this->getConfig('iconSets');

        // Check if icon set is availible
        if (!array_key_exists($iconSet, $iconSets)) {
            return '';
        }

        // Select iconset and remove slaches
        $selectedIconTemplate = trim($iconSets[$iconSet]['svg'], '/');

        // Create the path to the icon and remove slashes
        $iconPath = rtrim(ROOT, '/') . DS . str_replace('{icon}', $iconName, $selectedIconTemplate);


        // Returns empty if icon dosent exists
        if (!file_exists($iconPath)) {
            return '';
        }

        $config = $this->getDefaultConfig($iconSet, $options);

        // Get svg from file and remove any class attributes
        $iconContent = file_get_contents($iconPath);
        $iconContent = preg_replace('/ class=".*?"/i', '', $iconContent);

        // Add stroke if needed
        if ($config['addStroke']) {
            $iconContent = str_replace('<svg', '<svg stroke="currentColor"', $iconContent);
        }

        // Add fill if needed
        if ($config['addFill']) {
            $iconContent = str_replace('<svg', '<svg fill="currentColor"', $iconContent);
        }

        // Get default css if none is provided
        if (!$cssClass) {
            $cssClass = $config['defaultCss'];
        }

        // If default css is set and css params should append
        if ($config['appendCss'] and $config['defaultCss']) {
            $cssClass = $config['defaultCss'] . ' ' . $cssClass;
        }

        // Add css to svg tag
        if ($cssClass) {
            $iconContent = str_replace('<svg', '<svg class="' . $cssClass . '"', $iconContent);
        }

        return $iconContent;
    }

    protected function getDefaultConfig(string $iconSet, array $options): array
    {
        // AddFill
        if (array_key_exists('addFill', $options)) {
            $addFill = $options['addFill'];
        } elseif (is_bool($this->getConfig('iconSets.' . $iconSet . '.addFill'))) {
            $addFill = $this->getConfig('iconSets.' . $iconSet . '.addFill');
        } elseif (is_bool($this->getConfig('addFill'))) {
            $addFill = $this->getConfig('addFill');
        } else {
            $addFill = false;
        }


        // AddStroke
        if (array_key_exists('addStroke', $options)) {
            $addStroke = $options['addStroke'];
        } elseif (is_bool($this->getConfig('iconSets.' . $iconSet . '.addStroke'))) {
            $addStroke = $this->getConfig('iconSets.' . $iconSet . '.addStroke');
        } elseif (is_bool($this->getConfig('addStroke'))) {
            $addStroke = $this->getConfig('addStroke');
        } else {
            $addStroke = false;
        }

        // AppendCss
        if (array_key_exists('appendCss', $options)) {
            $appendCss = $options['appendCss'];
        } elseif (is_bool($this->getConfig('iconSets.' . $iconSet . '.appendCss'))) {
            $appendCss = $this->getConfig('iconSets.' . $iconSet . '.appendCss');
        } elseif (is_bool($this->getConfig('appendCss'))) {
            $appendCss = $this->getConfig('appendCss');
        } else {
            $appendCss = false;
        }

        // defaultCss
        if ($this->getConfig('iconSets.' . $iconSet . '.defaultCss')) {
            $defaultCss = $this->getConfig('iconSets.' . $iconSet . '.defaultCss');
        } elseif ($this->getConfig('defaultCss')) {
            $defaultCss = $this->getConfig('defaultCss');
        } else {
            $defaultCss = false;
        }

        return [
            'addFill' => $addFill,
            'addStroke' => $addStroke,
            'appendCss' => $appendCss,
            'defaultCss' => $defaultCss,
        ];
    }
}
