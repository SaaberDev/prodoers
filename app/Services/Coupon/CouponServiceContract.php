<?php

    namespace App\Services\Coupon;

    interface CouponServiceContract
    {
        /**
         * Get coupon from session
         *
         * @return mixed
         */
        public function getCoupon(): mixed;

        /**
         * Get order with coupon from session
         *
         * @return mixed
         */
        public function getCouponWithOrder(): mixed;

        /**
         * Apply coupon and adjust the price
         *
         * @param $coupon
         * @return false|mixed|void
         */
        public function applyCoupon($coupon);

        /**
         * Calculate the total discount price
         *
         * @param $price
         * @return int|string
         */
        public function discount($price): int|string;

        /**
         * Remove coupon from session and adjust grand total price
         *
         * @return mixed
         */
        public function removeCoupon(): mixed;
    }
