<?php

namespace TypiCMS\Modules\Galleries\Models;

use TypiCMS\Modules\Core\Models\BaseTranslation;

class GalleryTranslation extends BaseTranslation
{
    protected $fillable = [
        'title',
        'slug',
        'status',
        'summary',
        'body',
    ];

    /**
     * get the parent model.
     */
    public function owner()
    {
        return $this->belongsTo('TypiCMS\Modules\Galleries\Models\Gallery', 'gallery_id');
    }
}
