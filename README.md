ScmRevisionNumberRetriever
==========================

[![Build Status](https://travis-ci.org/issei-m/ScmRevisionNumberRetriever.svg?branch=master)](https://travis-ci.org/issei-m/ScmRevisionNumberRetriever)

This library just reads specified file content and returns it.

If you use Capistrano 3 to deploy app, The `REVISION` file is located to your application's root directory.
This means it might help you to see the current revision which project now refers to like this:

```php
$retriever = new \Issei\ScmRevisionNumberRetriever('/path/to/your-project/REVISION');
var_dump($retriever->getCurrentRevisionNumber()); // content of "/path/to/your-project/REVISION"
```
