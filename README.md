[![Build Status](https://travis-ci.org/Crowdstar/ranger.svg?branch=master)](https://travis-ci.org/Crowdstar/ranger

Ranger allows you to mimic the range function in PHP as an Iterator, conserving memory for large ranges.

# Installation

```bash
composer require crowdstar/ranger:~1.0.0
```

# Sample Usage
## Old way
```php
<?php

foreach (range(1, 100000) as $number) {
    echo $number;
}
```

## New way
```php
<?php

use CrowdStar\Iterators\Ranger;

$range = Ranger::start(1, 100000);

foreach ($range as $number) {
	echo $number;
}
```
