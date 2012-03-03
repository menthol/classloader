<?php

namespace Extensions\ClassLoader\PathBuilder;

abstract class PathBuilder {

  protected function __construct() {}
  protected function __clone() {}
  protected function __wakeup() {}
  protected function __set_state() {}

  abstract public function getPath($class);

}
