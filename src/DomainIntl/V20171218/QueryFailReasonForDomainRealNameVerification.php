<?php

namespace AlibabaCloud\DomainIntl\V20171218;

use AlibabaCloud\Rpc;

/**
 * Api QueryFailReasonForDomainRealNameVerification
 *
 * @method string getRealNameVerificationAction()
 * @method string getUserClientIp()
 * @method string getDomainName()
 * @method string getLang()
 */
class QueryFailReasonForDomainRealNameVerification extends Rpc
{
    public $product = 'Domain-intl';

    public $version = '2017-12-18';

    public $method = 'POST';

    public $serviceCode = 'domain';

    /**
     * @param string $realNameVerificationAction
     *
     * @return $this
     */
    public function withRealNameVerificationAction($realNameVerificationAction)
    {
        $this->data['RealNameVerificationAction'] = $realNameVerificationAction;
        $this->options['query']['RealNameVerificationAction'] = $realNameVerificationAction;

        return $this;
    }

    /**
     * @param string $userClientIp
     *
     * @return $this
     */
    public function withUserClientIp($userClientIp)
    {
        $this->data['UserClientIp'] = $userClientIp;
        $this->options['query']['UserClientIp'] = $userClientIp;

        return $this;
    }

    /**
     * @param string $domainName
     *
     * @return $this
     */
    public function withDomainName($domainName)
    {
        $this->data['DomainName'] = $domainName;
        $this->options['query']['DomainName'] = $domainName;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function withLang($lang)
    {
        $this->data['Lang'] = $lang;
        $this->options['query']['Lang'] = $lang;

        return $this;
    }
}