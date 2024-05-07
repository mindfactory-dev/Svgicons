**_Mindfactory/Svgicons_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

# Quick setup

```
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

For further details see the [Documentation](docs/README.md)
