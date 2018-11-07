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
            case "805bcc7d-1fae-4b40-aa83-ea9b8c46645f":
                return new OperationConfig("/loyalty/v1/benefits/assigned", "query", array("ica","userId","panLastFourDigits","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "1c7ced14-a93b-4456-8d6a-fd61ce311f68":
                return new OperationConfig("/loyalty/v1/benefits/{benefitId}/detail", "query", array("ica","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "bd315b4f-39b5-4267-b5c4-4811143a4a6e":
                return new OperationConfig("/loyalty/v1/benefits", "query", array("ica","cardProductType","channel","preferredLanguage"), array("x-client-correlation-id"));
            case "4140f028-5ee7-4061-b8ca-fea652f1f4fb":
                return new OperationConfig("/loyalty/v1/benefits", "create", array(), array("x-client-correlation-id"));
            case "788a1832-0d06-4f78-9bb2-aa0beca5f034":
                return new OperationConfig("/loyalty/v1/benefits/programterms", "query", array("ica","preferredLanguage"), array("x-client-correlation-id"));
            case "6dbaf399-354c-4b67-8254-041797f56a88":
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
        return self::execute("805bcc7d-1fae-4b40-aa83-ea9b8c46645f",new Benefits($criteria));
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
        return self::execute("1c7ced14-a93b-4456-8d6a-fd61ce311f68",new Benefits($criteria));
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
        return self::execute("bd315b4f-39b5-4267-b5c4-4811143a4a6e",new Benefits($criteria));
    }
   /**
    * Creates object of type Benefits
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Benefits of the response of created instance.
    */
    public static function selectBenefits($map)
    {
        return self::execute("4140f028-5ee7-4061-b8ca-fea652f1f4fb", new Benefits($map));
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
        return self::execute("788a1832-0d06-4f78-9bb2-aa0beca5f034",new Benefits($criteria));
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
        return self::execute("6dbaf399-354c-4b67-8254-041797f56a88",new Benefits($criteria));
    }


}

