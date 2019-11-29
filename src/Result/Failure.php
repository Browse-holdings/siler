<?php

declare(strict_types=1);

namespace Siler\Result;

final class Failure extends Result
{
    public function __construct($data = null, int $code = 1, string $id = null)
    {
        parent::__construct($data, $code, $id);
    }

    /**
     * @return false
     */
    public function isSuccess(): bool
    {
        return false;
    }

    /**
     * @return true
     */
    public function isFailure(): bool
    {
        return true;
    }
}
