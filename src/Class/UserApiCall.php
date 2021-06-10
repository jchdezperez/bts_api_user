<?php

namespace Src\Class;

use Src\Helpers\ApiCalls;

class UserApiCall {

    

    /**
     * Method used to create a new user 
     *
     * @param String $userName
     * @param String $userNick
     * @param String $userEmail
     * @param String $userPassword
     * @return Object
     */
    public function createUser($userName, $userNick, $userEmail, $userPhone, $userPassword) {
        $params = [
            "userName"         => (string) $userName,
            "userNick"         => (string) $userNick,
            "userEmail"        => (string) $userEmail,
            "userPhone"        => (string) $userPhone,
            "userPassword"     => (string) $userPassword,
        ];

        return ApiCalls::executeRequestWithoutBearerToken('/user/register', $params);
    }

    /**
     * Method returned by the "bearerToken" to be able to make the rest of the calls 
     *
     * @param String $userCode
     * @param String $userEmail
     * @param String $userPassword
     * @return void
     */
    public function getUserToken($userCode, $userEmail, $userPassword) {
        $params = [
            "userCode"         => (int) $userCode,
            "userEmail"        => (string) $userEmail,
            "userPassword"     => (string) $userPassword,
        ];

        return ApiCalls::executeRequestWithoutBearerToken('/user/token', $params);
    }

    /**
     * Method to returned user information by userCode
     *
     * @param Int $userCode
     * @return void
     */
    public function getUser($userCode) {
        $params = [
            "userCode"  => (int) $userCode,
        ];

        return ApiCalls::executeRequest('/user/information', $params);
    }
    
    /**
     * Method to update user information
     *
     * @param Int $userCode
     * @param String $userName
     * @param String $userNick
     * @param String $userPhone
     * @param String $userAddress
     * @param String $userDescription
     * @param String $userEmail
     * @param String $userPassword
     * @return void
     */
    public function updateUser($userCode, $userName, $userNick, $userPhone, $userAddress, $userDescription, $userEmail, $userPassword) {
        $params = [
            'userCode'          => (int)    $userCode,
            'userName'          => (string) $userName,
            'userNick'          => (string) $userNick,
            'userPhone'         => (string) $userPhone,
            'userAddress'       => (string) $userAddress,
            'userDescription'   => (string) $userDescription,
            'userEmail'         => (string) $userEmail,
            'userPassword'      => (string) $userPassword,
        ];

        return ApiCalls::executeRequest('/user/update', $params);
    }

}