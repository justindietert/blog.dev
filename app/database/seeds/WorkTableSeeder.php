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

        $bobcatclub              = new Work();
        $bobcatclub->title       = "Bobcat Club";
        $bobcatclub->slug        = $bobcatclub->title;
        $bobcatclub->client      = "Texas State University";
        $bobcatclub->role        = "print design";
        $bobcatclub->description = "The Bobcat Club is the principal fundraising arm of the Texas State Intercollegiate Athletics Department. They needed a fresh design concept for their annual fundraising brochure, which continued their successful Pave the Way campaign. They were presented with the following 3 brochure spreads to choose from, which show a range of aesthetic options.";
        $bobcatclub->thumbnail   = "/img/work/thumbs/bobcatclub_thumb.jpg";
        $bobcatclub->img_1       = "/img/work/spreads/bobcat_club_3_detail.png";
        $bobcatclub->img_2       = "/img/work/spreads/bobcat_club_3.jpg";
        $bobcatclub->img_3       = "/img/work/spreads/bobcat_club_2.jpg";
        $bobcatclub->img_4       = "/img/work/spreads/bobcat_club_1.jpg";
        $bobcatclub->save();

        $kapable              = new Work();
        $kapable->title       = "Kapable Solutions";
        $kapable->slug        = $kapable->title;
        $kapable->client      = "Kapable Solutions";
        $kapable->role        = "identity design";
        $kapable->description = "Kennith A. Patterson needed a fresh, forward-thinking identity for his freelance consulting company, Kapable Solutions, which specializes in project management and process improvement. I utilized the sturdy, yet friendly Atrament typeface for the wordmark, highlighting the unique spelling of “Kapable” (a play on Kenny’s initials, “KAP”) with a horizontal line above the “K”. Intended as a symbol of the process of arriving at solutions, the line element also lended itself well to the creation of secondary marks comprised of Kenny’s initials.";
        $kapable->thumbnail   = "/img/work/thumbs/kapable_thumb.png";
        $kapable->img_1       = "/img/work/spreads/kapable_solutions_logo.png";
        $kapable->img_2       = "/img/work/spreads/kapable_solutions_secondary.png";
        $kapable->img_3       = "/img/work/spreads/kapable_solutions_color.png";
        $kapable->img_4       = "/img/work/spreads/kapable_solutions_type.png";
        $kapable->img_5       = "/img/work/spreads/kapable_solutions_bizcard.png";
        $kapable->save();

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
        $innovation->description = "Innovation and Exploration was the theme selected for the Fall 2014 issue of Texas State University's alumni magazine, <em>Hillviews</em>. The primary goal of this issue was to bring attention to how Texas State's science, technology, engineering, and math departments are reshaping the university's national status in these fields. I was tasked with designing the cover and feature story spread, in which I utilized the engineering department's waterjet machine to cut typography out of frosted acrylic. I also art directed the photo shoot to document the cutting process.";
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
        $whack->description = "Created with JavaScript and jQuery, this is a browser-based game based on the classic <a href='http://en.wikipedia.org/wiki/Whac-A-Mole'>Whac-a-Mole</a> arcade game. It was made during my time at Codeup, a full-stack programming bootcamp in San Antonio, Texas. The game is mobile-responsive and also includes sound effects.";
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
        $shepard->img_1       = "/img/work/spreads/shepard_spread_zoom-2.jpg";
        $shepard->img_2       = "/img/work/spreads/shepard_spread.jpg";
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

        $stem              = new Work();
        $stem->title       = "STEM Graduates";
        $stem->slug        = $stem->title;
        $stem->client      = "Texas State University";
        $stem->role        = "print design";
        $stem->description = "Designed for the Fall 2014 issue of Texas State University's alumni magazine, <em>Hillviews</em>, this two-spread story needed to highlight the growing demand for graduates in the fields of science, technology, engineering, and math. I was also responsible for art directing the photo shoots of Texas State graduates employed by CFAN for the article's intro spread.";
        $stem->thumbnail   = "/img/work/thumbs/stem_thumb.jpg";
        $stem->img_1       = "/img/work/spreads/stem_spread_zoom.jpg";
        $stem->img_2       = "/img/work/spreads/stem_spread_1.jpg";
        $stem->img_3       = "/img/work/spreads/stem_spread_2.jpg";
        $stem->save();

        $salute              = new Work();
        $salute->title       = "Salute to Freedom";
        $salute->slug        = $salute->title;
        $salute->client      = "Texas State University";
        $salute->role        = "print design";
        $salute->description = "This advertisement for Texas State University was placed in <em>Texas Monthly</em>, drawing attention to the contributions of the university's most famous alumnus, President Lyndon Baines Johnson.";
        $salute->thumbnail   = "/img/work/thumbs/salute_thumb.jpg";
        $salute->img_1       = "/img/work/spreads/salute_spread.jpg";
        $salute->save();

        $firestation              = new Work();
        $firestation->title       = "Fire Station Studios";
        $firestation->slug        = $firestation->title;
        $firestation->client      = "Texas State University";
        $firestation->role        = "print design";
        $firestation->description = "This article was designed for the Spring 2014 issue of Texas State University's alumni magazine, <em>Hillviews</em>, which focused on the performing arts. The design needed to effectively highlight the historic Fire Station Studios, which houses Texas State's Sound Recording Technology Program.";
        $firestation->thumbnail   = "/img/work/thumbs/firestation_thumb.jpg";
        $firestation->img_1       = "/img/work/spreads/firestation_spread_zoom.jpg";
        $firestation->img_2       = "/img/work/spreads/firestation_spread_1.jpg";
        $firestation->img_3       = "/img/work/spreads/firestation_spread_2.jpg";
        $firestation->save();

        $takeaseat              = new Work();
        $takeaseat->title       = "Take a Seat";
        $takeaseat->slug        = $takeaseat->title;
        $takeaseat->client      = "Texas State University";
        $takeaseat->role        = "interactive design";
        $takeaseat->description = "This interactive PDF form was used online as part of a campaign to raise money for the performing arts at Texas State University. The Take a Seat initiative asked theatre supporters to donate $5,000 to have their name(s) engraved on a plaque permanently affixed to the back of a theatre seat.";
        $takeaseat->thumbnail   = "/img/work/thumbs/takeaseat_thumb.jpg";
        $takeaseat->img_1       = "/img/work/spreads/takeaseat_spread.jpg";
        $takeaseat->save();

        $retention              = new Work();
        $retention->title       = "TXST Retention";
        $retention->slug        = $retention->title;
        $retention->client      = "Texas State University";
        $retention->role        = "print design";
        $retention->description = "Texas State's Retention Management and Planning office needed various collateral to advertise their initiatives, such as a student mentoring program and a program targeted at increasing male student involvement on campus.";
        $retention->thumbnail   = "/img/work/thumbs/retention_thumb.jpg";
        $retention->img_1       = "/img/work/spreads/retention_poster.jpg";
        $retention->img_2       = "/img/work/spreads/retention_postcard.jpg";
        $retention->save();

        $whysociology              = new Work();
        $whysociology->title       = "Why Sociology?";
        $whysociology->slug        = $whysociology->title;
        $whysociology->client      = "Texas State University";
        $whysociology->role        = "print design";
        $whysociology->description = "Texas State University's Sociology department needed a new look and concept for recruiting students that could be applied to various collateral such as pull-up banners and promotional brochures.";
        $whysociology->thumbnail   = "/img/work/thumbs/whysociology_thumb.jpg";
        $whysociology->img_1       = "/img/work/spreads/whysociology_spread_1.jpg";
        $whysociology->img_2       = "/img/work/spreads/whysociology_spread_2.jpg";
        $whysociology->img_3       = "/img/work/spreads/whysociology_spread_3.jpg";
        $whysociology->save();

        $logos              = new Work();
        $logos->title       = "Logos and Marks";
        $logos->slug        = $logos->title;
        $logos->client      = "various";
        $logos->role        = "identity design";
        $logos->description = "I created these logos and secondary brand marks for various clients. <a href='http://digitalprolab.com/'>Digital Pro Lab</a> is a professional photo lab based in San Antonio, Texas. More images and information to come.";
        $logos->thumbnail   = "/img/work/thumbs/logos_thumb.jpg";
        $logos->img_1       = "/img/work/spreads/logos_spread.png";
        $logos->save();

        $social              = new Work();
        $social->title       = "TXST Social Media";
        $social->slug        = $social->title;
        $social->client      = "Texas State University";
        $social->role        = "digital design";
        $social->description = "Created for Texas State University's social media coordinators in the Office of University Marketing, these custom digital graphics promoted various campus events, organizations, and school spirit. They were primarily used as Facebook cover photos or as Twitter image attachments.";
        $social->thumbnail   = "/img/work/thumbs/social_thumb.jpg";
        $social->img_1       = "/img/work/spreads/social_spread_1.jpg";
        $social->img_2       = "/img/work/spreads/social_spread_2.jpg";
        $social->img_3       = "/img/work/spreads/social_spread_3.jpg";
        $social->img_4       = "/img/work/spreads/social_spread_4.jpg";
        $social->img_5       = "/img/work/spreads/social_spread_5.jpg";
        $social->img_6       = "/img/work/spreads/social_spread_6.jpg";
        $social->img_7       = "/img/work/spreads/social_spread_7.jpg";
        $social->img_8       = "/img/work/spreads/social_spread_8.jpg";
        $social->img_9       = "/img/work/spreads/social_spread_9.jpg";
        $social->save();

        $foster              = new Work();
        $foster->title       = "Jeff Foster Invite";
        $foster->slug        = $foster->title;
        $foster->client      = "Texas State University";
        $foster->role        = "print design";
        $foster->description = "The Texas State Athletics department needed an invitation for the jersey retirement of one of their most famous alumni, Jeff Foster. The design needed to highlight his successful career as both a Texas State Bobcat and an Indiana Pacer.";
        $foster->thumbnail   = "/img/work/thumbs/foster_thumb.jpg";
        $foster->img_1       = "/img/work/spreads/foster_spread_1.jpg";
        $foster->img_2       = "/img/work/spreads/foster_spread_2.jpg";
        $foster->save();

    }

}
