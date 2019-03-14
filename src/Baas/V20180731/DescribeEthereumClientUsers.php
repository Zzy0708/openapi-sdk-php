<?php

namespace AlibabaCloud\Baas\V20180731;

use AlibabaCloud\Rpc;

/**
 * Api DescribeEthereumClientUsers
 *
 * @method string getNodeId()
 */
class DescribeEthereumClientUsers extends Rpc
{
    public $product = 'Baas';

    public $version = '2018-07-31';

    public $method = 'POST';

    /**
     * @param string $nodeId
     *
     * @return $this
     */
    public function withNodeId($nodeId)
    {
        $this->data['NodeId'] = $nodeId;
        $this->options['query']['NodeId'] = $nodeId;

        return $this;
    }
}