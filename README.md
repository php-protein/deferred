<p align=center><img height=150 src="https://raw.githubusercontent.com/php-protein/docs/master/assets/protein-large.png"></p>

# Protein | Deferred
## Ensure deferred execution of code, even in case of fatal error.

### Install
---

```
composer require proteins/deferred
```

Require the class via :

```php
use Proteins\Deferred;
```

### Run code at function end or in case of error.
---

The passed callback will be queued for execution on Deferred object destruction.

```php
function duel(){
	echo "A: I will have the last word!\n";

	echo "B: Wanna bet?\n";

	$defer_B_last_word = new Deferred(function(){
		echo "B: Haha! Gotcha!\n";
	});
	
	die("A: I WIN!\n"); // Hahaha!

	echo "B: WUT?\n";
}

duel();
```

```
A: I will have the last word!
B: Wanna bet?
A: I WIN!
B: Haha! Gotcha!
```
