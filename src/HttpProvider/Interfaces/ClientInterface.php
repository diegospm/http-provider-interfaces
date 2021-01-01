<?php

declare(strict_types=1);

namespace HttpProvider\Interfaces;

interface ClientInterface
{
	public function attachResponse(ResponseInterface $response): self;
	
	public function setUrl(string $url): self;

	public function setMethod(string $method): self;

	public function setParams(array $params): self;

	/**
	 * set call body
	 *
	 * @param mixed $body
	 */
	public function setBody($body): self;
	
	public function send(): ResponseInterface;
}
