## Trip Sorter Problem (Euler Path)
This problem is basically a Euler path problem in which each boarding pass could be considered 
as an edge in graph between two points(location) and this particular graph is a directed graph 
the journey consisting of boarding passes could be an Euler path or an Euler tour.
 
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
## PHP Documentor
```
vendor/phpdocumentor/phpdocumentor/bin/phpdoc -d . --ignore vendor/ -t doc
```
Generated document path:
```
docs/index.html
```
