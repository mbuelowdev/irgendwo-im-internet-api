<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

use App\Repository\AccountRepository;

class AccountsController extends AbstractController
{
    #[Route('/api/v1/accounts', name: 'app_accounts_get', condition: "context.getMethod() in ['GET']")]
    public function accounts_get(AccountRepository $accRepo): JsonResponse
    {
        $accs = $accRepo->findAll();

        return $this->json([
            'message' => 'Unimplemented',
        ]);
    }

    #[Route('/api/v1/accounts/create', name: 'app_accounts_create', condition: "context.getMethod() in ['POST']")]
    public function accounts_create(int $account_id): JsonResponse
    {
        return $this->json([
            'message' => 'Unimplemented',
        ]);
    }

    #[Route('/api/v1/accounts/delete/{account_id}', name: 'app_accounts_delete', condition: "context.getMethod() in ['POST']")]
    public function accounts_delete(int $account_id): JsonResponse
    {
        return $this->json([
            'message' => 'Unimplemented',
        ]);
    }

    #[Route('/api/v1/accounts/reset/{account_id}', name: 'app_accounts_reset', condition: "context.getMethod() in ['POST']")]
    public function accounts_reset(int $account_id): JsonResponse
    {
        return $this->json([
            'message' => 'Unimplemented',
        ]);
    }
}
