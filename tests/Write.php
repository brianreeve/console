<?php



require_once '../vendor/autoload.php';

use Console\Write;

Write::line('This is a default info line.');

Write::line('This is an success line.', 'success');

Write::line('This is an error info line.', 'error');

Write::line('This is an warning info line.', 'warning');

Write::line('This is an debug info line.', 'debug');

Write::line('This is an explicit info line.', 'info');

