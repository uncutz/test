<?php declare(strict_types=1);

namespace HttpApi;

final class HttpResponse
{
    /** @var int */
    private $statsCode;
    /** @var array<string, string> */
    private $headers;
    /** @var string */
    private $body;

    /**
     * @param int $statsCode
     * @param string[] $headers
     * @param string $body
     */
    public function __construct(int $statsCode, array $headers, string $body)
    {
        $this->statsCode = $statsCode;
        $this->headers = $headers;
        $this->body = $body;
    }

    /**
     * @return int
     */
    public function getStatsCode(): int
    {
        return $this->statsCode;
    }

    /**
     * @return array<string, string>
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }


}