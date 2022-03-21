<?php

    namespace App\Services\Coupon;

    use App\Models\Coupon;
    use Session;

    class CouponService implements CouponServiceInterface
    {
        protected $coupon;

        /**
         * This function will get the coupon and adjust the price
         *
         * @param $coupon
         * @return false|void
         */
        public function getCoupon($coupon)
        {
            $this->coupon = Coupon::findByCodeIfPublished($coupon)->first();
            if (is_null($coupon)) {
                return false;
            }
            $this->adjustTotalPrice();
        }

        /**
         * This function will adjust total price after applying coupon.
         */
        private function adjustTotalPrice()
        {
            $sessionData = Session::get('order');
            if (!empty($this->coupon)) {
                if ($this->coupon->coupon_type == 'fixed') {
                    $sessionData['coupon'] = [
                        'code' => $this->coupon->coupon_code,
                        'amount' => $this->coupon->amount,
                        'discount' => $this->discount(Session::get('order.price'))
                    ];
                } elseif ($this->coupon->coupon_type == 'percent_off') {
                    $sessionData['coupon'] = [
                        'code' => $this->coupon->coupon_code,
                        'percent' => $this->coupon->percent_off,
                        'discount' => $this->discount(Session::get('order.price'))
                    ];
                }
            }

            $sessionData['grand_total'] = $this->addDiscountToGrandTotal();
            Session::put('order', $sessionData);

            return $sessionData;
        }

        /**
         * This function will calculate the total discount
         *
         * @param $price
         * @return int|string
         */
        public function discount($price): int|string
        {
            if ($this->coupon->coupon_type == 'fixed') {
                return $this->coupon->amount;
            } elseif ($this->coupon->coupon_type == 'percent_off') {
                return number_format(($this->coupon->percent_off / 100) * $price);
            } else {
                return 0;
            }
        }

        /**
         * This function will add discount to grand total
         *
         * @return int|string|null
         */
        private function addDiscountToGrandTotal(): int|string|null
        {
            return Session::get('order.price') - $this->discount(Session::get('order.price'));
        }

        /**
         * This will remove the coupon
         */
        public function removeCoupon()
        {
            $order = Session::get('order');
            $order['grand_total'] = $this->removeDiscountFromGrandTotal();
            Session::put('order', $order);
            Session::forget('order.coupon');
        }

        /**
         * This function will remove discount from grand total
         *
         * @return mixed
         */
        private function removeDiscountFromGrandTotal(): mixed
        {
            return Session::get('order.grand_total') + Session::get('order.coupon.discount');
        }
    }
