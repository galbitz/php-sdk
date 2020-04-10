<?php

namespace GlobalPayments\Api\Entities\Exceptions;

class GatewayException extends ApiException
{
    /**
     * Response code
     *
     * @var string
     */
    public $responseCode;

    /**
     * Response message
     *
     * @var string
     */
    public $responseMessage;

    /**
     * Server response
     *
     * @var string
     */
    public $rawResponse;

    /**
     * Instantiates a new object
     *
     * @param string $message The exception message to throw.
     * @param \Exception $innerException The previous exception used for
     *                                   the exception chaining.
     */
    public function __construct(
        $message,
        $responseCode = null,
        $responseMessage = null,
        \Exception $innerException = null,
        $rawResponse = null
    ) {
        $this->responseCode = $responseCode;
        $this->responseMessage = $responseMessage;
        $this->rawResponse = $rawResponse;

        parent::__construct($message, $innerException);
    }
}
