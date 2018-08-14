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
            case "3d962fac-f27a-4467-9185-d8e54fdb9921":
                return new OperationConfig("/loyalty/v1/benefits/assigned", "query", array("ica","userId","panLastFourDigits","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "424cd0bf-2c99-4afa-ae89-58bf831cfc21":
                return new OperationConfig("/loyalty/v1/benefits/{benefitId}/detail", "query", array("ica","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "d50c5e7a-d2d6-4dad-9d2d-5162f0210455":
                return new OperationConfig("/loyalty/v1/benefits", "query", array("ica","cardProductType","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "95727a8a-1d9b-43a0-aacb-0a51f33c5e22":
                return new OperationConfig("/loyalty/v1/benefits", "create", array(), array("x-client-correlation-id"));
            case "19a5cadb-8663-498d-a380-e6670edfaadf":
                return new OperationConfig("/loyalty/v1/benefits/programterms", "query", array("ica","preferredLanguage"), array("x-client-correlation-id"));
            case "51ae4c37-c9e2-4493-b0de-3882a056ac55":
                return new OperationConfig("/loyalty/v1/users/{userId}/benefits", "query", array("panLastFourDigits"), array("x-client-correlation-id"));
            
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
        return self::execute("3d962fac-f27a-4467-9185-d8e54fdb9921",new Benefits($criteria));
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
        return self::execute("424cd0bf-2c99-4afa-ae89-58bf831cfc21",new Benefits($criteria));
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
        return self::execute("d50c5e7a-d2d6-4dad-9d2d-5162f0210455",new Benefits($criteria));
    }
   /**
    * Creates object of type Benefits
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Benefits of the response of created instance.
    */
    public static function selectBenefits($map)
    {
        return self::execute("95727a8a-1d9b-43a0-aacb-0a51f33c5e22", new Benefits($map));
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
        return self::execute("19a5cadb-8663-498d-a380-e6670edfaadf",new Benefits($criteria));
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
        return self::execute("51ae4c37-c9e2-4493-b0de-3882a056ac55",new Benefits($criteria));
    }


}

