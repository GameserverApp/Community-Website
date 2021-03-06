<?php

namespace GameserverApp\Transformers;

use GameserverApp\Interfaces\ModelTransformerInterface;
use GameserverApp\Models\Message;
use GameserverApp\Models\News;
use GameserverApp\Models\User;

class NewsTransformer extends ModelTransformer implements ModelTransformerInterface
{

    public static function model(array $args)
    {
        return new News($args);
    }

    public static function transformableInput($args)
    {
        $data = [
            'id'           => $args->id,
            'slug'         => $args->slug,
            'title'        => $args->title,
            'summary'      => $args->summary,
            'content'      => $args->content,
            'type'         => $args->type,
            'image'        => $args->image,
            'published_at' => $args->published_at
        ];

        return $data;
    }
}