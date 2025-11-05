# Run on terminal

```sh
./vendor/bin/phpmetrics --report-html=reports/metrics src/app/
```

```sh
./vendor/bin/phpmd src/app text cleancode,codesize
```

```sh
./vendor/bin/phpunit --coverage-html reports/coverage
```

```sh
./vendor/bin/phpunit --coverage-html reports/html --coverage-filter src tests/InsertionShort1000DataTest.php
```

```sh
latexmk -xelatex tugas_report.tex 
```