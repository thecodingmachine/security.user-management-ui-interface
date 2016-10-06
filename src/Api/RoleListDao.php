<?php
declare(strict_types=1);

namespace Mouf\Security\UserManagement\Api;


use Porpaginas\Result;

interface RoleListDao
{
    /**
     * Returns a list of roles, as a Porpaginas result.
     * This list can be filtered based on the $filters array, that can be really anything based on the filters you implement.
     *
     * @param array $filters
     * @param $orderBy
     * @param $direction
     * @return Result
     */
    public function search(array $filters, $orderBy, $direction) : Result;
}
