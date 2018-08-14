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
            case "106af681-b732-4bcb-9bff-eee7c86ea6d9":
                return new OperationConfig("/loyalty/v1/airport/dmc", "query", array("userId","panLastFourDigits"), array("x-client-correlation-id"));
            case "071a636b-14fb-466a-bb69-5412ef152542":
                return new OperationConfig("/loyalty/v1/airport/history", "query", array("userId","panLastFourDigits","transactionDateFrom","transactionDateTo"), array("x-client-correlation-id"));
            case "03858d74-c079-4509-a7fe-749f27c0e345":
                return new OperationConfig("/loyalty/v1/airport/lounges", "query", array("userId","panLastFourDigits","searchText","preferredLanguage"), array("x-client-correlation-id"));
            case "8be7a5bf-bfcb-4138-92c6-4b5fe28e30f6":
                return new OperationConfig("/loyalty/v1/airport/lounges/{loungeId}/detail", "query", array("userId","panLastFourDigits","preferredLanguage"), array("x-client-correlation-id"));
            case "e40afcad-9604-4390-ab90-72b349dd56ff":
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
        return self::execute("106af681-b732-4bcb-9bff-eee7c86ea6d9",new Airport($criteria));
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
        return self::execute("071a636b-14fb-466a-bb69-5412ef152542",new Airport($criteria));
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
        return self::execute("03858d74-c079-4509-a7fe-749f27c0e345",new Airport($criteria));
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
        return self::execute("8be7a5bf-bfcb-4138-92c6-4b5fe28e30f6",new Airport($criteria));
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
        return self::execute("e40afcad-9604-4390-ab90-72b349dd56ff",new Airport($criteria));
    }


}

