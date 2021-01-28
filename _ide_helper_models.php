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
 * App\Models\Coupon
 *
 * @mixin IdeHelperCoupon
 * @property int $id
 * @property string $code
 * @property int $published_status
 * @property string $start_date
 * @property string $end_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon query()
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereEndDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon wherePublishedStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereStartDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Coupon whereUpdatedAt($value)
 */
	class IdeHelperCoupon extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Footer
 *
 * @mixin IdeHelperFooter
 * @property int $id
 * @property string|null $key
 * @property string|null $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Footer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer query()
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereFooterKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Footer whereValue($value)
 */
	class IdeHelperFooter extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Policy
 *
 * @mixin IdeHelperPolicy
 * @property int $id
 * @property string $key
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Policy newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy query()
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy wherePolicyKey($key)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Policy whereValue($value)
 */
	class IdeHelperPolicy extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Service
 *
 * @mixin IdeHelperService
 * @property int $id
 * @property int $service_category_id
 * @property string $title
 * @property string $meta_desc
 * @property int|null $popular_status
 * @property int|null $published_status
 * @property string $slug
 * @property string $price
 * @property string $thumbnail
 * @property string $service_desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read mixed $url
 * @property-read \App\Models\ServiceCategory $serviceCategories
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceFaq[] $serviceFaqs
 * @property-read int|null $service_faqs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceFeature[] $serviceFeatures
 * @property-read int|null $service_features_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceImage[] $serviceImages
 * @property-read int|null $service_images_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Tag[] $tags
 * @property-read int|null $tags_count
 * @method static Builder|Service filterByStatus($filterByStatus)
 * @method static Builder|Service findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static Builder|Service getAllPopular()
 * @method static Builder|Service getAllPublished()
 * @method static Builder|Service getSlug($slug)
 * @method static Builder|Service hideCurrent($arg)
 * @method static Builder|Service newModelQuery()
 * @method static Builder|Service newQuery()
 * @method static Builder|Service orderByIdDesc()
 * @method static Builder|Service query()
 * @method static Builder|Service searchByTitle($search)
 * @method static Builder|Service whereCategories($arg)
 * @method static Builder|Service whereCreatedAt($value)
 * @method static Builder|Service whereId($value)
 * @method static Builder|Service whereMetaDesc($value)
 * @method static Builder|Service wherePopularStatus($value)
 * @method static Builder|Service wherePrice($value)
 * @method static Builder|Service wherePublishedStatus($value)
 * @method static Builder|Service whereServiceCategoryId($value)
 * @method static Builder|Service whereServiceDesc($value)
 * @method static Builder|Service whereSlug($value)
 * @method static Builder|Service whereThumbnail($value)
 * @method static Builder|Service whereTitle($value)
 * @method static Builder|Service whereUpdatedAt($value)
 * @method static Builder|Service withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IdeHelperService extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategory
 *
 * @mixin IdeHelperServiceCategory
 * @property int $id
 * @property string $title
 * @property string $meta_desc
 * @property string $category_banner
 * @property string $category_thumbnail
 * @property string $slug
 * @property string $desc
 * @property int|null $navbar_status
 * @property int|null $published_status
 * @property int|null $popular_status
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\ServiceCategoryFaq[] $serviceCategoryFaqs
 * @property-read int|null $service_category_faqs_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static Builder|ServiceCategory filterByStatus($filterByStatus)
 * @method static Builder|ServiceCategory findSimilarSlugs(string $attribute, array $config, string $slug)
 * @method static Builder|ServiceCategory getAllPopular()
 * @method static Builder|ServiceCategory getAllPublished()
 * @method static Builder|ServiceCategory getSlug($slug)
 * @method static Builder|ServiceCategory getTitle()
 * @method static Builder|ServiceCategory navbarActive()
 * @method static Builder|ServiceCategory newModelQuery()
 * @method static Builder|ServiceCategory newQuery()
 * @method static Builder|ServiceCategory orderByIdDesc()
 * @method static Builder|ServiceCategory query()
 * @method static Builder|ServiceCategory searchByTitle($search)
 * @method static Builder|ServiceCategory whereCategoryBanner($value)
 * @method static Builder|ServiceCategory whereCategoryThumbnail($value)
 * @method static Builder|ServiceCategory whereCreatedAt($value)
 * @method static Builder|ServiceCategory whereDesc($value)
 * @method static Builder|ServiceCategory whereId($value)
 * @method static Builder|ServiceCategory whereMetaDesc($value)
 * @method static Builder|ServiceCategory whereNavbarStatus($value)
 * @method static Builder|ServiceCategory wherePopularStatus($value)
 * @method static Builder|ServiceCategory wherePublishedStatus($value)
 * @method static Builder|ServiceCategory whereSlug($value)
 * @method static Builder|ServiceCategory whereTitle($value)
 * @method static Builder|ServiceCategory whereUpdatedAt($value)
 * @method static Builder|ServiceCategory withUniqueSlugConstraints(\Illuminate\Database\Eloquent\Model $model, string $attribute, array $config, string $slug)
 */
	class IdeHelperServiceCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceCategoryFaq
 *
 * @mixin IdeHelperServiceCategoryFaq
 * @property int $id
 * @property int $service_category_id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\ServiceCategory $service_categories
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
	class IdeHelperServiceCategoryFaq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceFaq
 *
 * @mixin IdeHelperServiceFaq
 * @property int $id
 * @property int $service_id
 * @property string $question
 * @property string $answer
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $services
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
	class IdeHelperServiceFaq extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceFeature
 *
 * @mixin IdeHelperServiceFeature
 * @property int $id
 * @property int $service_id
 * @property string $feature_desc
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $services
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereFeatureDesc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceFeature whereUpdatedAt($value)
 */
	class IdeHelperServiceFeature extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceImage
 *
 * @mixin IdeHelperServiceImage
 * @property int $id
 * @property int $service_id
 * @property string $filename
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Service $services
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage whereServiceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceImage whereUpdatedAt($value)
 */
	class IdeHelperServiceImage extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\ServiceTag
 *
 * @mixin IdeHelperServiceTag
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ServiceTag query()
 */
	class IdeHelperServiceTag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\SocialLinks
 *
 * @mixin IdeHelperSocialLinks
 * @property int $id
 * @property string $social_icon
 * @property string $social_title
 * @property string $social_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks orderByIdDesc()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks query()
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks searchBy($entity, $search)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereSocialIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereSocialTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereSocialUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SocialLinks whereUpdatedAt($value)
 */
	class IdeHelperSocialLinks extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Tag
 *
 * @mixin IdeHelperTag
 * @property int $id
 * @property string $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Service[] $services
 * @property-read int|null $services_count
 * @method static \Illuminate\Database\Eloquent\Builder|Tag getTitle()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag orderByIdDesc()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag query()
 * @method static \Illuminate\Database\Eloquent\Builder|Tag searchByTitle($search)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Tag whereUpdatedAt($value)
 */
	class IdeHelperTag extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @mixin IdeHelperUser
 * @property int $id
 * @property string $name
 * @property string $username
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 */
	class IdeHelperUser extends \Eloquent {}
}

