<?php

    namespace App\Services\Coupon;

    interface CouponServiceInterface
    {
        /**
         * This function will get the coupon and adjust the price
         *
         * @param $coupon
         */
        public function getCoupon($coupon);

        /**
         * This function will calculate the total discount
         *
         * @param $price
         */
        public function discount($price);

        /**
         * This will remove the coupon
         */
        public function removeCoupon();
    }
