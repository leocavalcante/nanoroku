<?php declare(strict_types=1);

use Hyperf\Nano\Factory\AppFactory;

require_once __DIR__ . '/vendor/autoload.php';

$app = AppFactory::create('0.0.0.0', (int) (getenv('PORT') ?: 9501));
$app->get('/', fn(): string => 'Hello, World!');
$app->run();