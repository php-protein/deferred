<?php declare(strict_types=1);

/**
 * Deferred
 *
 * Run callback when script execution is stopped.
 *
 * @package Proteins
 * @author  "Stefano Azzolini"  <lastguest@gmail.com>
 *
 */

namespace Proteins;

class Deferred {
    protected $callback;
    protected $enabled = true;

    final public function __construct(callable $callback) {
        $this->callback = $callback;
    }

    final public function disarm() {
        $this->enabled = false;
    }

    final public function prime() {
        $this->enabled = true;
    }

    final public function __destruct() {
        if ($this->enabled) {
            \call_user_func($this->callback);
        }
    }
}
