**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | Configuration | [Usage](use.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)

# Configuration

You configure the Icon helper with arrays in `src/View/appView.php`

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    ...
]);
```

## Configuration options

### defaultCss ('')

Add a default value to your CSS class, like a default size or color.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'defaultCss' => 'size-6 text-white',
    ...
]);
```

```svg
// Output

<svg class="size-6 text-white">
    ...
</svg>
```

### delimiter ('.')

The delimiter to separate the IconSet and the icon name

```php
<?= $this->icon->get('iconSet.iconName') ?>
```

### iconSets (null)

You must have one icon set configured.

Use the icon name as the key and make sure to use `{icon}` in the path, it will be swapped to the icon name later.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'iconSetName' => '/path/to/{icon}.svg',
    ],
]);
```

```php
// In a view

<?= $this->icon->get('iconSet.iconName') ?>
```

```svg
// Output: content of the file iconName.svg

<svg>
    ...
</svg>
```

### overwriteCss (true)

CSS passed to the helper will be overwritten by default. Suppose you want it to be appended the overwriteCss to false.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'overwriteCss' => false,
    ...
]);
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | Configuration | [Usage](use.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)
