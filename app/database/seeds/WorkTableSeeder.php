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

        $space              = new Work();
        $space->title       = "Partners in Space";
        $space->slug        = $space->title;
        $space->client      = "Texas State University";
        $space->role        = "print design";
        $space->description = "Designed for Texas State University's alumni magazine, <em>Hillviews</em>, the Partners in Space article needed to highlight the collaboration between Texas State, Jacobs Engineering, and NASA on projects such as the International Space Station and the manned mission to Mars.";
        $space->thumbnail   = "/img/work/thumbs/space_thumb.jpg";
        $space->img_1       = "/img/work/spreads/space_spread_hero-2.jpg";
        $space->img_2       = "/img/work/spreads/space_spread_zoom-mars-2.jpg";
        $space->img_3       = "/img/work/spreads/space_spread.jpg";
        $space->save();

        $tyleninja              = new Work();
        $tyleninja->title       = "TyleNinja";
        $tyleninja->slug        = $tyleninja->title;
        $tyleninja->client      = "Codeup";
        $tyleninja->role        = "design + web development";
        $tyleninja->description = "TyleNinja is a sliding-tile puzzle game created over the course of two weeks for a team capstone project at Codeup, a full-stack programming bootcamp in San Antonio, Texas. My capstone partner, Jamie Haskell, and I built the site with the Laravel MVC Framework. The game itself was created with JavaScript and jQuery.";
        $tyleninja->thumbnail   = "/img/work/thumbs/tyleninja_thumb.jpg";
        $tyleninja->img_1       = "/img/work/spreads/tyle-ninja_spread-home.png";
        $tyleninja->img_2       = "/img/work/spreads/tyle-ninja_game.png";
        $tyleninja->external_link = "<a href=\"http://tyle.ninja/\" target=\"_blank\" class=\"play-now\">Play now &rarr;</a>";
        $tyleninja->save();

        $innovation              = new Work();
        $innovation->title       = "Innovation and Exploration";
        $innovation->slug        = $innovation->title;
        $innovation->client      = "Texas State University";
        $innovation->role        = "print design";
        $innovation->description = "Innovation and Exploration was the theme selected for the Fall 2014 issue of Texas State University's alumni magazine, <em>Hillviews</em>. The primary goal of this issue was to bring attention to how Texas State's science, technology, engineering, and math departments are reshaping the university's national status in these fields. I was tasked with designing the cover and feature story spread, in which I utilized the engineering department's waterjet machine to cut typography out of frosted acrylic and art directed a photo shoot to document the process.";
        $innovation->thumbnail   = "/img/work/thumbs/innovation_thumb.jpg";
        $innovation->img_1       = "/img/work/spreads/innovation_spread_1.jpg";
        $innovation->img_2       = "/img/work/spreads/innovation_spread_2.jpg";
        $innovation->img_3       = "/img/work/spreads/innovation_spread_3.jpg";
        $innovation->save();

        $whack              = new Work();
        $whack->title       = "Whack-a-Mole!";
        $whack->slug        = $whack->title;
        $whack->client      = "Justin Dietert";
        $whack->role        = "design + web development";
        $whack->description = "Created with JavaScript and jQuery, this is a browser-based game based on the classic <a href='http://en.wikipedia.org/wiki/Whac-A-Mole'>Whac-a-Mole</a> arcade game. It was made during my time at Codeup, a full-stack programming bootcamp in San Antonio, Texas.";
        $whack->thumbnail   = "/img/work/thumbs/whack_thumb.jpg";
        $whack->img_1       = "/img/work/spreads/whack-a-mole_spread.jpg";
        $whack->external_link = "<a href=\"/whack-play\" target=\"_blank\" class=\"play-now\">Play now &rarr;</a>";
        $whack->save();

        $shepard              = new Work();
        $shepard->title       = "Sam Shepard Ad";
        $shepard->slug        = $shepard->title;
        $shepard->client      = "Texas State University";
        $shepard->role        = "print design";
        $shepard->description = "Designed for Texas State University's <a href='http://www.txstate.edu/discover/shepard'>Discover</a> research initiative, this advertisement was placed in <em>Texas Monthly</em> in order to draw attention to the vast Sam Shepard archive contained in the Wittliff Collections in the Albert B. Alkek Library.";
        $shepard->thumbnail   = "/img/work/thumbs/shepard_thumb.jpg";
        $shepard->img_1       = "/img/work/spreads/shepard_spread.jpg";
        $shepard->img_2       = "/img/work/spreads/shepard_spread_zoom-2.jpg";
        $shepard->img_3       = "/img/work/spreads/shepard_spread_zoom-1.jpg";
        $shepard->save();

        $simon              = new Work();
        $simon->title       = "Simple Simon";
        $simon->slug        = $simon->title;
        $simon->client      = "Justin Dietert";
        $simon->role        = "design + web development";
        $simon->description = "Simple Simon is a browser-based game modeled after the classic <a href='http://en.wikipedia.org/wiki/Simon_%28game%29'>Simon</a> game. It was written in vanilla JavaScript and custom CSS over the course of 5 days during my time at Codeup, a full-stack programming bootcamp in San Antonio, Texas.";
        $simon->thumbnail   = "/img/work/thumbs/simon_thumb.jpg";
        $simon->img_1       = "/img/work/spreads/simon_spread_1.jpg";
        $simon->img_2       = "/img/work/spreads/simon_spread_2.jpg";
        $simon->img_3       = "/img/work/spreads/simon_spread_3.jpg";
        $simon->external_link = "<a href=\"/simon-play\" target=\"_blank\" class=\"play-now\">Play now &rarr;</a>";
        $simon->save();


    }

}
