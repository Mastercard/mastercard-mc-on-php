<?php
/*
 * Copyright 2016 MasterCard International.
 *
 * Redistribution and use in source and binary forms, with or without modification, are
 * permitted provided that the following conditions are met:
 *
 * Redistributions of source code must retain the above copyright notice, this list of
 * conditions and the following disclaimer.
 * Redistributions in binary form must reproduce the above copyright notice, this list of
 * conditions and the following disclaimer in the documentation and/or other materials
 * provided with the distribution.
 * Neither the name of the MasterCard International Incorporated nor the names of its
 * contributors may be used to endorse or promote products derived from this software
 * without specific prior written permission.
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY
 * EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES
 * OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT
 * SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT,
 * INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS;
 * OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER
 * IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING
 * IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF
 * SUCH DAMAGE.
 *
 */

 namespace MasterCard\Api\McOn;

 use MasterCard\Core\Model\BaseObject;
 use MasterCard\Core\Model\RequestMap;
 use MasterCard\Core\Model\OperationMetadata;
 use MasterCard\Core\Model\OperationConfig;


/**
 * 
 */
class User extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "f8dc4e7d-d7fa-422d-8ff5-7502269f46b1":
                return new OperationConfig("/bundle/profile/v1/users", "create", array(), array("x-client-correlation-id"));
            case "d3a078d8-1b9c-4adb-98ab-5a37e786b56c":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "delete", array(), array("x-client-correlation-id"));
            case "93206671-c3cf-4d11-81fa-1a3ec763e70e":
                return new OperationConfig("/bundle/profile/v1/users/{userId}/patch", "create", array(), array("x-client-correlation-id"));
            case "0acf8216-6a00-4bff-bf75-bb899fb2abba":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "read", array(), array("x-client-correlation-id"));
            case "432f1226-a04a-4a2d-b620-7ddea75b7401":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "update", array(), array("x-client-correlation-id"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }


   /**
    * Creates object of type User
    *
    * @param Map map, containing the required parameters to create a new object
    * @return User of the response of created instance.
    */
    public static function createUser($map)
    {
        return self::execute("f8dc4e7d-d7fa-422d-8ff5-7502269f46b1", new User($map));
    }








   /**
    * Delete object of type User by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return User of the response.
    */
    public static function deleteUserById($id, $requestMap = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if (!empty($requestMap)) {
            $map->setAll($requestMap);
        }
        return self::execute("d3a078d8-1b9c-4adb-98ab-5a37e786b56c", new User($map));
    }

   /**
    * Delete this object of type User
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return User of the response.
    */
    public function deleteUser()
    {
        return self::execute("d3a078d8-1b9c-4adb-98ab-5a37e786b56c", $this);
    }


   /**
    * Creates object of type User
    *
    * @param Map map, containing the required parameters to create a new object
    * @return User of the response of created instance.
    */
    public static function patchUser($map)
    {
        return self::execute("93206671-c3cf-4d11-81fa-1a3ec763e70e", new User($map));
    }









    /**
     * Returns objects of type User by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return User of the response
     */
    public static function readUser($id, $criteria = null)
    {
        $map = new RequestMap();
        if (!empty($id)) {
            $map->set("id", $id);
        }
        if ($criteria != null) {
            $map->setAll($criteria);
        }
        return self::execute("0acf8216-6a00-4bff-bf75-bb899fb2abba",new User($map));
    }


    /**
     * Updates an object of type User
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return User of the response
     */
    public function updateUser()  {
        return self::execute("432f1226-a04a-4a2d-b620-7ddea75b7401",$this);
    }






}

