# PHP Command Line Spinners

[![Build Status](https://travis-ci.org/alexeyco/php-cli-spinner.svg?branch=master)](https://travis-ci.org/alexeyco/php-cli-spinner)
[![StyleCI](https://styleci.io/repos/127398089/shield?style=flat&branch=master)](https://styleci.io/repos/127398089?branch=master)

Awesome spinners for PHP inspired by [cli-spinners](https://github.com/sindresorhus/cli-spinners).

## Example

```php
$spinner = new Spinner\Spinner(Spinner\DOTS);

for ($i = 1; $i < 10000; $i++) {
    $spinner->tick('Example');

    // Execute unpredictable task, for example:
    usleep(80 * 1000);
}
```

## License

```
MIT License

Copyright (c) 2018 Alexey Popov

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
```
