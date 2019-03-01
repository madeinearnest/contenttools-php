<?php
/*
 * ContentTools
 *
 * This file was automatically generated for Content Tools by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ContentToolsLib;

use ContentToolsLib\Controllers;

/**
 * ContentTools client class
 */
class ContentToolsClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $oAuthAccessToken = null
    ) {
        Configuration::$oAuthAccessToken = $oAuthAccessToken ? $oAuthAccessToken : Configuration::$oAuthAccessToken;
    }
    /**
     * Singleton access to Analysis controller
     * @return Controllers\AnalysisController The *Singleton* instance
     */
    public function getAnalysis()
    {
        return Controllers\AnalysisController::getInstance();
    }
}
