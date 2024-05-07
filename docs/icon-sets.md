**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)

# Icon sets

The following icon sets are tested to work.

npm = Available by JavasScript installer as npm  
c = Available in Composer

- [Bootstrap](#bootstrap)
- [Font Awesome ](#font-awesome)
- [Feather ](#feather)
- [Heroicons](#heroicons)
- [Lucide](#lucide)
- [Material design](#material-design)

## Bootstrap

*https://icons.getbootstrap.com (1.11.3) [ c | npm ]*

### Installation

#### npm

```shell
npm i bootstrap-icons
```

#### composer

```shell
composer require twbs/bootstrap-icons
```

### Configuration

#### npm

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'bootstrap' => [
            'svg' => 'node_modules/bootstrap-icons/icons/{icon}.svg',
        ],
    ],
]);
```

#### composer

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
       'bootstrap' => [
            'svg' => 'vendor/twbs/bootstrap-icons/icons/{icon}.svg',
        ],
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('bootstrap.iconName') ?>
```

## Font Awesome

*https://fontawesome.com (6.5.2) [ c | npm ]*

### Installation

#### npm

2024-05-07: npm version uses version 5, use composer for version 6

```shell
npm i fontawesome-free
```

#### composer

```shell
composer require fortawesome/font-awesome
```

### Configuration

#### npm

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'fontawesome.brands' => [
            'svg' => 'node_modules/fontawesome-free/svgs/brands/{icon}.svg',
            'addFill' => true,
        ],
        'fontawesome.regular' => [
            'svg' => 'node_modules/fontawesome-free/svgs/regular/{icon}.svg',
            'addFill' => true,
        ],
        'fontawesome.solid' => [
            'svg' => 'node_modules/fontawesome-free/svgs/solid/{icon}.svg',
            'addFill' => true,
        ],
    ],
]);
```

#### composer

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
       'fontawesome.brands' => [
            'svg' => 'vendor/fortawesome/font-awesome/svgs/brands/{icon}.svg',
            'addFill' => true,
        ],
        'fontawesome.regular' => [
            'svg' => 'vendor/fortawesome/font-awesome/svgs/regular/{icon}.svg',
            'addFill' => true,
        ],
        'fontawesome.solid' => [
            'svg' => 'vendor/fortawesome/font-awesome/svgs/solid/{icon}.svg',
            'addFill' => true,
        ],
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('fontawesome.brands.iconName') ?>
<?= $this->Icon->get('fontawesome.regular.iconName') ?>
<?= $this->Icon->get('fontawesome.solid.iconName') ?>
```

## Feather

*https://feathericons.com (4.29.0) [ npm ]*

### Installation

```shell
npm install feather-icons
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'feather' => [
            'svg' => 'node_modules/feather-icons/dist/icons/{icon}.svg',
        ],
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('feather.iconName') ?>
```

## Heroicons

*https://heroicons.com (2.1.3) [ npm ]*

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

*https://lucide.dev (0.378.0) [ npm ]*

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

## Material Design

*https://fonts.google.com/icons (0.14.13) [ npm ]*

Google does not currently maintain any npm package past v3 (2016). However, they recommend this one. These are automatically updated and published using GitHub Actions. Note: Google does not monitor or vet these packages.

### Installation

```shell
npm install @material-design-icons/svg@latest
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
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
