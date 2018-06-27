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
            case "cc4a9246-960a-4637-aeb8-01f85b980568":
                return new OperationConfig("/loyalty/v1/airport/lounges", "query", array("searchText","preferredLanguage"), array("x-client-correlation-id"));
            case "97faf9ec-1117-47b3-8c60-ae4c9bb2f020":
                return new OperationConfig("/loyalty/v1/airport/lounges/{loungeId}/detail", "query", array("preferredLanguage"), array("x-client-correlation-id"));
            case "989e01f3-c5e2-404e-8de5-ab0ee295f454":
                return new OperationConfig("/loyalty/v1/airport/lounges/{loungeId}/history", "query", array("userId"), array("x-client-correlation-id"));
            case "fbb48266-ed35-4a3e-b5e8-c41ec594942b":
                return new OperationConfig("/loyalty/v1/airport/{userId}/dmc", "query", array(), array("x-client-correlation-id"));
            case "24540ea0-29cf-4412-bae3-5d09a1788aaa":
                return new OperationConfig("/loyalty/v1/users/{userId}/airport", "query", array(), array("x-client-correlation-id"));
            
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
    public static function getLounges($criteria)
    {
        return self::execute("cc4a9246-960a-4637-aeb8-01f85b980568",new Airport($criteria));
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
        return self::execute("97faf9ec-1117-47b3-8c60-ae4c9bb2f020",new Airport($criteria));
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
        return self::execute("989e01f3-c5e2-404e-8de5-ab0ee295f454",new Airport($criteria));
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
        return self::execute("fbb48266-ed35-4a3e-b5e8-c41ec594942b",new Airport($criteria));
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
        return self::execute("24540ea0-29cf-4412-bae3-5d09a1788aaa",new Airport($criteria));
    }


}

