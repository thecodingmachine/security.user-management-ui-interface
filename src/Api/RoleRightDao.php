<?php
declare(strict_types=1);

namespace Mouf\Security\UserManagement\Api;


use Mouf\Security\RightsService\RightInterface;

interface RoleRightDao
{

    /**
     * Sets a list of rights for the given role.
     *
     * @param RoleInterface $role
     * @param RightInterface[] $rights
     */
    public function setRightsForRole(RoleInterface $role, array $rights);

    /**
     * Sets a list of rights for the given role.
     *
     * @param RoleInterface $role
     * @return RightInterface[]
     */
    public function getRightsForRole(RoleInterface $role);
}
