<?php

namespace Api\DTO\Response\ComplianceRequirements;

use Api\DTO\ComplianceRequirementDTO\ComplianceRequirementDTO;

class ComplianceRequirementsResponseDTO
{
    private int $status;
    private string $message = '';
    /**
     * @var ComplianceRequirementDTO[]
     */
    private array $complianceRequirements = [];

    public function getStatus(): int
    {
        return $this->status;
    }

    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function getMessage(): string
    {
        return $this->message;
    }

    public function setMessage(string $message): void
    {
        $this->message = $message;
    }

    public function getComplianceRequirements(): array
    {
        return $this->complianceRequirements;
    }

    public function setComplianceRequirements(array $complianceRequirements): void
    {
        $this->complianceRequirements = $complianceRequirements;
    }
}