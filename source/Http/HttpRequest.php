<?php declare(strict_types=1);

namespace HttpApi;

final class HttpRequest
{
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return strtoupper($_SERVER['REQUEST_METHOD']);
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return file_get_contents('php://input');
    }
}