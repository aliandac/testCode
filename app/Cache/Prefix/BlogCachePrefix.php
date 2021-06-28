<?php


namespace App\Cache\Prefix;

/**
 * Class BlogCachePrefix
 * @package App\Cache\Prefix
 */
class BlogCachePrefix
{


    /**
     * @var array[]
     */
    const PREFIX = [

        'comments' => 'blog_comments_',
        'blog' => 'blog_',
        'company_of_blog' => 'company_of_blog_',
        'company_id_of_blog' => 'company_id_of_blog_',
        'blog_first_company'=>'blog_first_company_',
        'comment_types'=>'comment_types_',
        'latest_blogs'=>'latest_blogs'

    ];

}
