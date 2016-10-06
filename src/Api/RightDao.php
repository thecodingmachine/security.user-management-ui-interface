<?php
declare(strict_types=1);

namespace Mouf\Security\UserManagement\Api;


use Mouf\Security\RightsService\RightInterface;

interface RightDao
{
    /**
     * Returns a list of all rights
     *
     * @return RightInterface[]
     */
    public function getAllRights();

    /**
     * @param string $right
     * @return RightInterface
     */
    public function get(string $right);
}
