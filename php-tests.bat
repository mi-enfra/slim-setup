@echo off
echo - - - - -
echo UNIT TESTS
echo - - - - -
@ call phpunit --bootstrap vendor/autoload.php src/ --whitelist src