<?php

namespace App\Entity;


use App\Repository\UserCartRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserCartRepository::class)
 */
class UserCart
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
    private $product_name;
    /**
     *  @ORM\Column(type="integer", nullable=true)
     */
    private $product_id;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number;
    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $is_active;
    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $status;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $created_at;
    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $update_at;


}