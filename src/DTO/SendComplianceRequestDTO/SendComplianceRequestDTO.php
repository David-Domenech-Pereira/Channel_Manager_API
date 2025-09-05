<?php

namespace Api\DTO\SendComplianceRequestDTO;

use Api\DTO\Response\ComplianceRequirements\ComplianceRequirementsResponseDTO;

class SendComplianceRequestDTO
{
    /**
     * @var ComplianceRequirementsResponseDTO[]
     */
    private array $complianceData = [];

    public function getComplianceData(): array
    {
        return $this->complianceData;
    }

    public function setComplianceData(array $complianceData): void
    {
        $this->complianceData = $complianceData;
    }
}