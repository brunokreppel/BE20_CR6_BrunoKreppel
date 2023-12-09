<?php

namespace App\Entity;

use App\Repository\EventsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EventsRepository::class)]
class Events
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $eventName = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $eventTimeDate = null;

    #[ORM\Column(length: 255)]
    private ?string $eventDescription = null;

    #[ORM\Column(length: 255)]
    private ?string $eventImg = null;

    #[ORM\Column]
    private ?int $eventCapacity = null;

    #[ORM\Column(length: 255)]
    private ?string $eventEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $eventPhoneNumber = null;

    #[ORM\Column(length: 255)]
    private ?string $eventAdress = null;

    #[ORM\Column(length: 255)]
    private ?string $eventUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $eventType = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEventName(): ?string
    {
        return $this->eventName;
    }

    public function setEventName(string $eventName): static
    {
        $this->eventName = $eventName;

        return $this;
    }

    public function getEventTimeDate(): ?\DateTimeInterface
    {
        return $this->eventTimeDate;
    }

    public function setEventTimeDate(\DateTimeInterface $eventTimeDate): static
    {
        $this->eventTimeDate = $eventTimeDate;

        return $this;
    }

    public function getEventDescription(): ?string
    {
        return $this->eventDescription;
    }

    public function setEventDescription(string $eventDescription): static
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    public function getEventImg(): ?string
    {
        return $this->eventImg;
    }

    public function setEventImg(string $eventImg): static
    {
        $this->eventImg = $eventImg;

        return $this;
    }

    public function getEventCapacity(): ?int
    {
        return $this->eventCapacity;
    }

    public function setEventCapacity(int $eventCapacity): static
    {
        $this->eventCapacity = $eventCapacity;

        return $this;
    }

    public function getEventEmail(): ?string
    {
        return $this->eventEmail;
    }

    public function setEventEmail(string $eventEmail): static
    {
        $this->eventEmail = $eventEmail;

        return $this;
    }

    public function getEventPhoneNumber(): ?string
    {
        return $this->eventPhoneNumber;
    }

    public function setEventPhoneNumber(string $eventPhoneNumber): static
    {
        $this->eventPhoneNumber = $eventPhoneNumber;

        return $this;
    }

    public function getEventAdress(): ?string
    {
        return $this->eventAdress;
    }

    public function setEventAdress(string $eventAdress): static
    {
        $this->eventAdress = $eventAdress;

        return $this;
    }

    public function getEventUrl(): ?string
    {
        return $this->eventUrl;
    }

    public function setEventUrl(string $eventUrl): static
    {
        $this->eventUrl = $eventUrl;

        return $this;
    }

    public function getEventType(): ?string
    {
        return $this->eventType;
    }

    public function setEventType(string $eventType): static
    {
        $this->eventType = $eventType;

        return $this;
    }
}
