<?php
/**
 * Created by PhpStorm.
 * User: linux
 * Date: 12/06/19
 * Time: 17:17
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\PackRepository")
 */
class Pack
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Employee", inversedBy="id")
     */
    private $employee_id;

    /**
     * @ORM\Column(type="string", length=50, nullable=true, unique=true)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime")
     */
    private $picked_at;

    /**
     * @ORM\Column(type="datetime")
     */
    private $deliver_at;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmployeeId(): ?int
    {
        return $this->employee_id;
    }

    public function setEmployeeId(?int $employee_id): self
    {
        $this->name = $employee_id;

        return $this;
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

    public function getPickedAt(): ?\DateTimeInterface
    {
        return $this->picked_at;
    }

    public function setPickedAt(\DateTimeInterface $picked_at): self
    {
        $this->picked_at = $picked_at;

        return $this;
    }

    public function getDeliverAt(): ?\DateTimeInterface
    {
        return $this->deliver_at;
    }

    public function setDeliverAt(\DateTimeInterface $deliver_at): self
    {
        $this->deliver_at = $deliver_at;

        return $this;
    }


}