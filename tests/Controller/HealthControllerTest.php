<?php

declare(strict_types=1);

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use App\Controller\HealthController;

final class HealthControllerTest extends TestCase
{
    public function testHealthEndpointReturnsExpectedPayload(): void
    {
        $response = (new HealthController())();

        self::assertSame(200, $response->getStatusCode());
        self::assertSame(
            ['status' => 'ok', 'service' => 'symfony-secure-api'],
            json_decode((string) $response->getContent(), true, 512, JSON_THROW_ON_ERROR)
        );
    }
}
