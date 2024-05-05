**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)

# Icon sets

The following icon sets are tested to work.

js = Available bu JavasScript install as npm  
c = Available in Composer

- [Heroicons](#heroicons)

## Heroicons

*https://heroicons.com (2.1.3) [ js ]*

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

## Lucide

*https://lucide.dev (0.378.0) [ js ]*

### Installation

```
npm install lucide-static
```

### Configuration

```php
$this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'lucide' => 'node_modules/lucide-static/icons/{icon}.svg',
    ],
]);
```

### Usage

```php
<?= $this->Icon->get('lucide.iconName') ?>
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | Icon sets | [Glossary](glos.md)
