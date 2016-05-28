<?php

namespace Acme\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document
 */
class Feeds
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $text;

    /**
     * @MongoDB\Date
     */
    protected $created_at;


    function __construct()
    {
        $this->created_at = new \DataTime();
    }

}