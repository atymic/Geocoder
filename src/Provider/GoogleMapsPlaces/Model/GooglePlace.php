<?php

declare(strict_types=1);

/*
 * This file is part of the Geocoder package.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @license    MIT License
 */

namespace Geocoder\Provider\GoogleMapsPlaces\Model;

use Geocoder\Model\Address;

/**
 * @author atymic <atymicq@gmail.com>
 */
final class GooglePlace extends Address
{
    /**
     * @var string|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var array
     */
    private $resultType = [];

    /**
     * @var string|null
     */
    private $formattedAddress;

    /**
     * @var string|null
     */
    private $icon;

    /**
     * @var PlusCode|null
     */
    private $plusCode;

    /**
     * @var Photo[]|null
     */
    private $photos;

    /**
     * @var int|null
     */
    private $priceLevel;

    /**
     * @var float|null
     */
    private $rating;

    /**
     * @var bool
     */
    private $permanentlyClosed = false;

    /**
     * @see https://developers.google.com/places/place-id
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param null|string $id
     *
     * @return GooglePlace
     */
    public function withId(string $id = null)
    {
        $new = clone $this;
        $new->id = $id;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param null|string $name
     *
     * @return GooglePlace
     */
    public function withName(string $name = null)
    {
        $new = clone $this;
        $new->name = $name;

        return $new;
    }

    /**
     * @return array
     */
    public function getResultType(): array
    {
        return $this->resultType;
    }

    /**
     * @param array $resultType
     *
     * @return GooglePlace
     */
    public function withResultType(array $resultType)
    {
        $new = clone $this;
        $new->resultType = $resultType;

        return $new;
    }

    /**
     * @return null|string
     */
    public function getFormattedAddress()
    {
        return $this->formattedAddress;
    }

    /**
     * @param string|null $formattedAddress
     *
     * @return GooglePlace
     */
    public function withFormattedAddress(string $formattedAddress = null)
    {
        $new = clone $this;
        $new->formattedAddress = $formattedAddress;

        return $new;
    }

    /**
     * @return string|null
     */
    public function getIcon(): string
    {
        return $this->icon;
    }

    public function withIcon(string $icon = null)
    {
        $new = clone $this;
        $new->icon = $icon;

        return $new;
    }

    /**
     * @return PlusCode|null
     */
    public function getPlusCode(): PlusCode
    {
        return $this->plusCode;
    }

    public function withPlusCode(PlusCode $plusCode = null)
    {
        $new = clone $this;
        $new->plusCode = $plusCode;

        return $new;
    }

    /**
     * @return Photo[]|null
     */
    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function withPhotos(array $photos = null)
    {
        $new = clone $this;
        $new->photos = $photos;

        return $new;
    }

    /**
     * @see https://developers.google.com/places/web-service/search#find-place-responses
     *
     * 0 — Free
     * 1 — Inexpensive
     * 2 — Moderate
     * 3 — Expensive
     * 4 — Very Expensive
     *
     * @return int|null
     */
    public function getPriceLevel(): int
    {
        return $this->priceLevel;
    }

    public function withPriceLevel(int $priceLevel = null)
    {
        $new = clone $this;
        $new->priceLevel = $priceLevel;

        return $new;
    }

    /**
     * @return float|null
     */
    public function getRating(): float
    {
        return $this->rating;
    }

    public function withRating(float $rating = null)
    {
        $new = clone $this;
        $new->rating = $rating;

        return $new;
    }

    /**
     * @return bool
     */
    public function isPermanentlyClosed(): bool
    {
        return $this->permanentlyClosed;
    }

    public function setPermanentlyClosed()
    {
        $new = clone $this;
        $new->permanentlyClosed = true;

        return $new;
    }
}
