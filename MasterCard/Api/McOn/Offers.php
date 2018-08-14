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
            case "d00aa13d-7dbc-4027-81e0-b62c16c29946":
                return new OperationConfig("/loyalty/v1/offers", "query", array("userId","preferredLanguage","sort","category","featured","favorite","partner","latitude","longitude","searchRadius"), array("x-client-correlation-id"));
            case "5bb5e519-16ad-46b7-b220-b0b4aa0ce5b7":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/activate", "create", array(), array("x-client-correlation-id"));
            case "609ab739-0eb6-4ac8-aafc-c3a4681cc87d":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/detail", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "ce098f92-4665-44da-9dd9-ebab315e4690":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/favorite", "create", array(), array("x-client-correlation-id"));
            case "80bb4cd6-98d8-4022-a6e8-a320c3340c04":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/redeem", "create", array(), array("x-client-correlation-id"));
            case "a7479eba-0749-46dd-8b14-4f2b4b5a7bc4":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/unfavorite", "create", array(), array("x-client-correlation-id"));
            case "16de9f46-4983-49f4-af50-73c404fb1f00":
                return new OperationConfig("/loyalty/v1/offers/promo", "create", array(), array("x-client-correlation-id"));
            case "25d0fa4e-8086-4640-9fc9-6694b52f2782":
                return new OperationConfig("/loyalty/v1/offers/redeemed", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "d3f019ac-29b1-4837-9e6a-c0287973c953":
                return new OperationConfig("/loyalty/v1/points/expiring", "query", array("userId"), array("x-client-correlation-id"));
            case "7ec2e78a-9160-4dd9-880e-62f26811d2cf":
                return new OperationConfig("/loyalty/v1/points", "query", array("userId"), array("x-client-correlation-id"));
            case "d668ac7a-262b-443f-b4c9-b0c8346afc27":
                return new OperationConfig("/loyalty/v1/users/{userId}/offers", "query", array(), array("x-client-correlation-id"));
            case "fa782b2d-84bd-4188-bad9-38cf69784686":
                return new OperationConfig("/loyalty/v1/vouchers", "query", array("userId"), array("x-client-correlation-id"));
            case "1c63c833-9d07-4ab7-afcc-3c99eb53a332":
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
        return self::execute("d00aa13d-7dbc-4027-81e0-b62c16c29946",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function activateOffer($map)
    {
        return self::execute("5bb5e519-16ad-46b7-b220-b0b4aa0ce5b7", new Offers($map));
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
        return self::execute("609ab739-0eb6-4ac8-aafc-c3a4681cc87d",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function favoriteOffer($map)
    {
        return self::execute("ce098f92-4665-44da-9dd9-ebab315e4690", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function redeemOffer($map)
    {
        return self::execute("80bb4cd6-98d8-4022-a6e8-a320c3340c04", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function unfavoriteOffer($map)
    {
        return self::execute("a7479eba-0749-46dd-8b14-4f2b4b5a7bc4", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function submitOfferPromo($map)
    {
        return self::execute("16de9f46-4983-49f4-af50-73c404fb1f00", new Offers($map));
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
        return self::execute("25d0fa4e-8086-4640-9fc9-6694b52f2782",new Offers($criteria));
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
        return self::execute("d3f019ac-29b1-4837-9e6a-c0287973c953",new Offers($criteria));
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
        return self::execute("7ec2e78a-9160-4dd9-880e-62f26811d2cf",new Offers($criteria));
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
        return self::execute("d668ac7a-262b-443f-b4c9-b0c8346afc27",new Offers($criteria));
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
        return self::execute("fa782b2d-84bd-4188-bad9-38cf69784686",new Offers($criteria));
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
        return self::execute("1c63c833-9d07-4ab7-afcc-3c99eb53a332",new Offers($criteria));
    }


}

