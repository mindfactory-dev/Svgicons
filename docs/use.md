**_Mindfactory/Svgicons · Documentation_**  
_CakePHP helper to use SVG icons installed with a package manager like npm_

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | [Icon sets](icon-sets.md) | Usage | [Glossary](glos.md)

# Usage

Use the icon helper in views, elements, or layouts. For more information about using cakePHP helpers, see the documentation in [the cookbook](https://book.cakephp.org/5/en/views/helpers.html)

To use the icon helper with the default library or icon set.

```php
<?= $this-Icon->get('iconName') ?>
```

Use the icon helper with an icon set defined

```php
<?= $this-Icon->get('iconSet.iconName') ?>
```

Use the icon helper with CSS added to the SVG tag, like size or color properties.

```php
<?= $this-Icon->get('iconSet.iconName', 'cssClasses') ?>
```

```svg
//Output
<svg class="cssClasses">
    ...
</svg>
```

## Scenarios

### One Icon set

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => ROOT . 'node_modules/library/{icon}.svg'
        ],
    ],
]);
```

```php
// In a view
<?= $this->icon->get('iconName') ?>
```

### Library with two icon sets

Setup the one you use most as default and the other as more specific.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => ROOT . 'node_modules/library/solid/{icon}.svg'
        ],
        'solid' => [
            'svg' => ROOT . 'node_modules/library/solid/{icon}.svg'
        ],
        'outline' => [
            'svg' => ROOT . 'node_modules/library/outline/{icon}.svg'
        ],
    ],
]);

// default and solid are the same, and only one is required
```

```php
// In a view

<?= $this->icon->get('iconName') ?> // Returns solid
<?= $this->icon->get('solid.iconName') ?> // Returns solid
<?= $this->icon->get('outline.iconName') ?> // Returns outline
```

### Two Libraries with two icon sets

Setup the one you use most as default and the other as more specific.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => ROOT . 'node_modules/library-a/{icon}.svg'
        ],
        'library-a' => [
            'svg' => ROOT . 'node_modules/library-a/{icon}.svg'
        ],
        'library-b' => [
            'svg' => ROOT . 'node_modules/library-b/{icon}.svg'
        ],
    ],
]);
// default and library-a are the same, and only one is required
```

```php
// In a view
<?= $this->icon->get('iconName') ?> // Returns library A
<?= $this->icon->get('library-a.iconName') ?> // Returns library A
<?= $this->icon->get('library-b.iconName') ?> // Returns library B
```

### Two Libraries with many icon sets

Setup the one you use most as default and the other as more specific.

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' => [
            'svg' => ROOT . 'node_modules/library-a/solid/{icon}.svg'
        ],
        'library-a'=> [
            'svg' => ROOT . 'node_modules/library-a/solid/{icon}.svg'
        ],
        'library-a.solid' => [
            'svg' => ROOT . 'node_modules/library-a/solid/{icon}.svg'
        ],
        'library-a.outline' => [
            'svg' => ROOT . 'node_modules/library-a/outline/{icon}.svg'
        ],
        'library-b' => [
            'svg' => ROOT . 'node_modules/library-b/outline/{icon}.svg'
        ],
        'library-b.solid' => [
            'svg' => ROOT . 'node_modules/library-b/outline/{icon}.svg'
        ],
        'library-b.outline' => [
            'svg' => ROOT . 'node_modules/library-b/outline/{icon}.svg'
        ],
    ],
]);
// default, library-a, and library-a.solid are the same, and only one is required
// library-b and library-b.solid are the same, and only one is required
```

```php
// In a view

<?= $this->icon->get('iconName') ?>                    // Returns solid from library A
<?= $this->icon->get('library-a.iconName') ?>         // Returns solid from library A
<?= $this->icon->get('library-a.solid.iconName') ?>   // Returns solid from library A
<?= $this->icon->get('library-a.outline.iconName') ?> // Returns outline from library A
<?= $this->icon->get('library-b.iconName') ?>         // Returns solid from library B
<?= $this->icon->get('library-b.solid.iconName') ?>   // Returns solid from library B
<?= $this->icon->get('library-b.outline.iconName') ?> // Returns outline from library B
```

### Special folder structure

Some libraries have a different folder structure and have the icon name as a folder.

We use [Material Icons](https://fonts.google.com/icons) as an example

```php
// src/View/appView.php

 $this->addHelper('Mindfactory/Svgicons.Icon', [
    'iconSets' => [
        'default' =>  [
            'svg' => ROOT . 'node_modules/@material.icons/svg/svg/{icon}/baseline.svg'
        ],
        'baseline' => [
            'svg' => ROOT . 'node_modules/@material.icons/svg/svg/{icon}/baseline.svg'
        ],
        'outline' =>  [
            'svg' => ROOT . 'node_modules/@material.icons/svg/svg/{icon}/outline.svg'
        ],
        'round' =>    [
            'svg' => ROOT . 'node_modules/@material.icons/svg/svg/{icon}/round.svg'
        ],
        'sharp' =>    [
            'svg' => ROOT . 'node_modules/@material.icons/svg/svg/{icon}/sharp.svg'
        ],
        'twotone' =>  [
            'svg' => ROOT . 'node_modules/@material.icons/svg/svg/{icon}/twotone.svg'
        ],
        ],
]);
// default and baseline are the same, and only one is required
```

```php
// In a view

<?= $this->icon->get('iconName') ?>          // Returns baseline
<?= $this->icon->get('baseline.iconName') ?> // Returns baseline
<?= $this->icon->get('outline.iconName') ?>  // Returns outline
<?= $this->icon->get('round.iconName') ?>    // Returns round
<?= $this->icon->get('sharp.iconName') ?>    // Returns sharp
<?= $this->icon->get('twotone.iconName') ?>  // Returns twotone
```

---

[Requirements](req.md) | [Installation](install.md) | [Setup](setup.md) | [Configuration](config.md) | Usage | [Icon sets](icon-sets.md) | [Glossary](glos.md)
