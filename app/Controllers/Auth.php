<?php

namespace App\Controllers;

use App\Models\User;

class Auth extends BaseController
{
    public function loginView()
    {
        // $auth = service('auth');

        // if ($auth->isLoggedIn()) {
        //     return redirect()->to(route_to('home'));
        // }

        echo view('auth/login');
    }

    public function login()
    {
        // TODO: Throttle this
        $this->validate([
            'email' => 'required|valid_email',
            'password' => 'required',
        ]);

        $session = session();
        $userModel = new User();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('message', 'Please provide a valid email.');

            return redirect()->to('/login');
        }

        $authenticationStatus = password_verify($password, $user['password']);

        if ($authenticationStatus) {
            $sessionData = [
                'id' => $user['id'],
                'name' => $user['name'],
                'email' => $user['email'],
                'isLoggedIn' => true,
            ];

            $session->set($sessionData);

            return redirect()->to('/');
        }

        $session->setFlashdata('message', 'The password provided is incorrect. Please input the correct one.');

        return redirect()->to('/login');
    }

    public function signup()
    {
        $validate = $this->validate([
            'email' => 'required|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]',
            'password_confirmation' => 'required|matches[password]',
            'name' => 'required',
        ]);

        if (!$validate) {
            return redirect()->back()->withInput();
        }

        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $name = $this->request->getVar('name');

        dumpAndExit($password, $this->request->getVar('password_confirmation'));

        $userModel = new User();
        $newUser = $userModel->insert([
            'name' => $name,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'ac_type' => 2,
        ]);

        $sessionData = [
            'id' => $newUser['id'],
            'name' => $newUser['name'],
            'email' => $newUser['email'],
            'isLoggedIn' => true,
        ];

        $session = session();
        $session->set($sessionData);

        return redirect()->to('/');
        // TODO: Implement email verification
    }

    public function signupView()
    {
        echo view('auth/signup');
    }

    public function logout()
    {
        session_destroy();

        return redirect()->to('/');
    }
}
