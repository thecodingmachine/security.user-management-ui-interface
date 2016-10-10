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

    /**
     * Creates a new role. Returns the role object.
     *
     * @param string $label
     * @return RoleInterface
     */
    public function createRole(string $label) : RoleInterface;

    /**
     * Renames a role (changes the label).
     *
     * @param $roleId
     * @param string $label
     */
    public function renameRole($roleId, string $label);

    /**
     * Deletes a role.
     *
     * @param string $roleId
     */
    public function deleteRole($roleId);
}
