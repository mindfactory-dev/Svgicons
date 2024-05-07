**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | [Icon sets](icon-sets.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)

# Quick setup

```shell
composer require mindfactory/cakephp-svgicons
bin/cake plugin load Mindfactory/Svgicons
```

Add the helper in `src/View/appView.php`.

```php
 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => '/path/to/{icon}.svg'],
    ],
]);
```

Use the helper in your view

```php
<?= $this-Icon->get('iconName') ?>
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Usage](use.md) | [Icon sets](icon-sets.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)
