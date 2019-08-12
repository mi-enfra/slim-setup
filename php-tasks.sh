echo - - - - -
echo CODE SNIFFER
echo - - - - -
phpcs -s
echo - - - - -
echo UNIT TESTS AND COVERAGE REPORT
echo - - - - -
phpunit --bootstrap vendor/autoload.php src/ --whitelist src --coverage-html coverage-report --coverage-text=coverage-report.txt
echo - - - - -
echo STATIC ANALYSIS
echo - - - - -
vendor/bin/phpstan analyse .
echo - - - - -
echo METRICS REPORT
echo - - - - -
phpmetrics --report-html="./metrics-report" ./