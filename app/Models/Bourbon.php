<?php

namespace App\Models;

use App\Helpers\Helper;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Bourbon extends Model
{
    use HasFactory, HasSlug;
    protected $table = 'bourbons';
    protected $fillable = ['title', 'image', 'is_featured'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected function image(): Attribute
    {
        return Attribute::make(
            get:fn($value) => $value ? [
                'key' => $value,
                'original' => env('AWS_IMG_RESIZER') . '/' . $value,
                'large' => env('AWS_IMG_RESIZER') . '/fit-in/1080x720/' . $value,
                'medium' => env('AWS_IMG_RESIZER') . '/fit-in/720x540/' . $value,
                'small' => env('AWS_IMG_RESIZER') . '/fit-in/540x360/' . $value,
            ] : [
                'key' => $value,
                'original' => "https://via.placeholder.com/1080x720?text=No%20Image",
                'large' => "https://via.placeholder.com/720x540?text=No%20Image",
                'medium' => "https://via.placeholder.com/540x360?text=No%20Image",
                'small' => "https://via.placeholder.com/360x240?text=No%20Image",
            ],
        );
    }

    /**
     * The aromas that belong to the Bourbon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function state()
    {
        return $this->hasOne(State::class, 'id', 'state_id');
    }

    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function distillery()
    {
        return $this->hasOne(Distillery::class, 'id', 'distillery_id');
    }

    public function producer()
    {
        return $this->hasOne(Producer::class, 'id', 'producer_id');
    }

    public function aromas(): BelongsToMany
    {
        return $this->belongsToMany(Aroma::class, 'bourbon_aromas', 'bourbon_id', 'aroma_id')->withPivot('dominant');
    }
    /**
     * The flavors that belong to the Bourbon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */

    public function flavors(): BelongsToMany
    {
        return $this->belongsToMany(Flavor::class, 'bourbon_flavors', 'bourbon_id', 'flavor_id')->withPivot('dominant');
    }

    /**
     * The mashbil ls that belong to the Bourbon
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function mashbills(): BelongsToMany
    {
        return $this->belongsToMany(MashBill::class, 'bourbon_mashbills', 'bourbon_id', 'mashbill_id')->withPivot('amount');
    }

    protected function video(): Attribute
    {
        return Attribute::make(
            get:fn($value) => Helper::getEmbedUrls($value)
        );
    }
}
