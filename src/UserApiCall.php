<?php

class UserApiCall {

    private $bearerToken;

    private $baseUrl = 'https://www.braintechsystem.com/api/bts';

    public function __construct($bearerToken)
    {
        $this->bearerToken = $bearerToken;
    }

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

        return $this->executeRequest('/user/register', $params);
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

        return $this->executeRequest('/user/token', $params);
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

        return $this->executeRequest('/user/information', $params);
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

        return $this->executeRequest('/user/update', $params);
    }

    /**
     * Basic to API CRYPTO call
     *
     * @param String $endpoint
     * @param Array $params
     * @return void
     */
    private function executeRequest($endpoint, $params)
    {
        $curl = curl_init();
        $jsonParams = json_encode($params);

        curl_setopt_array($curl, array(
                CURLOPT_URL                 => $this->baseUrl.$endpoint,
                CURLOPT_RETURNTRANSFER      => true,
                CURLOPT_MAXREDIRS           => 3,
                CURLOPT_TIMEOUT             => 120,
                CURLOPT_FOLLOWLOCATION      => true,
                CURLOPT_HTTP_VERSION        => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST       => "POST",
                CURLOPT_POSTFIELDS          => $jsonParams,
                CURLOPT_HTTPHEADER          => array(
                    "Content-Type: application/json",
                    'Authorization: Bearer '.$this->bearerToken
                ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);

        return json_decode($response);
    }

}