<?php
namespace Neos\Cqrs\EventStore\Storage;

/*
 * This file is part of the Neos.EventStore package.
 *
 * (c) Contributors of the Neos Project - www.neos.io
 *
 * This package is Open Source Software. For the full copyright and license
 * information, please view the LICENSE file which was distributed with this
 * source code.
 */

use Neos\Cqrs\EventStore\EventStoreCommit;
use Neos\Cqrs\EventStore\EventStream;
use Neos\Cqrs\EventStore\EventStreamFilterInterface;

/**
 * EventStorageInterface
 */
interface EventStorageInterface
{
    public function load(EventStreamFilterInterface $filter): EventStream;

    public function commit(EventStoreCommit $commit);
}
