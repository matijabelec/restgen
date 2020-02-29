<?php
declare(strict_types=1);

namespace Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class ApiController
{
    /**
     * @Route(
     *     "/data"
     * )
     */
    public function data(): Response
    {
        return new JsonResponse([
            'status' => 'ok',
            'version' => '0.1',
        ]);
    }
}
