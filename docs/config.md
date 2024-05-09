**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | Configuration | [Usage](use.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)

# Configuration

You configure the Icon helper, add an array as a second argument to `addHelper()`

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    ...
]);
```

## Configuration options

Configuration options could be added in two ways.

The common way is to add an array to the addHelper method.  
Most options could be added as a parameter to the get method. Used mostly to override global settings. See [Usage section](use.md) for more information.

You could set an option in a global scope or per iconSet.
Parameters override iconSet that overrides global settings.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
  'option' => 'value', // Global
  'iconSet' => [
    'option' => 'value', // Only this icon set
  ]
]);
```

### addFill (false)

Set to true to add fill="currentColor"

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'addFill' => true
    ...
]);
```

```svg
// Output

<svg fill="currentColor">
    ...
</svg>
```

### addStroke (false)

Set to true to add stroke="currentColor"

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'addStroke' => true
    ...
]);
```

```svg
// Output

<svg stroke="currentColor">
    ...
</svg>
```

### apendCss (false)

CSS passed to the helper will be overwritten by default. Set appendCss to true to append it instead.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'overwriteCss' => false,
    ...
]);
```

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
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'delimiter' => '/',
    ...
]);
```

```php
// In a view

<?= $this->icon->get('iconSet/iconName') ?>
```

### iconSets (null) requierd

- iconSet (null) requierd
  - svg (null) required

`iconSet`  
You must have one configured. Replace with the name you want to use. It could be anything, as long as it's unique.

`svg`  
The path to your icons. Make sure to use `{icon}` in the svg array; it will be swapped to the icon name later.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'iconSet' => [
            'svg' => '/path/to/{icon}.svg'],
            ...
    ],
]);
```

```php
// In a view

<?= $this->icon->get('iconSet.iconName') ?>
```

```svg
// Outputs the content of the file iconName.svg

<svg>
    ...
</svg>
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | Configuration | [Usage](use.md) | [Icon sets](icon-sets.md) | [Glossary](glos.md)
