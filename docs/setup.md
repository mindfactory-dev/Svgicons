**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | Setup] | [Configuration](config.md) | [Usage](use.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)

# Setup

## Add the helper

Add the helper in `appView.php` to make it available in all your views, layouts, etc.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    ...
]);
```

## Configure the icon sets you want to use

You must have one icon set configured.

We have provided examples of some common libraries [here](icon-sets.md).

Under `iconSets` you add the name you want to use for your icon set as key.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'iconSet' => [
            'svg' => '/path/to/{icon}.svg'],
    ],
]);
```

```php
// In your view
<?= $this-Icon->get('iconSet.iconName') ?>
```

If you use default as a key, you only have to specify an icon name when you get the icon.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => '/path/to/{icon}.svg'],
    ],
]);
```

```php
// In your view
<?= $this-Icon->get('iconName') ?>
```

### For example

[Lucide](https://lucide.dev) stores there files in `node_modules/lucide-static/icons/`

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => 'node_modules/lucide-static/icons/{icon}.svg'],
    ],
]);
```

To use the Lucide `box.svg`

```php
<?= $this-Icon->get('box') ?>
```

See the [Configuration](config.md) section for more details.

---

[Requirements](req.md) | [Installation](install.md) | Setup | [Configuration](config.md) | [Usage](use.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)
