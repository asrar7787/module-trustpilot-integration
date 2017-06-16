<?php
/**
 * Jjcommerce_TrustpilotIntegration
 *
 * PHP version 5.x
 *
 * @category  PHP
 * @package   Jjcommerce\TrustpilotIntegration
 * @author    Sumit Verma <sumit@2jcommerce.in>
 * @copyright 2017 Copyright 2J Commerce, Inc. http://www.2jcommerce.in/
 * @license   http://www.2jcommerce.in/ Private
 * @link      http://www.mickgeorge.com/
 */
namespace Jjcommerce\TrustpilotIntegration\Helper;

/**
 * OrderSwatch data helper
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    const PATH_TRUSTPILOT_ACTIVE = 'trustpilot/general/is_active';

    const PATH_TRUSTPILOT_URL = 'trustpilot/general/url';

    const PATH_TRUSTPILOT_DATA_BUSINESS_ID = 'trustpilot/general/data_businessunit_id';

    const PATH_TRUSTPILOT_LIST_TEMPLATE_ID = 'trustpilot/list_review/data_template_id';

    const PATH_TRUSTPILOT_VIEW_TEMPLATE_ID = 'trustpilot/detail_page_review/data_template_id';

    /**
     * Check weather module is enabled or not
     * @return bool
     */
    public function getIsActive()
    {
        return (bool) $this->scopeConfig->getValue(
            self::PATH_TRUSTPILOT_ACTIVE,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * GetTrustPilot Store's Url
     * @return bool
     */
    public function getTrustPilotUrl()
    {
        return $this->scopeConfig->getValue(
            self::PATH_TRUSTPILOT_URL,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get TrustPilot Data Business Id
     * @return bool
     */
    public function getTrustPilotDataBusinessId()
    {
        return $this->scopeConfig->getValue(
            self::PATH_TRUSTPILOT_DATA_BUSINESS_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get TrustPilot Listing Page Template Id
     * @return bool
     */
    public function getTrustPilotListTemplateId()
    {
        return $this->scopeConfig->getValue(
            self::PATH_TRUSTPILOT_LIST_TEMPLATE_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get TrustPilot Detail Page Template Id
     * @return bool
     */
    public function getTrustPilotDetailPageTemplateId()
    {
        return $this->scopeConfig->getValue(
            self::PATH_TRUSTPILOT_VIEW_TEMPLATE_ID,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
