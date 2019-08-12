@echo off
echo - - - - -
echo CODE SNIFFER
echo - - - - -
@ call phpcs -s
echo - - - - -
echo UNIT TESTS AND COVERAGE REPORT
echo - - - - -
@ call phpunit --bootstrap vendor/autoload.php src/ --whitelist src --coverage-html coverage-report --coverage-text=coverage-report.txt
echo - - - - -
echo METRICS REPORT
echo - - - - -
@ call phpmetrics --report-html="./metrics-report" ./