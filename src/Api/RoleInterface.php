<?php
declare(strict_types=1);

namespace Mouf\Security\UserManagement\Api;

/**
 * Represents a "role" associated to a user.
 */
interface RoleInterface
{
    /**
     * Returns the ID of a role.
     *
     * @return mixed
     */
    public function getId();

    /**
     * The label associated to a role.
     *
     * @return string
     */
    public function getLabel() : string;
}
