<?php
declare(strict_types=1);

namespace Caravel\GraphQlConfig\Api\Config;

/**
 * @api
 */
interface GraphQlConfigInterface
{
    const XML_PATH_COMPLEXITY = 'caravel_graphql/general/complexity';
    const XML_PATH_DEPTH = 'caravel_graphql/general/depth';

    /**
     * @param int|null $storeId
     * @return int
     */
    public function getComplexity(?int $storeId = null): int;

    /**
     * @param int|null $storeId
     * @return int
     */
    public function getDepth(?int $storeId = null): int;
}
