<?php

declare(strict_types=1);

namespace HttpProvider\Interfaces;

interface ResponseInterface
{
	public function setStatusCode(int $code): self;

	public function getStatusCode(): int;
	
	public function setContent(string $content): self;

	public function getContent(): string;

	public function toArray(): ?array;

	public function toObject(): ?object;
}
