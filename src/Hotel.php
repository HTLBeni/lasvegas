<?php

namespace Htlw3r\Lasvegas;

class Hotel
{
    private string $name;
    private int $stars;

    private string $image;
    private string $description;


    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return int
     */
    public function getStars(): int
    {
        return $this->stars;
    }

    /**
     * @param int $stars
     */
    public function setStars(int $stars): void
    {
        $this->stars = $stars;
    }

    /**
     * @param string $name
     * @param int $stars
     */
    public function __construct(string $name, int $stars,string $image,string $description)
    {
        $this->name = $name;
        $this->stars = $stars;
        $this->image = $image;
        $this->description = $description;

    }




}


