# Siler

<p>
    <a href="https://travis-ci.org/leocavalcante/siler" target="_blank">
        <img src="https://img.shields.io/travis/leocavalcante/siler/master.svg?style=flat-square">
    </a>
    <a href="https://codecov.io/github/leocavalcante/siler" target="_blank">
        <img src="https://img.shields.io/codecov/c/github/leocavalcante/siler.svg?style=flat-square">
    </a>
    <a href="https://scrutinizer-ci.com/g/leocavalcante/siler/" target="_blank">
        <img src="https://img.shields.io/scrutinizer/g/leocavalcante/siler.svg?style=flat-square">
    </a>
    <a href="https://insight.sensiolabs.com/projects/703f233e-0738-4bf3-9d47-09d3c6de19b0" target="_blank">
        <img src="https://insight.sensiolabs.com/projects/703f233e-0738-4bf3-9d47-09d3c6de19b0/mini.png">
    </a>   
</p>

Keep it simple, *stupid*!

[API documentation](https://leocavalcante.github.io/siler/namespaces/Siler.html)

###### index.php
```php
<?php
/*K*/ require_once __DIR__.'/../vendor/autoload.php';
/*I*/ use function Siler\Route\route;
/*S*/ route('/', 'pages/home.php');
```
###### pages/home.php
```php
<?php
/*S*/ echo 'Hello World';
```

Get it?
[Check out this example](https://github.com/leocavalcante/siler-example)
