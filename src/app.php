<?
require_once __DIR__.'/../bootstrap.php';

use App\Foo\Bar;

dispatch($argv);

function dispatch($argv) {
  if (count($argv) < 2) {
    echo 'なにか一つ引数を指定して下さい';
    exit(0);
  }
  [, $arg1] = $argv;
  echo Bar::baz($arg1);
}
