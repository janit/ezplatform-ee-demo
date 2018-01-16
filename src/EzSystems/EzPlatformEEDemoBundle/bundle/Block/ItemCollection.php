<?php
/**
 * @copyright Copyright (C) eZ Systems AS. All rights reserved.
 * @license For full copyright and license information view LICENSE file distributed with this source code.
 */
namespace EzSystems\EzPlatformEEDemoBundle\Block;

use EzSystems\EzPlatformEEDemoBundle\Block\Model\TagItem;

/**
 * Items list for tag block.
 */
class ItemCollection
{
    /** @var \EzSystems\EzPlatformEEDemoBundle\Block\Model\TagItem[] */
    private $items = [];

    /**
     * @param \EzSystems\EzPlatformEEDemoBundle\Block\Model\TagItem[] $items
     */
    public function __construct(array $items)
    {
        $this->items = $items;
    }

    /**
     * Returns array of item objects.
     *
     * @return \EzSystems\EzPlatformEEDemoBundle\Block\Model\TagItem[]
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Add item to Items.
     *
     * @param \EzSystems\EzPlatformEEDemoBundle\Block\Model\TagItem $item
     */
    public function addItem(TagItem $item)
    {
        $this->items[] = new TagItem(
            $item->getTagId(),
            $item->getContentId()
        );
    }
}
