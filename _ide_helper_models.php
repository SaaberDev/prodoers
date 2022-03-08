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
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $assignOrderLogs
 * @property-read int|null $assign_order_logs_count
 * @property-read \App\Models\Order|null $orders
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrder query()
 */
	class IdeHelperAssignOrder {}
}

namespace App\Models{
/**
 * App\Models\AssignOrderLog
 *
 * @property-read \App\Models\Order|null $orders
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AssignOrderLog query()
 */
	class IdeHelperAssignOrderLog {}
}

namespace App\Models{
/**
 * App\Models\BannerSection
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|BannerSection whereSiteKey($key)
 */
	class IdeHelperBannerSection {}
}

namespace App\Models{
/**
 * App\Models\BlogSection
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BlogSection query()
 */
	class IdeHelperBlogSection {}
}

namespace App\Models{
/**
 * App\Models\BrandIdentity
 *
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BrandIdentity query()
 */
	class IdeHelperBrandIdentity {}
}

namespace App\Models{
/**
 * App\Models\CompanyPolicy
 *
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CompanyPolicy query()
 */
	class IdeHelperCompanyPolicy {}
}

namespace App\Models{
/**
 * App\Models\Coupon
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceCategory[] $categories
 * @property-read int|null $categories_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @property-write mixed $end_date
 * @property-write mixed $start_date
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon applyCouponTo($category, $service)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 */
	class IdeHelperCoupon {}
}

namespace App\Models{
/**
 * App\Models\FooterContent
 *
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FooterContent query()
 */
	class IdeHelperFooterContent {}
}

namespace App\Models{
/**
 * App\Models\HowDesignwalaWork
 *
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork query()
 * @method static \Illuminate\Database\Eloquent\Builder|HowDesignwalaWork whereSiteKey($key)
 */
	class IdeHelperHowDesignwalaWork {}
}

namespace App\Models{
/**
 * App\Models\Invoice
 *
 * @property-read \App\Models\Order $orders
 * @method static \Database\Factories\InvoiceFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Invoice query()
 */
	class IdeHelperInvoice {}
}

namespace App\Models{
/**
 * App\Models\Order
 *
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
 */
	class IdeHelperOrder {}
}

namespace App\Models{
/**
 * App\Models\OtherContent
 *
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent query()
 * @method static \Illuminate\Database\Eloquent\Builder|OtherContent whereSiteKey($key)
 */
	class IdeHelperOtherContent {}
}

namespace App\Models{
/**
 * App\Models\Payment
 *
 * @property-read \App\Models\Order $orders
 * @method static \Database\Factories\PaymentFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Payment query()
 */
	class IdeHelperPayment {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Coupon[] $coupons
 * @property-read int|null $coupons_count
 * @property-read mixed $url
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Models\ServiceCategory|null $serviceCategories
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
 * @method static \Illuminate\Database\Eloquent\Builder|Service withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IdeHelperService {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategory
 *
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
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory withAndWhereHas($relation, $constraint)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategory withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IdeHelperServiceCategory {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategoryFaq
 *
 * @property-read \App\Models\ServiceCategory|null $service_categories
 * @method static \Database\Factories\ServiceCategoryFaqFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryFaq query()
 */
	class IdeHelperServiceCategoryFaq {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategoryInstruction
 *
 * @method static \Database\Factories\ServiceCategoryInstructionFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceCategoryInstruction query()
 */
	class IdeHelperServiceCategoryInstruction {}
}

namespace App\Models{
/**
 * App\Models\ServiceFaq
 *
 * @property-read \App\Models\Service|null $services
 * @method static \Database\Factories\ServiceFaqFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFaq query()
 */
	class IdeHelperServiceFaq {}
}

namespace App\Models{
/**
 * App\Models\ServiceFeature
 *
 * @property-read \App\Models\Service|null $services
 * @method static \Database\Factories\ServiceFeatureFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature query()
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
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceProcess whereSiteKey($key)
 */
	class IdeHelperServiceProcess {}
}

namespace App\Models{
/**
 * App\Models\SiteCms
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms query()
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms searchBy($column, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|SiteCms whereSiteKey($key)
 */
	class IdeHelperSiteCms {}
}

namespace App\Models{
/**
 * App\Models\SocialLinks
 *
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks searchBy($column, $search)
 */
	class IdeHelperSocialLinks {}
}

namespace App\Models{
/**
 * App\Models\SocialiteAuth
 *
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialiteAuth query()
 */
	class IdeHelperSocialiteAuth {}
}

namespace App\Models{
/**
 * App\Models\StatisticsSection
 *
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|StatisticsSection whereSiteKey($key)
 */
	class IdeHelperStatisticsSection {}
}

namespace App\Models{
/**
 * App\Models\Subscriber
 *
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber filterBy($column, $arg)
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber query()
 * @method static \Illuminate\Database\Eloquent\Builder|Subscriber searchBy($column, $search)
 */
	class IdeHelperSubscriber {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Database\Factories\TagFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag getTitle()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag searchBy($column, $search)
 */
	class IdeHelperTag {}
}

namespace App\Models{
/**
 * App\Models\User
 *
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
 */
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * App\Models\UserDetail
 *
 * @property-read \App\Models\User|null $users
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserDetail query()
 */
	class IdeHelperUserDetail {}
}

