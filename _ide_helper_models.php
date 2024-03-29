<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AssignOrder
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $user_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $assignOrderLogs
 * @property-read int|null $assign_order_logs_count
 * @property-read \App\Models\Order|null $orders
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder whereUserId($value)
 */
	class IdeHelperAssignOrder {}
}

namespace App\Models{
/**
 * App\Models\AssignOrderLog
 *
 * @property int $id
 * @property int|null $order_id
 * @property int|null $user_id
 * @property string $status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order|null $orders
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog whereUserId($value)
 */
	class IdeHelperAssignOrderLog {}
}

namespace App\Models{
/**
 * App\Models\BannerSection
 *
 * @property int $id
 * @property string $key
 * @property string|null $headline
 * @property string|null $tagline
 * @property string|null $banner
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereBanner($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereSiteKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereTagline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereUpdatedAt($value)
 */
	class IdeHelperBannerSection {}
}

namespace App\Models{
/**
 * App\Models\BlogSection
 *
 * @property int $id
 * @property string|null $headline
 * @property string|null $tagline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection whereTagline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection whereUpdatedAt($value)
 */
	class IdeHelperBlogSection {}
}

namespace App\Models{
/**
 * App\Models\BrandIdentity
 *
 * @property int $id
 * @property string|null $company_name
 * @property string|null $slogan
 * @property string|null $logo
 * @property string|null $favicon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity query()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereFavicon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity whereUpdatedAt($value)
 */
	class IdeHelperBrandIdentity {}
}

