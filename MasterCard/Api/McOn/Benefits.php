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
class Benefits extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "b01176ed-7366-4185-b566-f10dda71d54b":
                return new OperationConfig("/loyalty/v1/benefits/assigned", "query", array("ica","userId","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "ca82d45e-7b04-4c43-925e-b0dff2f1645b":
                return new OperationConfig("/loyalty/v1/benefits/{benefitId}/detail", "query", array("ica","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "3a24c8f9-49c0-4222-99da-395ac51a4c35":
                return new OperationConfig("/loyalty/v1/benefits", "query", array("ica","cardProductType","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "1a34e98b-58ed-4486-ad1f-45d07ed00e15":
                return new OperationConfig("/loyalty/v1/benefits", "create", array(), array("x-client-correlation-id"));
            case "f1bd9579-9059-4f15-94d9-1518bf6cc638":
                return new OperationConfig("/loyalty/v1/benefits/programterms", "query", array("ica","preferredLanguage"), array("x-client-correlation-id"));
            case "12b136c7-8efe-419d-a924-4eaba7803db0":
                return new OperationConfig("/loyalty/v1/users/{userId}/benefits", "query", array(), array("x-client-correlation-id"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }







    /**
     * Query objects of type Benefits by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Benefits of the response
     */
    public static function getAssignedBenefits($criteria)
    {
        return self::execute("b01176ed-7366-4185-b566-f10dda71d54b",new Benefits($criteria));
    }





    /**
     * Query objects of type Benefits by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Benefits of the response
     */
    public static function getBenefitDetail($criteria)
    {
        return self::execute("ca82d45e-7b04-4c43-925e-b0dff2f1645b",new Benefits($criteria));
    }





    /**
     * Query objects of type Benefits by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Benefits of the response
     */
    public static function getBenefits($criteria)
    {
        return self::execute("3a24c8f9-49c0-4222-99da-395ac51a4c35",new Benefits($criteria));
    }
   /**
    * Creates object of type Benefits
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Benefits of the response of created instance.
    */
    public static function selectBenefits($map)
    {
        return self::execute("1a34e98b-58ed-4486-ad1f-45d07ed00e15", new Benefits($map));
    }










    /**
     * Query objects of type Benefits by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Benefits of the response
     */
    public static function getProgramTerms($criteria)
    {
        return self::execute("f1bd9579-9059-4f15-94d9-1518bf6cc638",new Benefits($criteria));
    }





    /**
     * Query objects of type Benefits by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Benefits of the response
     */
    public static function userBenefitsRegistrationStatus($criteria)
    {
        return self::execute("12b136c7-8efe-419d-a924-4eaba7803db0",new Benefits($criteria));
    }


}

