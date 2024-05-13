<?php

namespace Battis\PHPUnit\PDO\Fixture;

/**
 * @package battis\phpunit-pdo
 */
class Column
{
    private string $name;
    private mixed $value;

    public function __construct(string $name, mixed $value = null)
    {
        $this->name = $name;
        $this->value = $value;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValue(): mixed
    {
        return $this->value;
    }

    public function equals(Column $other): bool
    {
        return $this->name == $other->name && $this->value == $other->value;
    }
}
