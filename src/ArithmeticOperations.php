<?php
declare(strict_types=1);

namespace PrinsFrank\ArithmeticOperations;

interface ArithmeticOperations
{
    public function add(float $left, float $right): float;

    public function subtract(float $left, float $right): float;

    public function divide(float $dividend, float $divisor): float;

    public function multiply(float $left, float $right): float;

    public function modulus(float $dividend, float $divisor): float;

    public function power(float $base, float $exponent): float;
}
