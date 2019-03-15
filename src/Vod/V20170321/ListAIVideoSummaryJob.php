<?php

namespace AlibabaCloud\Vod\V20170321;

use AlibabaCloud\Client\Request\RpcRequest;

/**
 * @method string getResourceOwnerId()
 * @method string getResourceOwnerAccount()
 * @method string getAIVideoSummaryJobIds()
 * @method string getOwnerAccount()
 * @method string getOwnerId()
 */
class ListAIVideoSummaryJob extends RpcRequest
{

    /**
     * @var string
     */
    public $product = 'vod';

    /**
     * @var string
     */
    public $version = '2017-03-21';

    /**
     * @var string
     */
    public $action = 'ListAIVideoSummaryJob';

    /**
     * @var string
     */
    public $method = 'POST';

    /**
     * @var string
     */
    public $serviceCode = 'vod';

    /**
     * @param string $resourceOwnerId
     *
     * @return $this
     */
    public function withResourceOwnerId($resourceOwnerId)
    {
        $this->data['ResourceOwnerId']             = $resourceOwnerId;
        $this->options['query']['ResourceOwnerId'] = $resourceOwnerId;

        return $this;
    }

    /**
     * @param string $resourceOwnerAccount
     *
     * @return $this
     */
    public function withResourceOwnerAccount($resourceOwnerAccount)
    {
        $this->data['ResourceOwnerAccount']             = $resourceOwnerAccount;
        $this->options['query']['ResourceOwnerAccount'] = $resourceOwnerAccount;

        return $this;
    }

    /**
     * @param string $aIVideoSummaryJobIds
     *
     * @return $this
     * @deprecated deprecated since version 2.0, Use withAIVideoSummaryJobIds() instead.
     *
     */
    public function setAIVideoSummaryJobIds($aIVideoSummaryJobIds)
    {
        return $this->withAIVideoSummaryJobIds($aIVideoSummaryJobIds);
    }

    /**
     * @param string $aIVideoSummaryJobIds
     *
     * @return $this
     */
    public function withAIVideoSummaryJobIds($aIVideoSummaryJobIds)
    {
        $this->data['AIVideoSummaryJobIds']             = $aIVideoSummaryJobIds;
        $this->options['query']['AIVideoSummaryJobIds'] = $aIVideoSummaryJobIds;

        return $this;
    }

    /**
     * @param string $ownerAccount
     *
     * @return $this
     */
    public function withOwnerAccount($ownerAccount)
    {
        $this->data['OwnerAccount']             = $ownerAccount;
        $this->options['query']['OwnerAccount'] = $ownerAccount;

        return $this;
    }

    /**
     * @param string $ownerId
     *
     * @return $this
     */
    public function withOwnerId($ownerId)
    {
        $this->data['OwnerId']             = $ownerId;
        $this->options['query']['OwnerId'] = $ownerId;

        return $this;
    }
}
