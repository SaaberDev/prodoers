<?php

    namespace App\Services\Coupon;

    use App\Models\Coupon;
    use Session;

    class CouponService implements CouponServiceContract
    {
        protected Coupon $coupon;

        /**
         * Get coupon from session
         *
         * @return mixed
         */
        public function getCoupon(): mixed
        {
            return Session::get('order.coupon');
        }

        /**
         * Get order with coupon from session
         *
         * @return mixed
         */
        public function getCouponWithOrder(): mixed
        {
            return Session::get('order');
        }

        /**
         * Apply coupon and adjust the price
         *
         * @param $coupon
         * @return false|mixed|void
         */
        public function applyCoupon($coupon)
        {
            $this->coupon = Coupon::findByCodeIfPublished($coupon)->first();
            if (is_null($coupon)) {
                return false;
            }

            return $this->adjustTotalPrice();
        }

        /**
         * Adjust total price after applying coupon.
         *
         * @return mixed
         */
        private function adjustTotalPrice(): mixed
        {
            $sessionData = $this->getCouponWithOrder();
            if (!empty($this->coupon)) {
                if ($this->coupon->coupon_type === 'fixed') {
//                    dd($this->coupon->amount);
                    $sessionData['coupon'] = [
                        'coupon_type' => $this->coupon->coupon_type,
                        'code' => $this->coupon->coupon_code,
                        'amount' => $this->coupon->amount,
                        'discount' => $this->discount($sessionData['price'])
                    ];
                } elseif ($this->coupon->coupon_type === 'percent_off') {
                    $sessionData['coupon'] = [
                        'coupon_type' => $this->coupon->coupon_type,
                        'code' => $this->coupon->coupon_code,
                        'percent' => $this->coupon->percent_off,
                        'discount' => $this->discount($sessionData['price'])
                    ];
                }
            }

            $sessionData['grand_total'] = $this->addDiscount();
            Session::put('order', $sessionData);

            return $sessionData;
        }

        /**
         * Calculate the total discount price
         *
         * @param $price
         * @return int
         */
        public function discount($price): int
        {
            if ($this->coupon->coupon_type == 'fixed') {
                return $this->coupon->amount;
            } elseif ($this->coupon->coupon_type == 'percent_off') {
                return ($this->coupon->percent_off / 100) * $price;
            } else {
                return 0;
            }
        }

        /**
         * Add discount to grand total price
         *
         * @return int|string|null
         */
        private function addDiscount(): int|string|null
        {
            return $this->getCouponWithOrder()['price'] - $this->discount($this->getCouponWithOrder()['price']);
        }

        /**
         * Remove coupon from session and adjust grand total price
         *
         * @return mixed
         */
        public function removeCoupon(): mixed
        {
            $order = $this->getCouponWithOrder();
            $order['grand_total'] = $this->removeDiscount();
            Session::put('order', $order);
            Session::forget('order.coupon');

            return $order;
        }

        /**
         * Adjust grand total after removing coupon from the session
         *
         * @return mixed
         */
        private function removeDiscount(): mixed
        {
            return $this->getCouponWithOrder()['grand_total'] + $this->getCoupon()['discount'];
        }
    }
