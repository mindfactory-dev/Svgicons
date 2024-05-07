**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)

# Icon sets

The following icon sets are tested to work.

js = Available by JavasScript installer as npm  
c = Available in Composer

- [Heroicons](#heroicons)
- [Lucide](#lucide)

## Heroicons

*https://heroicons.com (2.1.3) [ js ]*

### Installation

```shell
npm install heroicons
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'tailwind.outline' => [
            'svg' => 'node_modules/heroicons/24/outline/{icon}.svg'
        ],
        'tailwind.solid' => [
            'svg' => 'node_modules/heroicons/24/solid/{icon}.svg'
        ],
        'tailwind.mini' => [
            'svg' => 'node_modules/heroicons/20/solid/{icon}.svg'
        ],
        'tailwind.micro' => [
            'svg' => 'node_modules/heroicons/16/solid/{icon}.svg'
        ],
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

## Lucide

*https://lucide.dev (0.378.0) [ js ]*

### Installation

```shell
npm install lucide-static
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'lucide' => [
            'svg' => 'node_modules/lucide-static/icons/{icon}.svg'
        ],
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('lucide.iconName') ?>
```

## Material Design (Material Symbols, Material Icons)

*https://fonts.google.com/icons (0.14.13) [ js ]*

Google does not currently maintain any npm package past v3 (2016). However, they recommend this one. These are automatically updated and published using GitHub Actions. Note: Google does not monitor or vet these packages.

### Installation

```shell
npm install @material-design-icons/svg@latest
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        iconSets' => [
            'material-design.filled' => [
                'svg' => 'node_modules/@material-design-icons/svg/filled/{icon}.svg',
                'addFill' => true,
            ],
            'material-design.outlined' => [
                'svg' => 'node_modules/@material-design-icons/svg/outlined/{icon}.svg',
                'addFill' => true,
            ],
            'material-design.round' => [
                'svg' => 'node_modules/@material-design-icons/svg/round/{icon}.svg',
                'addFill' => true,
            ],
            'material-design.sharp' => [
                'svg' => 'node_modules/@material-design-icons/svg/sharp/{icon}.svg',
                'addFill' => true,
            ],
            'material-design.two-tone' => [
                'svg' => 'node_modules/@material-design-icons/svg/two-tone/{icon}.svg',
                'addFill' => true,
            ],
        ],
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('material-design.filled.iconName') ?>
<?= $this->Icon->get('material-design.outlined.iconName') ?>
<?= $this->Icon->get('material-design.round.iconName') ?>
<?= $this->Icon->get('material-design.sharp.iconName') ?>
<?= $this->Icon->get('material-design.two-tone.iconName') ?>
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)
