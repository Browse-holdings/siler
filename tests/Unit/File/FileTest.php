<?php

declare(strict_types=1);

namespace Siler\Test\Unit\File;

use PHPUnit\Framework\TestCase;

use function Siler\File\concat_files;
use function Siler\File\recur_iter_dir;
use function Siler\File\recursively_iterated_directory;

class FileTest extends TestCase
{
    public function testRecursivelyIteratedDirectory()
    {
        $basedir = dirname(__DIR__, 2);
        $dir = recursively_iterated_directory("$basedir/fixtures");

        $this->assertContains("$basedir/fixtures/foo.php", $dir);
    }

    public function testRecursivelyIteratedDirectoryWithPattern()
    {
        $basedir = dirname(__DIR__, 2);
        $dir = recursively_iterated_directory("$basedir/fixtures", '/\.txt$/');

        $this->assertContains("$basedir/fixtures/php_input.txt", $dir);
    }

    public function testConcatFiles()
    {
        $basedir = dirname(__DIR__, 2);
        $result = concat_files(recur_iter_dir("$basedir/fixtures/concat/"), '');

        $this->assertSame("barfoo", $result);
    }
}
