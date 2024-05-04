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
        'defaultCss' => null,
        'delimiter' => '.',
        'iconSets' => [],
        'overwriteCss' => true,
    ];


    public function get(string $icon, string | null $cssClass = null): string
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

        // Check if iconset is availible
        if (!array_key_exists($iconSet, $iconSets)) {
            return '';
        }
        // Select iconset and remove slaches
        $selectedIconTemplate = trim($iconSets[$iconSet], '/');

        // Create the path to the icon and remove slashes
        $iconPath = ROOT .  str_replace('{icon}', $iconName, $selectedIconTemplate);


        // Returns empty if icon dosent exists
        if (!file_exists($iconPath)) {
            return '';
        }

        // Get svg from file and remove any class attributes
        $iconContent = file_get_contents($iconPath);
        $iconContent = preg_replace('/ class=".*?"/i', '', $iconContent);

        // Get default css if none is provided
        if (!$cssClass) {
            $cssClass = $this->getConfig('defaultCss');
        }

        // If default css is set and css params should append
        if (!$this->getConfig('overwriteCss') and $this->getConfig('defaultCss')) {
            $cssClass = $this->getConfig('defaultCss') . ' ' . $cssClass;
        }

        // Add css to svg tag
        if ($cssClass) {
            $iconContent = str_replace('<svg ', '<svg class="' . $cssClass . '" ', $iconContent);
        }

        return $iconContent;
    }
}
