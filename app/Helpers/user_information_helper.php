<?php

use App\Models\User;

if (!function_exists('getAuthUser')) {
    /**
     * Returns an instance of the authenticated user's model.
     */
    function getAuthUser(): array
    {
        $user = session('user');

        if (isset($user)) {
            return $user;
        }

        $userId = getAuthId();

        $userModel = new User();
        $authUser = $userModel->find($userId);

        session()->set('user', $authUser);

        return $authUser;
    }
}
