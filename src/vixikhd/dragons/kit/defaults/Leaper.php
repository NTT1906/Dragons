<?php

declare(strict_types=1);

namespace vixikhd\dragons\kit\defaults;

use pocketmine\item\Item;
use pocketmine\item\ItemIds;
use pocketmine\Player;

/**
 * Class Leaper
 * @package vixikhd\dragons\kit\defaults
 */
class Leaper implements Kit {

    /**
     * @return string
     */
    public function getName(): string {
        return "Leaper";
    }

    /**
     * @param Player $player
     */
    public function sendKitContents(Player $player): void {
        $player->getInventory()->setItem(0, Item::get(ItemIds::IRON_AXE)->setCustomName("§r§eLeap\n§7[Use]"));

        $player->getArmorInventory()->setBoots(Item::get(ItemIds::IRON_BOOTS));
    }

    /**
     * @return string
     */
    public function getDescription(): string {
        return "You will get iron axe for leaping";
    }
}