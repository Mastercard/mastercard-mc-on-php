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
class BundleProfile extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "a8a42072-8e09-49df-ae51-bd7c7cd40c13":
                return new OperationConfig("/bundle/profile/v1/users", "create", array(), array("x-client-correlation-id"));
            case "361d9bd6-2d6f-432f-8a44-6d8ef05c53a4":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "delete", array(), array("x-client-correlation-id"));
            case "238a3ea8-bb9b-4681-9e3b-93f9a6a2c4b0":
                return new OperationConfig("/bundle/profile/v1/users/{userId}/patch", "create", array(), array("x-client-correlation-id"));
            case "0d16c648-0649-40b2-8ffd-8fd81a897f4a":
                return new OperationConfig("/bundle/profile/v1/users/{userId}", "read", array(), array("x-client-correlation-id"));
            case "15895b30-143a-4c1e-b058-b722ea5d3a6b":
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
    * Creates object of type BundleProfile
    *
    * @param Map map, containing the required parameters to create a new object
    * @return BundleProfile of the response of created instance.
    */
    public static function createUser($map)
    {
        return self::execute("a8a42072-8e09-49df-ae51-bd7c7cd40c13", new BundleProfile($map));
    }








   /**
    * Delete object of type BundleProfile by id
    *
    * @param String id
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return BundleProfile of the response.
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
        return self::execute("361d9bd6-2d6f-432f-8a44-6d8ef05c53a4", new BundleProfile($map));
    }

   /**
    * Delete this object of type BundleProfile
    *
    * @throws ApiException - which encapsulates the http status code and the error return by the server
    *
    * @return BundleProfile of the response.
    */
    public function deleteUser()
    {
        return self::execute("361d9bd6-2d6f-432f-8a44-6d8ef05c53a4", $this);
    }


   /**
    * Creates object of type BundleProfile
    *
    * @param Map map, containing the required parameters to create a new object
    * @return BundleProfile of the response of created instance.
    */
    public static function patchUser($map)
    {
        return self::execute("238a3ea8-bb9b-4681-9e3b-93f9a6a2c4b0", new BundleProfile($map));
    }









    /**
     * Returns objects of type BundleProfile by id and optional criteria
     * @param type $id
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return BundleProfile of the response
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
        return self::execute("0d16c648-0649-40b2-8ffd-8fd81a897f4a",new BundleProfile($map));
    }


    /**
     * Updates an object of type BundleProfile
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return BundleProfile of the response
     */
    public function updateUser()  {
        return self::execute("15895b30-143a-4c1e-b058-b722ea5d3a6b",$this);
    }






}

