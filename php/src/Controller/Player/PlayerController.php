<?php

namespace Guess\Controller\Player;

use Exception;
use Guess\Application\Handler\Player\CreatePlayerHandler;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class PlayerController
{
    private CreatePlayerHandler $createPlayer;

    public function __construct(CreatePlayerHandler $createPlayer)
    {
        $this->createPlayer = $createPlayer;
    }

    public function index(LoggerInterface $logger, Request $request): JsonResponse
    {
        $playerArray = json_decode($request->getContent(), true);

        try {
            $this->createPlayer->handle(
                [
                    'username' => $playerArray['username'],
                    'email' => $playerArray['email'],
                    'password' => $playerArray['password'],
                    'avatar' => 2
                ]
            );
        } catch (Exception $e) {
            $logger->error($e->getMessage());
            return new JsonResponse($e->getMessage());
        }

        return new JsonResponse('User created');
    }
}
