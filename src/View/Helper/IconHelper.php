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
        'delimiter' => '.',
        'iconSets' => [
            'default' => 'heroicons/24/outline',
        ],
        'pathToNodeModulesFolder' => ROOT,
    ];


    public function get(string $icon): string
    {

        if (str_contains($icon, $this->getConfig('delimiter'))) {
            $iconSet = substr($icon, 0, strrpos($icon, $this->getConfig('delimiter')));
            $iconName = substr(strrchr($icon, $this->getConfig('delimiter')), 1);
        } else {
            $iconName = $icon;
            $iconSet = 'default';
        }
        // debug($iconName);
        // debug($iconSet);

        $iconSets = $this->getConfig('iconSets');

        // debug($iconSets);
        // debug($iconSets[$iconSet]);

        $selectedIconSet = array_key_exists($iconSet, $iconSets) ? trim($iconSets[$iconSet], '/') : '';

        // debug($selectedIconSet);

        $iconPath = rtrim($this->getConfig('pathToNodeModulesFolder'), '/') . DS . 'node_modules' . DS . $selectedIconSet . DS . $iconName . '.svg';

        // debug($iconPath);

        // debug(file_exists($iconPath));

        if (!file_exists($iconPath)) {
            return '';
        }

        return file_get_contents($iconPath);
    }
}
