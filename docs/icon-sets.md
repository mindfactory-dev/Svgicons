**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)

# Icon sets

The following icon sets are tested to work.

js = Available bu JavasScript install as npm  
c = Available in Composer

## [Heroicons](https://heroicons.com) [ js ]

Beautiful hand-crafted SVG icons, by the makers of Tailwind CSS.
A set of 450+ free MIT-licensed SVG icons. Available as basic SVG icons and via first-party React and Vue libraries.

### Installation

```
npm install heroicons
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'tailwind.outline' => 'node_modules/heroicons/24/outline/{icon}.svg',
        'tailwind.solid' => 'node_modules/heroicons/24/solid/{icon}.svg',
        'tailwind.mini' => 'node_modules/heroicons/20/solid/{icon}.svg',
        'tailwind.micro' => 'node_modules/heroicons/16/solid/{icon}.svg',
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('tailwind.outline.iconName') ?>
<?= $this->Icon->get('tailwind.solid.iconName') ?>
<?= $this->Icon->get('tailwind.mini.iconName') ?>
<?= $this->Icon->get('tailwind.micro.iconName') ?>
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)
