<?php

namespace App\GraphQL\Types;

use App\Models\Post;
use GraphQL\Type\Definition\Type;
// use GraphQL;
use Rebing\GraphQL\Support\Facades\GraphQL;
use Rebing\GraphQL\Support\Type as GraphQLType;

class PostType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Post',
        'description' => 'Collection of Daniel Aleksandrovs Posts',
        'model' => Post::class
    ];

    public function fields(): array
    {
        return [
            'title' => [
                'type' => Type::nonNull(Type::string()),
                'description' => 'title of post'
            ],
            'setting' => [
                'type' => Type::string(),
                'description' => 'setting of post'
            ],
            'avg_video_length' => [
                'type' => Type::int(),
                'description' => 'avg_video_length of post'
            ],
            'hook' => [
                'type' => Type::string(),
                'description' => 'hook of post'
            ],
            'transitions' => [
                'type' => Type::int(),
                'description' => 'transitions of post'
            ],
            'lighting' => [
                'type' => Type::string(),
                'description' => 'lighting of post'
            ],
            'music' => [
                'type' => Type::string(),
                'description' => 'music of post'
            ],
        ];
    }
}