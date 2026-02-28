<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\SiteContent;
use App\Models\Rule;
use App\Models\Reminder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // ── Users / Members ──────────────────────────────
        $members = [
            [
                'username'       => 'Gevi',
                'password'       => bcrypt('password123'),
                'role'           => 'owner',
                'platform'       => 'java',
                'favorite_color' => 'green',
                'joined_at'      => '2022-07-20',
                'bio'            => 'Hi berries, I am Gevi! I am 26, born in the month of May, & my favorite color is green! I joined the server on July 20, 2022, & I enjoy playing on Java. My role is a gatherer, I adore the birch biome & baby llama mob, & stone diamond ore is the  block I love the most!',
            ],

            [
                'username'       => 'Jezi',
                'password'       => bcrypt('password123'),
                'role'           => 'owner',
                'platform'       => 'java',
                'favorite_color' => 'pink',
                'joined_at'      => '2022-07-20',
                'bio'            => ' Hellow berries, I am Jezi! I am 25 y.o., born in the mont of December, & I admire th color pink! I also joined o July 20, 2022, & I lov playing on Java. I enjoy th builder role, I love the ol growth biome & frog mob,  calcite block is the mos special to me <3
                
                ',
            ],

            [
                'username'       => 'Potatopierr',
                'password'       => bcrypt('password123'),
                'role'           => 'co-admin',
                'platform'       => 'java',
                'favorite_color' => 'pink',
                'joined_at'      => '2024-02-15',
                'bio'            => ' Hi berries, I am Potatoe! I am 19 y.o., born in the mont of December, & I adore th color pink! I joined ou server on Feb 15, 2024, &  usually play on Java.  enjoy the builder role,  adore the cherry biome  allay mob, & amethyst bloc is dearest in my heart
                
                ',     
                
            ],

             [
                'username'       => 'Nyaaxie',
                'password'       => bcrypt('password123'),
                'role'           => 'unbreaking',
                'platform'       => 'java',
                'favorite_color' => 'light blue',
                'joined_at'      => '2024-02-15',
                'bio'            => ' Hi berries, I’m Nyaaxie! I am 19, born in the month o July, & my favorite color i light blue! I joined on Fe 15, 2024 as well, & I alway play on Java. I enjoy th explorer role, I love th snow biome & armadillo mob & cobblestone block i best for me!
                
                ',     
                
            ],
            [
                'username'       => 'Rosie',
                'password'       => bcrypt('password123'),
                'role'           => 'unbreaking',
                'platform'       => 'bedrock',
                'favorite_color' => 'light green',
                'joined_at'      => '2025-06-12',
                'bio'            => 'Hello berries, my name is Rosie! I am 21, born in the month of May, & my favorite color is light green! I joined on June 12, 2025,& I happily play on Bedrock.My role is a farmer, I love the cherry biome & vex mob,& amethyst is the best block for me!
                
                ',     

            ],

              [
                'username'       => 'Sopeya',
                'password'       => bcrypt('password123'),
                'role'           => 'unbreaking',
                'platform'       => 'java',
                'favorite_color' => 'pink',
                'joined_at'      => '2024-03-27',
                'bio'            => 'Hey berries, I’m Sopeya!
 I am 22 y.o., born in the month of May, & pink is my favorite color! I joined the server on March 27, 2024, & I love playing on Java! My role is a merchant, I admire cherry & flower biomes & axolotl mob, & all concrete blocks are my fave!'



            ],

            [
                'username'       => 'Reese',
                'password'       => bcrypt('password123'),
                'role'           => 'unbreaking',
                'platform'       => 'java',
                'favorite_color' => 'purple',
                'joined_at'      => '2024-10-12',
                'bio'            => 'Hi berries, my name is Reese!
 I am 22 y.o., born in the month of August, & I love the color purple! I joined our server on Oct 12, 2024, & I play a lot on Java. My role is a builder, I admire the plains & taiga biome & creeper mob, & moss block is my fave!'
                
            
            ],

            [
                'username'       => 'Ethan',
                'password'       => bcrypt('password123'),
                'role'           => 'salingkitkit',
                'platform'       => 'java',
                'favorite_color' => 'blue',
                'joined_at'      => '2024-02-15',
                'bio'            => ' Hi berries, I’m Ethan! I am 12 y.o., born in the month of October, & blue is my fave color! I joined on Aug 18, 2022, & I usually play on Java. My role is an adventurer, I love the plains biome & enderman mob, & the bedrock block is my favorite of all!
                
                ',     
                
            ],

           















        ];

        foreach ($members as $member) {
            User::updateOrCreate(
                ['username' => $member['username']],
                $member
            );
        }

        // ── Site Content ─────────────────────────────────
        $contents = [
            [
                'key'   => 'home_culture',
                'value' => 'Minecraft Strawberry SMP is a small and private server that values simplicity over fame. It focuses on peaceful gameplay with no rushing, grinding, or pressure to stay highly active. The community prefers a simple group chat instead of Discord and welcomes humble, kind, and friendly girl players who see Minecraft as their home and just want to enjoy the game.',
            ],
            [
                'key'   => 'home_history',
                'value' => 'The journey began in late 2021 on Henosis SMP, where the founders first experienced SMP life together, especially during the "Five Lives" season. On July 20, 2022, they created their own server called Eunoia SMP, learning to manage it with help from former admins and YouTube guides.',
            ],
        ];

        foreach ($contents as $content) {
            SiteContent::updateOrCreate(
                ['key'   => $content['key']],
                ['value' => $content['value']]
            );
        }

        // ── Rules ─────────────────────────────────────────
        $rules = [
            [1, 'Respect',           "* Be kind & respectful and greet each other when you can\n* Do not act like \"paid\", arrogant, attention-seeker, and no swearing\n* Keep it simple and humble"],

            [2, 'Base',              "* Bases are only allowed within the island but you can definitely explore anywhere in the world!\n* But bases are not allowed within 100 blocks from spawn."],

            [3, 'Cheating',          "* Do not cheat, no xray, no glowing ores (but ore packs are okay, but no glow effect!), no full brightness hacks, no fogless lava, no hacking mods, & no stealing!"],

            [4, 'Activeness',        "* It's okay not to be active all the time, just play when you can.\n* But, if you can't play for a long while we'll have to let you go due to inactivity, and to give space to new players; however, please know you are always welcome back!\n* You may be removed after the following periods of inactivity:\n  - New Member – If not active enough within 2 weeks after joining.\n  - Berry – 1 month.\n  - Loyalty Berry – 3 months.\n  - Unbreaking Berry – Never.\n  - Salingkitkit Berry – Only if associated member is removed.\n  - Partner Berry – Only if associated member is removed.\n* Also, if you decide this server is not for you, we'd appreciate a message!"],

            [5, 'Shopping District', "* To encourage interaction in our SD and promote responsible shopkeeping, depending on shop difficulty, about 1–3 months after committing to a shop, if shop owners have not built a proper shop, we kindly ask to at least build a stall in the SD.\n* If unable to build a stall, shop owners should then provide a pricelist and have their products ready for order and delivery.\n* And if no shop, stall, pricelist, or products are set up after a long time, we might free up the shop for others."],

            [6, 'Recruitment',       "* For external recruitments, we only accept girls!\n* And we accept boys only if they're a partner or a young relative of the girl members after two weeks from their joining."],

            [7, 'Privacy',           "* Do not spread the IP address, dynmap, and other private links to non-members!"],
        ];

        foreach ($rules as [$order, $category, $content]) {
            Rule::updateOrCreate(
                ['category' => $category],
                compact('order', 'category', 'content')
            );
        }

        // ── Reminders ─────────────────────────────────────
        $reminders = [
            [1,  'Whitelist',          "New members must be whitelisted!\n\nFor Java, send us your username.\nFor Bedrock, you must be online to be whitelisted, so let us know when you can log into the server."],

            [2,  'Registrations',      "When logging in for the first time, register by typing:\n/register <password> <repeatpassword>\n\nNext time you log in:\n/login <password>\n\nExample:\n/register 321 321\n/login 321"],

            [3,  'Membership',         "Two weeks after joining, you are called a Berry.\n\nAfter 6 months, you become a Loyalty Berry.\n\nAfter 1 year, you are called an Unbreaking Berry.\n\nYoung relatives invited by members are called Salingkitkit Berry.\n\nPartners of members are called Partner Berry."],

            [4,  'Skins',              "If you or other members can't see your skin, update it using:\n/skin set <url.png>\n\nYou can get a skin link from:\nhttps://sminur.com/d8n73lpmg\n\nOr send your skin link to Jezi."],

            [5,  'Events',             "We have two types of cute events in the server:\n\nSeasonal Events – Summer, Christmas, etc.\n\nQuest Events – Dragon parties, wither parties, etc."],

            [6,  'Farms',              "Members must build Java-based farms, not Bedrock-based farms, because the server's default version is Java.\n\nPlease also take note of the current server version."],

            [7,  'Dynmap',             "We have a Dynmap plugin, which is a live map of the server.\n\nYou can click the arrow on the middle right side of the Dynmap to view online players and other dimensions."],

            [8,  'Nether Roof Portal', "For easier travel, we use a Nether Roof Portal System.\n\nYou can access the Nether roof through linked portals (one is located at spawn).\n\nTo link your base portal to the Nether roof:\n1. Build and light your overworld portal.\n2. Divide the coordinates by 8 and go to those coordinates in the Nether roof.\n3. Build and light your portal there."],

            [9,  'Community XP Farm',  "We have two community XP farms located in the End dimension.\n\nThey are found in the North and South of the main island."],

            [10, 'Shopping District',  "We have a Shopping District where members are the sellers.\n\nUse:\n/shoplist – to see player shops\n/pricelist – to see item prices\n\nTheme: Nature X Cottagecore\n\nLocation:\nOverworld: x:950 z:-650\nNether Roof Portal: x:120 z:-80"],

            [11, 'Delivery Center',    "There is a Delivery Center located at spawn.\n\nThis is used for mail, bought items, and deliveries between members."],

            [12, 'Donation Center',    "A Donation Center is available at spawn for anyone in need.\n\nAccepted donations:\n- Broken items\n- Unsold items\n- Small quantity extra items"],

            [13, 'Carnival District',  "A collaborative area where members can build rides, games, and food stalls.\n\nRequirement: Members must state their build plan first to avoid duplicates.\n\nLocation:\nOverworld: x:-820 z:-320\nNether Roof Portal: x:-110 z:-35"],

            [14, 'Zoo District',       "We have a Zoo District for mob sanctuaries (non-hostile mobs only).\n\nRules:\n- One sanctuary per mob type.\n- No hostile mobs.\n- One member may build up to 2 sanctuaries only.\n\nLocation:\nOverworld: x:-550 z:-1350\nNether Roof: x:-70 z:-180"],

            [15, 'Graveyard District', "We have a peaceful Graveyard District for fallen pets.\n\nLocation:\nOverworld: x:1000 z:-500\nNether Roof: x:130 z:-55"],

            [16, 'Graves Plugin',      "We use a Grave plugin to reduce stress when dying.\n\n- A grave chest spawns and stays for 45 minutes.\n- Sneak + click/tap the grave to recover items.\n- No grave spawns if death is caused by lava or void.\n- Returns 80% of experience points."],
        ];

        foreach ($reminders as [$order, $title, $content]) {
            Reminder::updateOrCreate(
                ['title' => $title],
                compact('order', 'title', 'content')
            );
        }
    }
}