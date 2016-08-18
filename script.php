<?php

require_once __DIR__.'/autoload.php';

use Symfony\Component\Finder\Finder;

$finder = new Finder();
$finder->files()->in('C://xampp/htdocs/test/');
$finder->files()->name('*the.txt');
$finder->files()->name('*teh.txt');
foreach ($finder as $file)


{
   echo "<pre>";
   print_r(file_get_contents($file->getRealPath()));
   echo "</pre>";

    // Dump the absolute path
    //echo file_get_contents($file->getRealPath());
   //var_dump($file->getRealPath());


    // Dump the relative path to the file, omitting the filename
   // var_dump($file->getRelativePath());

    // Dump the relative path to the file
    //var_dump($file->getRelativePathname());
}
//
?>