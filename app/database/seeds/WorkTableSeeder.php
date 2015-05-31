<?php

class WorkTableSeeder extends Seeder
{
    /**
     * Fill db with work.
     *
     * @return void
     */

    public function run()
    {
        DB::table('work')->delete();

        $work1              = new Work();
        $work1->title       = "Partners in Space";
        $work1->slug        = $work1->title;
        $work1->client      = "Texas State University";
        $work1->role        = "print design";
        $work1->description = "Designed for Texas State University's alumni magazine, <em>Hillviews</em>, the Partners in Space article needed to highlight the collaboration between Texas State, Jacobs Engineering, and NASA on projects such as the International Space Station and the manned mission to Mars.";
        $work1->thumbnail   = "/img/work/thumbs/space_thumb.jpg";
        $work1->img_1       = "/img/work/spreads/space_spread_hero-2.jpg";
        $work1->img_2       = "/img/work/spreads/space_spread_zoom-mars-2.jpg";
        $work1->img_3       = "/img/work/spreads/space_spread.jpg";
        $work1->save();

        $work2              = new Work();
        $work2->title       = "Sam Shepard Ad";
        $work2->slug        = $work2->title;
        $work2->client      = "Texas State University";
        $work2->role        = "print design";
        $work2->description = "Created for Texas State University's <a href='http://www.txstate.edu/discover/shepard'><em>Discover</em></a> research initiative, this advertisement was placed in <em>Texas Monthly</em> in order to draw attention to the vast Sam Shepard archive contained in the Wittliff Collections in the Albert B. Alkek Library.";
        $work2->thumbnail   = "/img/work/thumbs/shepard_thumb.jpg";
        $work2->img_1       = "/img/work/spreads/shepard_spread.jpg";
        $work2->img_2       = "/img/work/spreads/shepard_spread_zoom-2.jpg";
        $work2->img_3       = "/img/work/spreads/shepard_spread_zoom-1.jpg";
        $work2->save();

        $work3              = new Work();
        $work3->title       = "Whack-a-Mole!";
        $work3->slug        = $work3->title;
        $work3->client      = "Justin Dietert";
        $work3->role        = "design + web development";
        $work3->description = "Created with JavaScript and jQuery, this is a browser-based game based on the classic <a href='http://en.wikipedia.org/wiki/Whac-A-Mole'>Whac-a-Mole</a> arcade game. It was made during my time at Codeup, a full-stack programming bootcamp in San Antonio, Texas.";
        $work3->thumbnail   = "/img/work/thumbs/whack_thumb.jpg";
        $work3->img_1       = "/img/work/spreads/whack-a-mole_spread.jpg";
        $work3->external_link = "<a href=\"/whack-play\" target=\"_blank\" class=\"play-now\">Play now &rarr;</a>";
        $work3->save();

    }

}
