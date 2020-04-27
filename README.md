Skein
---
**Pure PHP-implementation without any extensions**

#### Install:
```php
composer require cast/skein
```

#### Usage:
```php
<?php

use function Cast\Crypto\Skein\skein256;

skein256('The quick brown fox jumps over the lazy dog');
// b3250457e05d3060b1a4bbc1428bc75a3f525ca389aeab96cfa34638d96e492a
```

Based on https://github.com/shift-reality/php-crypto. 