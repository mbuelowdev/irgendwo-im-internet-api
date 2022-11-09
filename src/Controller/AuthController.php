<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class AuthController extends AbstractController
{
    #[Route('/login/default', name: 'app_login_default')]
    public function login_default(): JsonResponse
    {
        // TODO(anyone): validate parameters

        // TODO(anyone): lookup username and compare with hashed password

        // TODO(anyone): create session in db, set user cookie

        // TODO(anyone): redirect to frontend with valid cookie

        return $this->json([
            'message' => 'Success', 
        ]);
    }

    #[Route('/login/discord', name: 'app_login_discord')]
    public function login_discord(): JsonResponse
    {
        // TODO(anyone): redirect to discord, probably create nonce

        return $this->json([
            'message' => 'Success',
        ]);
    }

    #[Route('/login/discord/create', name: 'app_login_discord_create')]
    public function login_discord_create(): JsonResponse
    {
        // TODO(anyone): save the received code and fetch the auth token from discord

        // TODO(anyone): fetch username, email and avatar from discord with auth token

        // TODO(anyone): create session in db, set user cookie

        // TODO(anyone): redirect to frontend with valid cookie

        return $this->json([
            'message' => 'Success',
        ]);
    }

    #[Route('/login/verify', name: 'app_login_verify')]
    public function login_verify(): JsonResponse
    {
        // TODO(anyone): verify that the cookie is valid

        // TODO(anyone): set max login time as cache headers for nginx

        return $this->json([
            'message' => 'Success',
        ]);
    }

    #[Route('/logout', name: 'app_logout')]
    public function logout(): JsonResponse
    {
        // TODO(anyone): delete session in db, unset user cookie

        return $this->json([
            'message' => 'Success',
        ]);
    }
}
