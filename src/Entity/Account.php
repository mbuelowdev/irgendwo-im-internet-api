<?php

namespace App\Entity;

use App\Repository\AccountRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AccountRepository::class)]
class Account
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $email = null;

    #[ORM\Column(length: 255)]
    private ?string $password_hash = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $last_login = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $login_valid_until = null;

    #[ORM\Column(length: 1024, nullable: true)]
    private ?string $discord_auth_token = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $discord_auth_token_valid_until = null;

    #[ORM\Column]
    private ?bool $is_admin = null;

    #[ORM\Column(length: 255)]
    private ?string $nickname = null;

    #[ORM\Column(type: Types::BLOB, nullable: true)]
    private $avatar_image_blob = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getPasswordHash(): ?string
    {
        return $this->password_hash;
    }

    public function setPasswordHash(string $password_hash): self
    {
        $this->password_hash = $password_hash;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->last_login;
    }

    public function setLastLogin(?\DateTimeInterface $last_login): self
    {
        $this->last_login = $last_login;

        return $this;
    }

    public function getDiscordAuthToken(): ?string
    {
        return $this->discord_auth_token;
    }

    public function setDiscordAuthToken(?string $discord_auth_token): self
    {
        $this->discord_auth_token = $discord_auth_token;

        return $this;
    }

    public function getDiscordAuthTokenValidUntil(): ?\DateTimeInterface
    {
        return $this->discord_auth_token_valid_until;
    }

    public function setDiscordAuthTokenValidUntil(?\DateTimeInterface $discord_auth_token_valid_until): self
    {
        $this->discord_auth_token_valid_until = $discord_auth_token_valid_until;

        return $this;
    }

    public function getLoginValidUntil(): ?\DateTimeInterface
    {
        return $this->login_valid_until;
    }

    public function setLoginValidUntil(?\DateTimeInterface $login_valid_until): self
    {
        $this->login_valid_until = $login_valid_until;

        return $this;
    }

    public function isIsAdmin(): ?bool
    {
        return $this->is_admin;
    }

    public function setIsAdmin(bool $is_admin): self
    {
        $this->is_admin = $is_admin;

        return $this;
    }

    public function getNickname(): ?string
    {
        return $this->nickname;
    }

    public function setNickname(string $nickname): self
    {
        $this->nickname = $nickname;

        return $this;
    }

    public function getAvatarImageBlob()
    {
        return $this->avatar_image_blob;
    }

    public function setAvatarImageBlob($avatar_image_blob): self
    {
        $this->avatar_image_blob = $avatar_image_blob;

        return $this;
    }
}
