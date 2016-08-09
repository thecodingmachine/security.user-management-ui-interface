<?php
declare(strict_types=1);

namespace Mouf\Security\UserManagement\Api;


use Mouf\Security\UserService\UserInterface;

interface RoleDao
{

    /**
     * Returns the list of all roles known by the application.
     *
     * @return RoleInterface[]
     */
    public function getAllRoles();

    /**
     * @param UserInterface $user
     * @param RoleInterface[] $roles
     * @return void
     */
    public function setRoles(UserInterface $user, array $roles);

    /**
     * @param UserInterface $user
     * @return RoleInterface[]
     */
    public function getRoles(UserInterface $user);

    /**
     * Fetches a role by ID.
     *
     * @param $roleId
     * @return RoleInterface
     */
    public function getRoleById($roleId) : RoleInterface;
}
