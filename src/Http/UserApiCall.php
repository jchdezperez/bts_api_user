<?php

namespace Src\Http;

use Src\Helpers\ApiCalls;

class UserApiCall {

    /**
     * Method used to create a new user.
     * 
     * @param String $userName
     * @param String $userNick
     * @param String $userEmail
     * @param String $userPhone
     * @param String $userPassword
     * @param Int $refUserCode
     * @return \Src\Helpers\JSON
     */
    public function createUser(String $userName, String $userNick, String $userEmail, String $userPhone, String $userPassword, Int $refUserCode) {
        $params = [
            "userName"         => $userName,
            "userNick"         => $userNick,
            "userEmail"        => $userEmail,
            "userPhone"        => $userPhone,
            "userPassword"     => $userPassword,
            "refUserCode"      => $refUserCode,
        ];

        return ApiCalls::executeRequestWithoutBearerToken('/user/register', $params);
    }


    /**
     * Method returned by the "bearerToken" to be able to make the rest of the calls.
     * 
     * @param int $userCode
     * @param string $userEmail
     * @param string $userPassword
     * @return \Src\Helpers\JSON
     */
    public function getUserToken( Int $userCode, String $userEmail, String $userPassword) {
        $params = [
            "userCode"         => $userCode,
            "userEmail"        => $userEmail,
            "userPassword"     => $userPassword,
        ];

        return ApiCalls::executeRequestWithoutBearerToken('/user/token', $params);
    }

    /**
     * Method to returned user information by userCode.
     * 
     * @param Int $userCode
     * @return \Src\Helpers\JSON
     */
    public function getUser(Int $userCode) {
        $params = [
            "userCode"  => $userCode,
        ];

        return ApiCalls::executeRequest('/user/information', $params);
    }

    /**
     * Method to update user information.
     * 
     * @param Int $userCode
     * @param String $userName
     * @param String $userNick
     * @param String $userPhone
     * @param String $userAddress
     * @param String $userDescription
     * @param String $userEmail
     * @param String $userPassword
     * @return \Src\Helpers\JSON
     */
    public function updateUser(Int $userCode, String $userName, String $userNick, String $userPhone, String $userAddress, String $userDescription, String $userEmail, String $userPassword) {
        $params = [
            'userCode'          =>      $userCode,
            'userName'          =>      $userName,
            'userNick'          =>      $userNick,
            'userPhone'         =>      $userPhone,
            'userAddress'       =>      $userAddress,
            'userDescription'   =>      $userDescription,
            'userEmail'         =>      $userEmail,
            'userPassword'      =>      $userPassword,
        ];

        return ApiCalls::executeRequest('/user/update', $params);
    }

}