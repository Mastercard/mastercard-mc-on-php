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
class Airport extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "ad7a77c4-1b0f-4621-8620-514142cb567b":
                return new OperationConfig("/loyalty/v1/airport/dmc", "query", array("userId","panLastFourDigits"), array("x-client-correlation-id"));
            case "8616f814-0a11-4854-91e5-bc76b42bd80c":
                return new OperationConfig("/loyalty/v1/airport/history", "query", array("userId","panLastFourDigits","preferredLanguage","transactionDateFrom","transactionDateTo"), array("x-client-correlation-id"));
            case "61510dc3-d54b-4d7f-80da-673bafe7df00":
                return new OperationConfig("/loyalty/v1/airport/lounges", "query", array("userId","panLastFourDigits","searchText","preferredLanguage"), array("x-client-correlation-id"));
            case "357f6ff4-0b93-4185-8022-ea6d0afa9bd5":
                return new OperationConfig("/loyalty/v1/airport/lounges/{loungeCode}/detail", "query", array("userId","panLastFourDigits","preferredLanguage"), array("x-client-correlation-id"));
            case "14537167-2ec7-4781-a047-50855c87de61":
                return new OperationConfig("/loyalty/v1/users/{userId}/airport", "query", array("panLastFourDigits"), array("x-client-correlation-id"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }







    /**
     * Query objects of type Airport by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Airport of the response
     */
    public static function getDMC($criteria)
    {
        return self::execute("ad7a77c4-1b0f-4621-8620-514142cb567b",new Airport($criteria));
    }





    /**
     * Query objects of type Airport by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Airport of the response
     */
    public static function getLoungeHistory($criteria)
    {
        return self::execute("8616f814-0a11-4854-91e5-bc76b42bd80c",new Airport($criteria));
    }





    /**
     * Query objects of type Airport by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Airport of the response
     */
    public static function getLounges($criteria)
    {
        return self::execute("61510dc3-d54b-4d7f-80da-673bafe7df00",new Airport($criteria));
    }





    /**
     * Query objects of type Airport by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Airport of the response
     */
    public static function getLoungeDetail($criteria)
    {
        return self::execute("357f6ff4-0b93-4185-8022-ea6d0afa9bd5",new Airport($criteria));
    }





    /**
     * Query objects of type Airport by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Airport of the response
     */
    public static function userAirportRegistrationStatus($criteria)
    {
        return self::execute("14537167-2ec7-4781-a047-50855c87de61",new Airport($criteria));
    }


}

