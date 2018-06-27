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
class Offers extends BaseObject {



    protected static function getOperationConfig($operationUUID) {
        switch ($operationUUID) {
            case "8489cd5f-c3f4-4936-9b1b-b18fc753d54c":
                return new OperationConfig("/loyalty/v1/offers", "query", array("userId","preferredLanguage","sort","category","featured","favorite","partner","latitude","longitude","searchRadius"), array("x-client-correlation-id"));
            case "8d6a6be0-1f7c-451a-a6bb-865c9e5e6a7b":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/activate", "create", array(), array("x-client-correlation-id"));
            case "c26147fa-a843-4304-bc1d-0a582c7af48c":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/detail", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "7c59c1b2-01fe-4d7f-abf8-4a3d8a43f137":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/favorite", "create", array(), array("x-client-correlation-id"));
            case "7200a1c4-5e3e-4a73-9ff9-9a6dff3a66c2":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/redeem", "create", array(), array("x-client-correlation-id"));
            case "3846c5db-68f1-42b5-b252-39123d8fe904":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/unfavorite", "create", array(), array("x-client-correlation-id"));
            case "455b1de3-4451-4bcd-a243-2a934193da7b":
                return new OperationConfig("/loyalty/v1/offers/promo", "create", array(), array("x-client-correlation-id"));
            case "2c5010a7-46e7-4ea8-922d-8c064513d985":
                return new OperationConfig("/loyalty/v1/offers/redeemed", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "578bfd0a-bc63-4b00-b14b-0b1519a6ff0c":
                return new OperationConfig("/loyalty/v1/points/expiring", "query", array("userId"), array("x-client-correlation-id"));
            case "6c9b002d-2e18-46ce-8488-1a5f1b6f2382":
                return new OperationConfig("/loyalty/v1/points", "query", array("userId"), array("x-client-correlation-id"));
            case "445d78bf-bb30-4196-8314-7d1b20ed9e60":
                return new OperationConfig("/loyalty/v1/users/{userId}/offers", "query", array(), array("x-client-correlation-id"));
            case "6d7c57ab-721f-415a-b2d5-2fc4a12f9176":
                return new OperationConfig("/loyalty/v1/vouchers", "query", array("userId"), array("x-client-correlation-id"));
            case "f25b4312-de44-45a7-8d92-c3bcdc19a840":
                return new OperationConfig("/loyalty/v1/vouchers/{voucherId}/detail", "query", array("userId"), array("x-client-correlation-id"));
            
            default:
                throw new \Exception("Invalid operationUUID supplied: $operationUUID");
        }
    }

    protected static function getOperationMetadata() {
        $config = ResourceConfig::getInstance();
        return new OperationMetadata($config->getVersion(), $config->getHost(), $config->getContext(), $config->getJsonNative(), $config->getContentTypeOverride());
    }







    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getOffers($criteria)
    {
        return self::execute("8489cd5f-c3f4-4936-9b1b-b18fc753d54c",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function activateOffer($map)
    {
        return self::execute("8d6a6be0-1f7c-451a-a6bb-865c9e5e6a7b", new Offers($map));
    }










    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getOfferDetail($criteria)
    {
        return self::execute("c26147fa-a843-4304-bc1d-0a582c7af48c",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function favoriteOffer($map)
    {
        return self::execute("7c59c1b2-01fe-4d7f-abf8-4a3d8a43f137", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function redeemOffer($map)
    {
        return self::execute("7200a1c4-5e3e-4a73-9ff9-9a6dff3a66c2", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function unfavoriteOffer($map)
    {
        return self::execute("3846c5db-68f1-42b5-b252-39123d8fe904", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function submitOfferPromo($map)
    {
        return self::execute("455b1de3-4451-4bcd-a243-2a934193da7b", new Offers($map));
    }










    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getRedeemedOffers($criteria)
    {
        return self::execute("2c5010a7-46e7-4ea8-922d-8c064513d985",new Offers($criteria));
    }





    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getPointsExpiring($criteria)
    {
        return self::execute("578bfd0a-bc63-4b00-b14b-0b1519a6ff0c",new Offers($criteria));
    }





    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getPoints($criteria)
    {
        return self::execute("6c9b002d-2e18-46ce-8488-1a5f1b6f2382",new Offers($criteria));
    }





    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function userOffersRegistrationStatus($criteria)
    {
        return self::execute("445d78bf-bb30-4196-8314-7d1b20ed9e60",new Offers($criteria));
    }





    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getVouchers($criteria)
    {
        return self::execute("6d7c57ab-721f-415a-b2d5-2fc4a12f9176",new Offers($criteria));
    }





    /**
     * Query objects of type Offers by id and optional criteria
     *
     * @param type $criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Offers of the response
     */
    public static function getVoucherDetail($criteria)
    {
        return self::execute("f25b4312-de44-45a7-8d92-c3bcdc19a840",new Offers($criteria));
    }


}

