<?php

namespace App\Rules\Coupon;

use App\Models\Coupon;
use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Contracts\Validation\Rule;

class isValid implements Rule
{
    protected $coupon;
    protected $service;
    protected $message;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->coupon = new Coupon();
        $this->service = new Service();
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $coupon = $this->coupon->findByCodeIfPublished($value)->first();
        $hasCategoryCoupon = $this->coupon->hasCouponApplied($this->service->service_category_id, $this->service->id)->first();

        if (!$coupon) {
            return $this->fail('Invalid Coupon');
        } elseif (!$hasCategoryCoupon) {
            return $this->fail('This coupon is not valid for this service');
        } elseif (Carbon::now()->greaterThanOrEqualTo($coupon->end_date)) {
            return $this->fail('This Coupon has expired at ' . Carbon::parse($coupon->end_date)->toDayDateTimeString());
        } elseif (!Carbon::now()->gte($coupon->start_date)) {
            return $this->fail('This Coupon is not started yet. Will start at ' . Carbon::parse($coupon->start_date)->toDayDateTimeString());
        }

        return true;
    }

    /**
     * @param $message
     * @return false
     */
    protected function fail($message)
    {
        $this->message = $message;
        return false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}
