<?php


namespace Mouf\Security\UserManagement\Api;


interface DisplayableRight
{
    /**
     * Returns the name for that right.
     *
     * @return string
     */
    public function getName();

    /**
     * Returns the description of that right.
     *
     * @return string
     */
    public function getDescription() : string;
}