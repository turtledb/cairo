--TEST--
CairoSurface->copyPage() method
--SKIPIF--
<?php
if(!extension_loaded('cairo')) die('skip - Cairo extension not available');
if(!method_exists('CairoSurface', 'copyPage')) die('skip - CairoSurface->copyPage not available');
?>
--FILE--
<?php
$surface = new CairoImageSurface(CairoFormat::ARGB32, 50, 50);
var_dump($surface);

$surface->copyPage();

/* Wrong number args */
try {
    $surface->copyPage('foo');
    trigger_error('We should bomb here');
} catch (CairoException $e) {
    echo $e->getMessage(), PHP_EOL;
}
?>
--EXPECTF--
object(CairoImageSurface)#%d (0) {
}
CairoSurface::copyPage() expects exactly 0 parameters, 1 given