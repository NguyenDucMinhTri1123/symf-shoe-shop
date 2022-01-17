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


}