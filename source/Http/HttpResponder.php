<?php declare(strict_types=1);

namespace HttpApi;

final class HttpResponder
{
    /**
     * @param HttpResponse $response
     */
    public function respond(HttpResponse $response): void
    {
        header(
            "HTTP/1.1 {$response->getStatsCode()}"
            . StatusCodeMessages::getHttpStatusMessage($response->getStatsCode())
        );

        foreach ($response->getHeaders() as $name => $value) {
            header("$name : $value");
        }

        echo $response->getBody();
        echo 'responder-test';
        exit(0);
    }
}