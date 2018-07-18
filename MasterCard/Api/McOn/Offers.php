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
            case "53cb7656-a0fa-4749-977f-c7f98397079e":
                return new OperationConfig("/loyalty/v1/offers", "list", array("userId","preferredLanguage","sort","category","featured","favorite","partner","latitude","longitude","searchRadius"), array("x-client-correlation-id"));
            case "5400fc6b-a8a7-421b-a994-878e6c7e8613":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/activate", "create", array(), array("x-client-correlation-id"));
            case "34c1ea08-71b9-4060-8d21-de02aa4d3a73":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/detail", "query", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "d7173d44-f204-4d10-8ff4-9a59d0e3f95c":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/favorite", "create", array(), array("x-client-correlation-id"));
            case "8bf5bdb9-f7d1-41cf-9cdc-b8a2c61a0383":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/redeem", "create", array(), array("x-client-correlation-id"));
            case "c733b6df-6fc9-42e5-a967-8c97ae33642e":
                return new OperationConfig("/loyalty/v1/offers/{offerId}/unfavorite", "create", array(), array("x-client-correlation-id"));
            case "66d693d7-00de-48e6-ad8c-e45c640bb290":
                return new OperationConfig("/loyalty/v1/offers/promo", "create", array(), array("x-client-correlation-id"));
            case "3dff0fd5-b6b1-4bbf-8e50-bcb12e175f96":
                return new OperationConfig("/loyalty/v1/offers/redeemed", "list", array("userId","preferredLanguage"), array("x-client-correlation-id"));
            case "001f4685-3ebb-416d-bcff-64c09d8eb775":
                return new OperationConfig("/loyalty/v1/points/expiring", "query", array("userId"), array("x-client-correlation-id"));
            case "42c747a2-5cd8-4e9c-bf06-a480aaf6f59f":
                return new OperationConfig("/loyalty/v1/points", "query", array("userId"), array("x-client-correlation-id"));
            case "6278ab2d-d5f0-4634-991f-cd78110dfc24":
                return new OperationConfig("/loyalty/v1/users/{userId}/offers", "query", array(), array("x-client-correlation-id"));
            case "f4b7c483-2afe-48a0-9394-a0781b9dc9f1":
                return new OperationConfig("/loyalty/v1/vouchers", "list", array("userId"), array("x-client-correlation-id"));
            case "4cdb4850-d8c7-4057-825e-2fc78d0bd35b":
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
     * List objects of type Offers
     *
     * @param Map criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Array of Offers object matching the criteria.
     */
    public static function getOffers($criteria = null)
    {
        if ($criteria == null) {
            return self::execute("53cb7656-a0fa-4749-977f-c7f98397079e",new Offers());
        } else {
            return self::execute("53cb7656-a0fa-4749-977f-c7f98397079e",new Offers($criteria));
        }

    }



   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function activateOffer($map)
    {
        return self::execute("5400fc6b-a8a7-421b-a994-878e6c7e8613", new Offers($map));
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
        return self::execute("34c1ea08-71b9-4060-8d21-de02aa4d3a73",new Offers($criteria));
    }
   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function favoriteOffer($map)
    {
        return self::execute("d7173d44-f204-4d10-8ff4-9a59d0e3f95c", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function redeemOffer($map)
    {
        return self::execute("8bf5bdb9-f7d1-41cf-9cdc-b8a2c61a0383", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function unfavoriteOffer($map)
    {
        return self::execute("c733b6df-6fc9-42e5-a967-8c97ae33642e", new Offers($map));
    }





   /**
    * Creates object of type Offers
    *
    * @param Map map, containing the required parameters to create a new object
    * @return Offers of the response of created instance.
    */
    public static function submitOfferPromo($map)
    {
        return self::execute("66d693d7-00de-48e6-ad8c-e45c640bb290", new Offers($map));
    }







    /**
     * List objects of type Offers
     *
     * @param Map criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Array of Offers object matching the criteria.
     */
    public static function getRedeemedOffers($criteria = null)
    {
        if ($criteria == null) {
            return self::execute("3dff0fd5-b6b1-4bbf-8e50-bcb12e175f96",new Offers());
        } else {
            return self::execute("3dff0fd5-b6b1-4bbf-8e50-bcb12e175f96",new Offers($criteria));
        }

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
        return self::execute("001f4685-3ebb-416d-bcff-64c09d8eb775",new Offers($criteria));
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
        return self::execute("42c747a2-5cd8-4e9c-bf06-a480aaf6f59f",new Offers($criteria));
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
        return self::execute("6278ab2d-d5f0-4634-991f-cd78110dfc24",new Offers($criteria));
    }


    /**
     * List objects of type Offers
     *
     * @param Map criteria
     *
     * @throws ApiException - which encapsulates the http status code and the error return by the server
     *
     * @return Array of Offers object matching the criteria.
     */
    public static function getVouchers($criteria = null)
    {
        if ($criteria == null) {
            return self::execute("f4b7c483-2afe-48a0-9394-a0781b9dc9f1",new Offers());
        } else {
            return self::execute("f4b7c483-2afe-48a0-9394-a0781b9dc9f1",new Offers($criteria));
        }

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
        return self::execute("4cdb4850-d8c7-4057-825e-2fc78d0bd35b",new Offers($criteria));
    }


}

