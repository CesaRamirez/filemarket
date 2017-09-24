<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class File extends Model
{
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'overview_short',
        'overview',
        'price',
        'live',
        'approved',
        'finished',
    ];

    /**
     * The "booting" method of the model.
     */
    public static function boot()
    {
        parent::boot();

        parent::creating(function ($file) {
            $file->identifier = uniqid(true);
        });
    }

    public function scopeFinished(Builder $builder)
    {
        return $builder->where('finished', true);
    }

    public function isFree()
    {
        return $this->price == 0;
    }

    public function isLive()
    {
        return $this->price == 0;
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'identifier';
    }

    /**
     * File belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
