<?php
/**
 * Application bootstrap
 *
 * @package BracketSpace/Toolkit
 */

namespace BracketSpace\Toolkit;

use Symfony\Component\Console\Application;

define( 'VERSION', '1.0.0' );

$app = new Application( 'BracketSpace Toolkit', VERSION );

$app->run();
