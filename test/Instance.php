<?php
namespace ClassLoader\Cache\tests\units;

require_once dirname(__DIR__) . '/scripts/init.php';

use \mageekguy\atoum;

class Instance extends atoum\test {

  public function testInit() {
    $cache = \ClassLoader\Cache\Instance::init();
    $this->assert->object($cache)->isInstanceOf('\\ClassLoader\\Cache\\Instance');
    $this->assert->array($cache->getPaths('unknown'))->isEmpty();
    $paths = array('/path/1', '/path/2');
    $class = 'MyClass';
    $this->assert->boolean($cache->savePaths($paths, $class))->isTrue();
    $this->assert->array($cache->getPaths($class))->isEqualTo($paths);
  }

}
