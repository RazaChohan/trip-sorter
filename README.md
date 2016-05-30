## Trip Sorter Problem (Euler Path)
```
This problem is basically an Euler path problem in which each boarding pass could be considered 
as an edge in graph between two points(location) and this particular graph is a directed graph 
the journey consisting of boarding passes could be an Euler path or an Euler tour.
``` 
### Installation

```
php composer.phar install
```

### Execution

```
php index.php
```

## Running Tests

```
vendor/phpunit/phpunit/phpunit tests
```
## PHP Documentor (Generating Document)
```
vendor/phpdocumentor/phpdocumentor/bin/phpdoc -d . --ignore vendor/ -t doc
```
## Generated Document Path
```
docs/index.html
```
