**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | [Glossary](glos.md)

# Quick setup

```
composer require mindfactory/cakephp-svgicons
bin/cake plugin load Mindfactory/Svgicons
```

Add the helper.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => '/path/to/{icon}.svg',
    ],
]);
```

Use the helper

```php
<?= $this-Icon->get('iconName') ?>
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | [Glossary](glos.md)
