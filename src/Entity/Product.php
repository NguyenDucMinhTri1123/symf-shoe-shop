<?php

namespace App\Entity;


use App\Repository\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductRepository::class)
 */
class Product
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $name;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=10000, nullable=true)
     */
    private $detail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $producer;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $price;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $giam_gia;
    /**
     * @ORM\Column(type="string", length=1000, nullable=true)
     */
    private $img_list;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $img_show;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $view;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $buyed;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $size;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $color;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $is_active;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDetail(): ?string
    {
        return $this->detail;
    }

    public function setDetail(?string $detail): self
    {
        $this->detail = $detail;

        return $this;
    }

    public function getProducer(): ?string
    {
        return $this->producer;
    }

    public function setProducer(?string $producer): self
    {
        $this->producer = $producer;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(?int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getGiamGia(): ?string
    {
        return $this->giam_gia;
    }

    public function setGiamGia(?string $giam_gia): self
    {
        $this->giam_gia = $giam_gia;

        return $this;
    }

    public function getImgList(): ?string
    {
        return $this->img_list;
    }

    public function setImgList(?string $img_list): self
    {
        $this->img_list = $img_list;

        return $this;
    }

    public function getView(): ?int
    {
        return $this->view;
    }

    public function setView(?int $view): self
    {
        $this->view = $view;

        return $this;
    }

    public function getBuyed(): ?int
    {
        return $this->buyed;
    }

    public function setBuyed(?int $buyed): self
    {
        $this->buyed = $buyed;

        return $this;
    }

    public function getSize(): ?int
    {
        return $this->size;
    }

    public function setSize(?int $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

        return $this;
    }

    public function getNumber(): ?int
    {
        return $this->number;
    }

    public function setNumber(?int $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getIsActive(): ?int
    {
        return $this->is_active;
    }

    public function setIsActive(?int $is_active): self
    {
        $this->is_active = $is_active;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeInterface $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    public function getImgShow(): ?string
    {
        return $this->img_show;
    }

    public function setImgShow(?string $img_show): self
    {
        $this->img_show = $img_show;

        return $this;
    }


}