namespace App\Models{
/**
 * App\Models\CompanyPolicy
 *
 * @property int $id
 * @property string|null $privacy
 * @property string|null $cookie
 * @property string|null $payment
 * @property string|null $terms_and_conditions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy query()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy whereCookie($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy wherePayment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy wherePrivacy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy whereTermsAndConditions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy whereUpdatedAt($value)
 */
	class IdeHelperCompanyPolicy {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property int $id
 * @property string|null $title
 * @property string $coupon_code
 * @property string|null $coupon_type
 * @property string|null $published_status
 * @property \Illuminate\Support\Carbon|null $start_date
 * @property \Illuminate\Support\Carbon|null $end_date
 * @property string|null $amount
 * @property string|null $percent_off
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceCategory[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon applyCouponTo($category, $service)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCouponType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon wherePercentOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon wherePublishedStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 */
	class IdeHelperCoupon {}
}

namespace App\Models{
/**
 * App\Models\FooterContent
 *
 * @property int $id
 * @property string|null $logo
 * @property string|null $payment_method
 * @property string|null $desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent whereLogo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent whereUpdatedAt($value)
 */
	class IdeHelperFooterContent {}
}

namespace App\Models{
/**
 * App\Models\HowDesignwalaWork
 *
 * @property int $id
 * @property string $key
 * @property string|null $title
 * @property string|null $desc
 * @property string|null $image
 * @property string|null $video
 * @property string|null $video_thumbnail
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork query()
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereSiteKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereVideo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereVideoThumbnail($value)
 */
	class IdeHelperHowDesignwalaWork {}
}

namespace App\Models{
/**
 * App\Models\Invoice
 *
 * @property int $id
 * @property int|null $order_id
 * @property string|null $invoice_number
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order $orders
 * @method static \Database\Factories\InvoiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereInvoiceNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice whereUpdatedAt($value)
 */
	class IdeHelperInvoice {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $service_id
 * @property string|null $order_number
 * @property string|null $reference_id
 * @property string $requirements
 * @property string|null $applied_coupon
 * @property float|null $discount
 * @property string $order_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $assignOrderLogs
 * @property-read int|null $assign_order_logs_count
 * @property-read \App\Models\AssignOrder|null $assignOrders
 * @property-read \App\Models\Invoice $invoices
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\Payment $payments
 * @property-read \App\Models\Service|null $services
 * @property-read \App\Models\User|null $users
 * @method static \Database\Factories\OrderFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Order filterBy($column, $arg)
 * @method static \Illuminate\Database\Eloquent\Builder|Order newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Order query()
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereAppliedCoupon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereDiscount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereOrderStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereReferenceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Order whereUserId($value)
 */
	class IdeHelperOrder {}
}

namespace App\Models{
/**
 * App\Models\OtherContent
 *
 * @property int $id
 * @property string $key
 * @property string|null $headline
 * @property string|null $tagline
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereHeadline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereSiteKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereTagline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereUpdatedAt($value)
 */
	class IdeHelperOtherContent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property int $id
 * @property int|null $order_id
 * @property float|null $paid_amount
 * @property string|null $transaction_id
 * @property string|null $payment_method
 * @property string $payment_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Order $orders
 * @method static \Database\Factories\PaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaidAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentMethod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment wherePaymentStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereTransactionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment whereUpdatedAt($value)
 */
	class IdeHelperPayment {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property int $id
 * @property int $service_category_id
 * @property string $title
 * @property string $meta_desc
 * @property string $short_desc
 * @property int $delivery_time
 * @property int $revision_limit
 * @property int|null $popular_status
 * @property int|null $published_status
 * @property string $slug
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Coupon[] $coupons
 * @property-read int|null $coupons_count
 * @property-read mixed $url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\ServiceCategory $serviceCategories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceFaq[] $serviceFaqs
 * @property-read int|null $service_faqs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceFeature[] $serviceFeatures
 * @property-read int|null $service_features_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceImage[] $serviceImages
 * @property-read int|null $service_images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\ServiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Service filterBy($column, $arg)
 * @method static \Illuminate\Database\Eloquent\Builder|Service findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Service getAllPopular()
 * @method static \Illuminate\Database\Eloquent\Builder|Service getAllPublished()
 * @method static \Illuminate\Database\Eloquent\Builder|Service getSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|Service hideCurrent($arg)
 * @method static \Illuminate\Database\Eloquent\Builder|Service newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Service query()
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCategories($arg)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereDeliveryTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereMetaDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePopularStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service wherePublishedStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereRevisionLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereServiceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Service withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IdeHelperService {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategory
 *
 * @property int $id
 * @property string $title
 * @property string $meta_desc
 * @property string $order_instruction_desc
 * @property string $slug
 * @property string $short_desc
 * @property int $navbar_status
 * @property int $published_status
 * @property int $popular_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Coupon[] $coupons
 * @property-read int|null $coupons_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceCategoryFaq[] $serviceCategoryFaqs
 * @property-read int|null $service_category_faqs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceCategoryInstruction[] $serviceCategoryInstructions
 * @property-read int|null $service_category_instructions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Database\Factories\ServiceCategoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory filterBy($column, $arg)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory getAllPopular()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory getAllPublished()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory getSlug($slug)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory getTitle()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory navbarActive()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory searchBy($column, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereMetaDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereNavbarStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereOrderInstructionDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory wherePopularStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory wherePublishedStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereShortDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory withAndWhereHas($relation, $constraint)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IdeHelperServiceCategory {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategoryFaq
 *
 * @property int $id
 * @property int $service_category_id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ServiceCategory|null $service_categories
 * @method static \Database\Factories\ServiceCategoryFaqFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq whereServiceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq whereUpdatedAt($value)
 */
	class IdeHelperServiceCategoryFaq {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategoryInstruction
 *
 * @property int $id
 * @property int $service_category_id
 * @property string $order_instructions
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\ServiceCategoryInstructionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction whereOrderInstructions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction whereServiceCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction whereUpdatedAt($value)
 */
	class IdeHelperServiceCategoryInstruction {}
}

namespace App\Models{
/**
 * App\Models\ServiceFaq
 *
 * @property int $id
 * @property int $service_id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service|null $services
 * @method static \Database\Factories\ServiceFaqFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereQuestion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq whereUpdatedAt($value)
 */
	class IdeHelperServiceFaq {}
}

namespace App\Models{
/**
 * App\Models\ServiceFeature
 *
 * @property int $id
 * @property int $service_id
 * @property string $feature_desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service|null $services
 * @method static \Database\Factories\ServiceFeatureFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereFeatureDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereUpdatedAt($value)
 */
	class IdeHelperServiceFeature {}
}

namespace App\Models{
/**
 * App\Models\ServiceImage
 *
 * @property-read \App\Models\Service|null $services
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage query()
 */
	class IdeHelperServiceImage {}
}

namespace App\Models{
/**
 * App\Models\ServiceProcess
 *
 * @property int $id
 * @property string $key
 * @property string|null $title
 * @property string|null $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereSiteKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereUpdatedAt($value)
 */
	class IdeHelperServiceProcess {}
}

namespace App\Models{
/**
 * App\Models\SiteCms
 *
 * @property int $id
 * @property string $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms searchBy($column, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereSiteKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereValue($value)
 */
	class IdeHelperSiteCms {}
}

namespace App\Models{
/**
 * App\Models\SocialLinks
 *
 * @property int $id
 * @property string $social_icon
 * @property string $social_title
 * @property string $social_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks searchBy($column, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereSocialIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereSocialTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereSocialUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereUpdatedAt($value)
 */
	class IdeHelperSocialLinks {}
}

namespace App\Models{
/**
 * App\Models\SocialiteAuth
 *
 * @property int $id
 * @property int $user_id
 * @property string $provider_id
 * @property string $provider
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth whereUserId($value)
 */
	class IdeHelperSocialiteAuth {}
}

namespace App\Models{
/**
 * App\Models\StatisticsSection
 *
 * @property int $id
 * @property string $key
 * @property string|null $title
 * @property int|null $amount
 * @property string|null $icon
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereSiteKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereUpdatedAt($value)
 */
	class IdeHelperStatisticsSection {}
}

namespace App\Models{
/**
 * App\Models\Subscriber
 *
 * @property int $id
 * @property string $email
 * @property string $name
 * @property int $subscriber_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber filterBy($column, $arg)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber searchBy($column, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereSubscriberStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber whereUpdatedAt($value)
 */
	class IdeHelperSubscriber {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Database\Factories\TagFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag getTitle()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag searchBy($column, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 */
	class IdeHelperTag {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $designation
 * @property string $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AssignOrder|null $assignOrders
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\SocialiteAuth[] $socialProviders
 * @property-read int|null $social_providers_count
 * @property-read \App\Models\UserDetail|null $userDetails
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDesignation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * App\Models\UserDetail
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $address
 * @property string|null $country
 * @property float|null $phone
 * @property float|null $postal_code
 * @property string|null $billing_name
 * @property string|null $billing_email
 * @property string|null $billing_address
 * @property string|null $billing_company_name
 * @property string|null $billing_tax_id
 * @property string|null $billing_country
 * @property string|null $billing_city
 * @property float|null $billing_postal_code
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingPostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereBillingTaxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail wherePostalCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail whereUserId($value)
 */
	class IdeHelperUserDetail {}
}

