<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/19
 * Time: 17:16
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=5)
     */
    private $latitute;

    /**
     * @ORM\Column(type="decimal", precision=10, scale=5)
     */
    private $longitude;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return (string) $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLatitude(): double
    {
        return (double) $this->latitute;
    }

    public function setLatitude(?double $latitude): self
    {
        $this->latitute = $latitude;

        return $this;
    }

    public function getLongitude(): double
    {
        return (double) $this->longitude;
    }

    public function setLongitude(?double $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

}