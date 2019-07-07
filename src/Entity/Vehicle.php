<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Faker\Provider\DateTime;
use phpDocumentor\Reflection\Types\This;
use phpDocumentor\Reflection\Types\Float_;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="VehicleRepository")
 */
class Vehicle
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $brand;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $model;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $serialNumber;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $color;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="float")
     */
    private $autonomy;

    /**
     *
     * @Assert\NotBlank()
     * @ORM\Column(type="float")
     */
    private $dailyDistance;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="string")
     */
    private $matriculation;

    /**
     * @Assert\NotBlank()
     * @ORM\Column(type="float")
     */
    private $kilometers;

    /**
     * @Assert\DateTime()
     * @ORM\Column(type="datetime")
     */
    private $purchasingDate;

    /**
     * @ORM\Column(type="boolean")
     */
    private $state;

    /**
     * @ORM\Column(type="float")
     */
    private $minDailyPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $purchasingPrice;

    /**
     * @ORM\Column(type="float")
     */
    private $dailyPrice;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\VehicleType", inversedBy="vehicles")
     * @ORM\JoinColumn(nullable=false)
     */
    private $vehicleType;


    public function getId(): ?int
    {
        return $this->id;
    }


    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): self
    {
        $this->brand = $brand;

        return $this;
    }


    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }


    public function getSerialNumber(): string
    {
        return $this->serialNumber;
    }

    public function setSerialNumber(string $serialNumber): self
    {
        $this->serialNumber = $serialNumber;

        return $this;
    }


    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor(string $color): self
    {
        $this->color = $color;

        return $this;
    }


    public function getAutonomy(): float
    {
        return $this->autonomy;
    }

    public function setAutonomy(float $autonomy): self
    {
        $this->autonomy = $autonomy;

        return $this;
    }


    public function getDailyDistance(): float
    {
        return $this->dailyDistance;
    }

    public function setDailyDistance(float $dailyDistance): self
    {
        $this->dailyDistance = $dailyDistance;

        return $this;
    }


    public function getMatriculation(): string
    {
        return $this->matriculation;
    }

    public function setMatriculation(string $matriculation): self
    {
        $this->matriculation = $matriculation;

        return $this;
    }


    public function getKilometers(): float
    {
        return $this->kilometers;
    }

    public function setKilometers(float $kilometers): self
    {
        $this->kilometers = $kilometers;

        return $this;
    }


    public function getPurchasingDate(): DateTime
    {
        return $this->purchasingDate;
    }

    public function setPurchasingDate(DateTime $date): self
    {
        $this->purchasingDate = $date;

        return $this;
    }


    public function getState(): bool
    {
        return $this->state;
    }

    public function setState(bool $state): self
    {
        $this->state = $state;

        return $this;
    }


    public function getMinDailyPrice(): ?float
    {
        return $this->minDailyPrice;
    }

    public function setMinDailyPrice(float $minDailyPrice): self
    {
        $this->minDailyPrice = $minDailyPrice;

        return $this;
    }


    public function getPurchasingPrice(): ?float
    {
        return $this->purchasingPrice;
    }

    public function setPurchasingPrice(float $purchasingPrice): self
    {
        $this->purchasingPrice = $purchasingPrice;

        return $this;
    }


    public function getDailyPrice(): ?float
    {
        return $this->dailyPrice;
    }

    public function setDailyPrice(float $dailyPrice): self
    {
        $this->dailyPrice = $dailyPrice;

        return $this;
    }

    public function getVehicleType(): ?VehicleType
    {
        return $this->vehicleType;
    }

    public function setVehicleType(?VehicleType $vehicleType): self
    {
        $this->vehicleType = $vehicleType;

        return $this;
    }

}
