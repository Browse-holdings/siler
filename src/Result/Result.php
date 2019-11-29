<?php

declare(strict_types=1);

namespace Siler\Result;

use JsonSerializable;

/**
 * @template <T>
 */
abstract class Result implements JsonSerializable
{
    /** @var mixed */
    private $data;
    /** @var int */
    private $code;
    /** @var string */
    private $id;

    public function __construct($data = null, int $code = 0, string $id = null)
    {
        $this->id = is_null($id) ? base64_encode(uniqid()) : $id;
        $this->data = $data;
        $this->code = $code;
    }

    /**
     * @return mixed|null
     */
    public function unwrap()
    {
        return $this->data;
    }

    abstract public function isFailure(): bool;

    abstract public function isSuccess(): bool;
}

function success($data = null, int $code = 0, string $id = null): Success
{
    return new Success($data, $code, $id);
}

function failure($data = null, int $code = 1, string $id = null): Failure
{
    return new Failure($data, $code, $id);
}
