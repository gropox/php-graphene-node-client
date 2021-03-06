<?php


namespace GrapheneNodeClient\Commands\Broadcast;

/**
 * Class BroadcastTransactionSynchronousCommand
 *
 * This call will not return until the transaction is included in a block.
 *
 * @package GrapheneNodeClient\Commands\Broadcast
 */
class BroadcastTransactionSynchronousCommand extends CommandAbstract
{
    protected $method       = 'broadcast_transaction_synchronous';
    protected $queryDataMap = [
        '0:ref_block_num'    => ['string'], //tx ref_block_num = head_block_number & 0xFFFF
        '0:ref_block_prefix' => ['string'], //tx ref_block_prefix = new Buffer(properties.head_block_id, 'hex').readUInt32LE(4),
        '0:expiration'       => ['string'], //tx expiration in ISO format YYYY-MM-DDTHH:mm:ss.sss
        '0:operations:*:0'   => ['string'], //tx operation name, example - 'vote'
        '0:operations:*:1'   => ['array'], //tx options, example - author, permlink and ect.
        '0:extensions'       => ['array'], //tx empty array while
        '0:signatures'       => ['array'] //tx
    ];
}