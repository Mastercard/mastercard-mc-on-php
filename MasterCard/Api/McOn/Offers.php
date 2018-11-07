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
            case "8c1d1604-bf1a-4c41-b7e4-bca0eb44d31d":
                return new OperationConfig("/loyalty/v1/offers", "query", array("userId","preferredLanguage","sort","category","featured","favorite","partner"), array("x-client-correlation-id"));
            case "1653bca5-f3ab-4a81-ae35-e90277f47309":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/activate", "create", array(), array("x-client-correlation-id"));
            case "4e466063-4622-4fe1-bada-a9b78e7c3eb4":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/detail", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "42ec25e0-926c-4acc-a3dc-550036f38807":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/favorite", "create", array(), array("x-client-correlation-id"));
            case "48bc4658-eac0-4300-80ac-57072e30edee":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/redeem", "create", array(), array("x-client-correlation-id"));
            case "5321d8fd-792b-4434-b643-d8d49509c379":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/unfavorite", "create", array(), array("x-client-correlation-id"));
            case "4d00d50d-2d8f-4100-92dc-537cb2a8570b":
                return new OperationConfig("/loyalty/v1/offers/promo", "create", array(), array("x-client-correlation-id"));
            case "4017bc2a-6023-447c-a80f-8cd8468a4f60":
                return new OperationConfig("/loyalty/v1/offers/redeemed", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "32d3f814-900a-4871-82de-64064f4edf63":
                return new OperationConfig("/loyalty/v1/points/expiring", "query", array("userId"), array("x-client-correlation-id"));
            case "eaf0d611-132f-4da4-96c6-76352abdbaff":
                return new OperationConfig("/loyalty/v1/points", "query", array("userId"), array("x-client-correlation-id"));
            case "a9c4060a-9c2f-4013-8e0f-2d76ecd3e331":
                return new OperationConfig("/loyalty/v1/users/{userId}/offers", "query", array(), array("x-client-correlation-id"));
            case "e5618e59-2999-4d37-b5fc-d1736b40b426":
                return new OperationConfig("/loyalty/v1/vouchers", "query", array("userId"), array("x-client-correlation-id"));
            case "1e2177ac-797d-4ecb-ab35-eb46fd387d13":
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
        return self::execute("8c1d1604-bf1a-4c41-b7e4-bca0eb44d31d",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function activateOffer($map)
    {
        return self::execute("1653bca5-f3ab-4a81-ae35-e90277f47309", new Offers($map));
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
        return self::execute("4e466063-4622-4fe1-bada-a9b78e7c3eb4",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function favoriteOffer($map)
    {
        return self::execute("42ec25e0-926c-4acc-a3dc-550036f38807", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function redeemOffer($map)
    {
        return self::execute("48bc4658-eac0-4300-80ac-57072e30edee", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function unfavoriteOffer($map)
    {
        return self::execute("5321d8fd-792b-4434-b643-d8d49509c379", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function submitOfferPromo($map)
    {
        return self::execute("4d00d50d-2d8f-4100-92dc-537cb2a8570b", new Offers($map));
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
        return self::execute("4017bc2a-6023-447c-a80f-8cd8468a4f60",new Offers($criteria));
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
        return self::execute("32d3f814-900a-4871-82de-64064f4edf63",new Offers($criteria));
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
        return self::execute("eaf0d611-132f-4da4-96c6-76352abdbaff",new Offers($criteria));
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
        return self::execute("a9c4060a-9c2f-4013-8e0f-2d76ecd3e331",new Offers($criteria));
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
        return self::execute("e5618e59-2999-4d37-b5fc-d1736b40b426",new Offers($criteria));
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
        return self::execute("1e2177ac-797d-4ecb-ab35-eb46fd387d13",new Offers($criteria));
    }


}

