<?php

namespace Api\DTO\Response\ComplianceStatus;

class ComplianceStatusDTOResponse
{
    public const STATUS_COMPLIANT = 'compliant';
    public const STATUS_NON_COMPLIANT = 'non_compliant';
    private int $status;
    private ?string $complianceStatus;
    private ?string $message = '';

    public function getComplianceStatus(): ?string
    {
        return $this->complianceStatus;
    }

    public function setComplianceStatus(?string $complianceStatus): void
    {
        $this->complianceStatus = $complianceStatus;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }
}