<?php
declare(strict_types=1);

namespace Caravel\GraphQlConfig\Plugin;

use Caravel\GraphQlConfig\Api\Config\GraphQlConfigInterface;
use Magento\Framework\GraphQl\Query\QueryComplexityLimiter;
use GraphQL\Validator\DocumentValidator;
use GraphQL\Validator\Rules\QueryDepth;
use GraphQL\Validator\Rules\QueryComplexity;

class QueryComplexityLimiterPlugin
{
    private GraphQlConfigInterface $graphQlConfig;

    /**
     * @param GraphQlConfigInterface $graphQlConfig
     */
    public function __construct(
        GraphQlConfigInterface $graphQlConfig
    ) {
        $this->graphQlConfig = $graphQlConfig;
    }

    /**
     * @param QueryComplexityLimiter $subject
     * @param $result
     */
    public function afterExecute(QueryComplexityLimiter $subject, $result): void
    {
        /** @var QueryComplexity $queryComplexity */
        $queryComplexity = DocumentValidator::getRule(QueryComplexity::class);
        $queryComplexity->setMaxQueryComplexity($this->graphQlConfig->getComplexity());

        /** @var QueryDepth $queryDepth */
        $queryDepth = DocumentValidator::getRule(QueryDepth::class);
        $queryDepth->setMaxQueryDepth($this->graphQlConfig->getDepth());
    }
}
