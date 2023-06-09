<?php


namespace App\Modules\Part\Domain\ValueObjects;


use InvalidArgumentException;

class Price
{
    protected $value;

    public function __construct(float $value)
    {
        if ($value < 0) {
            throw new InvalidArgumentException('Price value cannot be negative.');
        }

        $this->value = $value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return number_format($this->value, 2);
    }
}
