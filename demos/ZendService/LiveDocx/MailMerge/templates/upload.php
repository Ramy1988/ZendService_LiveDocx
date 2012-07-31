<?php

include_once realpath('../../../../Bootstrap.php');


use ZendService\LiveDocx\DemoHelper as Helper;
use ZendService\LiveDocx\MailMerge;

Helper::printLine(
    PHP_EOL . 'Uploading Locally Stored Templates to Server' .
    PHP_EOL .
    PHP_EOL
);

$mailMerge = new MailMerge();

$mailMerge->setUsername(DEMOS_ZEND_SERVICE_LIVEDOCX_USERNAME)
          ->setPassword(DEMOS_ZEND_SERVICE_LIVEDOCX_PASSWORD);

print('Uploading template... ');
$mailMerge->uploadTemplate('template-1.docx');
print('DONE.' . PHP_EOL);

print('Uploading template... ');
$mailMerge->uploadTemplate('template-2.docx');
print('DONE.' . PHP_EOL);

print(PHP_EOL);

unset($mailMerge);