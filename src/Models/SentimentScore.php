<?php
/*
 * ContentTools
 *
 * This file was automatically generated for Content Tools by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ContentToolsLib\Models;

use JsonSerializable;

/**
 *Sentiment Score
 */
class SentimentScore implements JsonSerializable
{
    /**
     * Postivity score returned as a percentage
     * @var integer $score public property
     */
    public $score;

    /**
     * Constructor to set initial or default values of member properties
     * @param integer $score Initialization value for $this->score
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->score = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['score'] = $this->score;

        return $json;
    }
}
