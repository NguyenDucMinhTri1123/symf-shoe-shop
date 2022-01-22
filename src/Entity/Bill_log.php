<?php

namespace App\Entity;


use App\Repository\Bill_logRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=Bill_logRepository::class)
 */
class Bill_log
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
    private $fullname;
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


}