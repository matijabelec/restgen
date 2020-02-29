<?php
declare(strict_types=1);

namespace Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class RandomController extends AbstractController
{
    /**
     * @Route(
     *     "/random/{limit}",
     *     requirements={"limit"="[1-9][0-9]*"}
     * )
     */
    public function randomNumber(int $limit): Response
    {
        $number = random_int(0, $limit);

        return $this->render('micro/random.html.twig', [
            'number' => $number,
        ]);
    }
}
