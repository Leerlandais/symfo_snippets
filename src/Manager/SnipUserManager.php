<?php


namespace App\Manager;

use App\Abstract\AbstractManager;
use App\Entity\SnipUser;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Doctrine\ORM\EntityManagerInterface;
class SnipUserManager extends AbstractManager
{
    private SessionInterface $session;

    public function __construct(EntityManagerInterface $entityManager, SessionInterface $session)
    {
        parent::__construct($entityManager);
        $this->session = $session;
    }
    public function findUserById(int $id): ?SnipUser
    {
        return $this->entityManager->getRepository(SnipUser::class)->find($id);
    }

    public function saveUser(SnipUser $user): void
    {
        $this->entityManager->persist($user);
        $this->entityManager->flush();
    }

    public function deleteUser(SnipUser $user): void
    {
        $this->entityManager->remove($user);
        $this->entityManager->flush();
    }

    public function attemptUserLogin(string $name, string $pwd): bool
    {
        $name = trim($name);

        $user = $this->entityManager
            ->getRepository(SnipUser::class)
            ->findOneBy(['userLogin' => $name]);

        if (!$user) {
            return false;
        }

        if (!password_verify($pwd, $user->getSnipUserPass())) {
            return false;
        }

        $this->session->start();
        $this->session->set('id', session_id());
        $this->session->set('siteName', 'snippets');

        return true;
    }
}
