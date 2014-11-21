Postal Code to State converter
==============================

This is a simple class to convert from a US ZIP code to a US state. The [data comes
from Wikipedia](http://en.wikipedia.org/wiki/List_of_ZIP_code_prefixes).

Usage
-----

```php
<?php

// Returns 'NY'
$state = \Caxy\PostalCode::toState('10271');

// Returns 'IL'
$state = \Caxy\PostalCode::toState('60607');
```
