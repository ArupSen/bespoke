<?php
// error checking
// ini_set('display_errors',1);

// function to create the jewelLeft and jewelRight div's
// set position as left or right as string
// set img with only the name, no ext required
// set text as string
function jewelBox ($position, $img, $text){
    if ($position == "left") {
        $position = "jewelLeft";   
    } elseif ($position == "right"){
        $position = "jewelRight";
    }
    print "
    <div class=\"$position\">
    <p>$text</p>
    <img src=\"$img.jpg\" alt=\"\" />
    <hr />
</div><!-- end .$position -->";
}


$box = array(
 array("lemon_sapphire","I loved helping Alyson and Simon to create their perfect engagement ring, they had a very strong design aesthetic and I encouraged them to primarily focus on choosing the perfect stone. We considered yellow and blue Diamonds, all colours of Sapphires and Spinels, settling on the most amazing 11.26ct natural french lemon Sapphire (with a Gem-A lab report) set in a really simple 18ct yellow gold setting."),
 
 array("square_aquamarine","A strikingly simple design comprising a square 7.92ct Aquamarine set with the perfect pale orange tone of 6.85cts Hessonite Garnets to complement the 18ct white and rose gold setting."),
 
 array("australian_sapphire","A dark blue Australian Sapphire (12.30cts) held in rose gold with a band of the most vivid green baguette cut Tsavorite Garnets, the colour combination is superb and this was one ring I was tempted to keep!"),
 
 array("tourmaline_ring","Having a passionate love of emeralds and cocktail rings, my client was completely wowed by this amazing blue/green 6.92ct emerald cut Tourmaline. Setting it in 18ct white gold with two tapered baguette Diamonds created a really sophisticated ring."),
 
 array("spinel","Spinels are fantastic stones and this one is such a unique purple colour. During its time in my home it had many admirers and there are several who mourn the lost opportunity to own it! However, the good news is that it was snapped up by my lovely cousin who desired a ring which was modern and classic and I think the square Diamonds perfectly frame the 10mm round (4.59ct) Spinel to create such a ring."),

 array("blue_ring","All my rings are hand made, however this one is a work of art. My client brought me a hugely sentimental and beautiful old cut 2 ct Diamond which she wanted to be set in a modern but timeless design. By surrounding the Diamond with two rows of bespoke cut perfectly matched blue baguette Sapphire's we managed to create a cocktail ring which is jaw dropping but still delicate enough to be extremely comfortable to wear."),

array("diamond_necklace","This piece speaks for itself, however it would have appeared even more magnificent than in the photo if it had been modeled on the gorgeous tanned skin of its' owner. A perfectly graduated collection of high quality diamonds with a fabulous claps which cleverly hide the fixing mechanism set in a handmade platinum mount."),
array("sapphire_diamond","The brief was to incorporate a diamond brooch into a wearable necklace. The beauty of this piece is that the Sapphire bead tassel has been cleverly created to be removable. This enables the necklace to be worn more simply without the drop or with a multitude of different coloured stones or pearls as an attachment.
"),
 array("emerald_pendant","Many years ago I purchased this 14ct cabochon Emerald and finally this year I decided to create a pendant. The setting is hand made and the rich 18ct yellow gold feels luxurious. Pairing it with a 5.35ct oval cabochon Tanzanite, rather than using Diamonds enables this piece to be worn for all occasions. I can make similar pendants with any combination of stones....however this piece is for sale should you be tempted!"),

array("star_sapphire_ring","This is a seriously large star Ruby ring, weighing in at approx 70cts....the optical phenomenon called asterism creates a star in sunlight or any form of direct light adding to the fun of the stone. I have supplied other clients with smaller versions.
"),
array("sapphire_cufflinks","Using star rubies to create cuff links was much appreciated by my husband as I never make him any jewellery. Making them all the more special, I had the date we met and our wedding day date engraved on the gold bars. These can be replicated in lots of different stones, a very personal gift.
"),
 array("garnet_ring","This stunning oval 7.90ct Hessonite Garnet was chosen by a client for her birthday, she wanted a really simple smooth organic style which would really enhance the gorgeous rich colour of the stone. It was just a bonus that garnet is her birthstone..."),

 array("sapphire_ring_2","This client met a spiritual man in India who advised her to wear a Sapphire for her health...she popped in for a coffee, immediately fell in love with this octagonal natural french lemon sapphire weighing 5.06cts.  We designed a ring using soft champagne diamonds in 18ct rose gold...She swears it keeps her calm!"),
 array("green_earrings","A fantastically subtle colour combination which can be worn for day, whilst still being special enough to glitter beautifully at night time. Two pink Kunzite gems (7.13cts) and a perfect set of pale green Prasiolite drops (17.09cts) have been placed in an 18ct white gold frame with minimal metal to enhance the the beauty of the stones. These earrings can be recreated in other colour combinations."),

 array("lilac_sapphire","A rare untreated 13.6ct cushion cut lilac Sapphire with .50ct trapezium shaped Diamond shoulders in 18ct yellow gold. I love to source really special stones and can always find a great selection to consider."),

array("multigem_pendant","I absolutely adore the diversity of coloured sapphires and this very soft palate of rose cut stones has been set in a barely there 9ct white gold setting to show off the stones to their best. I have a set of pink sapphires and a multi coloured set of stones waiting to be made if you are tempted? These can be also set in a rub over style.
"),
 array("diamond_crossing","I loved using my client's solitaire engagement ring to create a wide banded ring, which was not heavy, but modern and timeless....I suggested coloured diamonds, we considered pink, yellow, raspberry and teal, but the natural pink were the winner from the start....Set in 18ct white gold and using .96pts of pink diamonds, the wrapping design was inspired by arms holding safe the sentimental stone."),

 array("pearl_pendant","During my last trip to Oz, I bought this large tear drop shaped south sea pearl...My client spotted it amongst my box of treasures and chose a 4.04ct purple spinel and we set them together in this classically simple 18ct white gold necklace."),

 array("sparkly_diamond","A lovely friend wanted to surprise his wife with a very sparkly diamond ring for her 40th.  He had photo's of rings he liked, we worked together to choose the most stunning of all the options, weighing a total of 4.12cts set in Platinum. Finally we did have to size her finger as a ring with stones all the way around is very expensive to resize!"),

 array("tennis","A stunning diamond tennis bracelet made from platinum and set with approximately 47 stones weighing a total of approx 6 carats."),

 array("white_diamond_earrings","My client brought me a selection of different size and quality, old and new cut white diamonds and asked for a non white irregular design piece to go with a taupe wedding dress....We then selected cognac to champagne coloured lozenge shaped rough and brilliant cut Diamonds to be set into a textured 18ct white gold background."),

 array("dome_ring","Each piece has a completely individual lay out of stones, but with an aesthetic balance.  There is a lovely dome shape and the 3D stones show the light beautifully when worn.  We took the time to discuss each stage of the process, the result being a wedding dress perfectly complemented by a bespoke collection."),

 array("celia_ring","The sweetest commission for 18th Birthday, her mum came and we discussed what Celia liked, I then presented 17 different coloured sapphires to choose from.  Wow, did she know her own mind!  The stone and design were chosen in 45 minutes with her father on hand for advice.  The result a 1.68ct Sapphire with 4 diamonds set in yellow gold, gorgeous."),

 array("diamond_wedding_band","This lovely wedding band is made with 2.69cts of baguette cut Diamonds set in 18ct white gold.  We spent quite a lot of time making sure the ring was exactly the correct width to be in proportion with her engagement ring."),

 array("platinum_solitaire","An unusual request from a client who describes herself as 'not a big jewellery wearer' to set a rather impressive 2.2ct Brilliant cut Diamond in as simple a setting as possible.  To find the solution we enjoyed shopping together to really help choose the best setting for her, the result is the perfect modern and simple bezel set Platinum Solitaire."),

 array("gold_band","Diamond ring with gold band and white gold setting."),

array("memories_bangle","This is a very sentimental piece which I named the 'memories bangle' it incorporates gold and diamonds from important people in my clients life, which now can be kept close to her and enjoyed everyday.
"),
array("quartz_earrings","This client really found it quite difficult to find drop ear rings that suited her face perfectly, so I created a pair the perfect length. A very simple design using rutilated quartz which perfectly suits the yellow gold as it picks up the rods of golden colour in the ball. Easy to wear and great for everyday.
"),
 array("garnet","An amazing 6.62 ct Spessartite Garnet set in 18ct yellow gold with Diamond shoulders. The setting is completely open from the side view to show off this impressive stone."),

 array("pear_drops","Having sourced a complete set of four matching peridot, we used the two pear drops to make earrings to compliment the pendant.  It was very difficult to find the perfect pear shaped spessartites to match, so we found the best colour and approximate shape and had the stones cut to create the perfect balance to the drop. Once again all of the settings have been hand made to show minimal gold support."),

 array("flawless","A unique pendant made from a flawless 25ct peridot and a 6 ct spessartite garnet.  the setting is hand made to use the minimum about of gold, allowing the stones to speak for themselves. The 18ct yellow gold cable was made to match the piece."),


 array("peridot","Years of yearning for the perfect green Peridot ring, lead to an extensive search for the right one!  Once we found the 8.5ct oval cushion cut stone all we did was place a few diamonds on the shoulders and let the beautiful stone speak for itself."),

 array("sapphire","A unique untreated 14.58 ct oval cushion cut Lemon Sapphire set in 18ct yellow and white gold with perfectly proportioned diamonds to show the Sapphire at its sparkly best. A once in a life time ring which one amazing husband took the time to design for his very lucky wife!"),

 array("emerald_ring","An existing client recommended a friend of hers who had a negative experience of remodelling some jewellery in the past, therefore we took the process very slowly. Her original ring was in a wiry 70's setting and she had not worn it for a long time. I think the photo shows how amazing the ring looks now and I am delighted to say she immediately asked me to work on the design for a pendant using stones from two of her rings."),

 array("ruby_cocktail","My brief was to make a Ruby cocktail ring. My client had the brilliant cut diamonds and I sourced a selection of Rubies to choose from. This one weighs 3.35cts and is the true red of a good South East Asian ruby. We set the ring in Platinum with Baguettes Diamonds to give the ring a more contemporary feel, an important piece for a serious jewellery collector."),

array("pearl_drops","I opened my post one morning and out dropped a well loved tear sheet from a magazine. The picture sent from Ireland was of a coveted pair of earrings. Already the proud owner of the gorgeous ruby and diamond ring (on my website) Sinead was confident to start the ball rolling from afar. Set in 18ct white gold the eight Diamonds weighing a total of approx .64 pts are perfectly balanced with 10mm pear shaped fresh water pearl drops."),
  
 array("cabochon","Beautiful cabochon periodot drop earrings with mabe pearls. Fantastic for everyday or evening wear. Available to be made in any colour and size as earrings and pendants."),

 array("pearls","Large South Sea Pearls. around I3mm wide, set with a very simple 18ct yellow gold hook. Pearls can be sourced in any size and colour and can be set simply or with Diamonds or coloured stones."),

 array("funky_lunch_ring","The brief was 'make me a big funky lunch ring'. We did by designing the unheard of combination of a bezel setting a 5ct pink sapphire in 18ct rose gold with two rough cut slices of Watermelon Tourmaline showing their concentric rings of pink and green which perfectly match the sapphires' gorgeous colour."),

 array("octagonal","All clients are individual, however this Aussie only liked the colour copper and wore absolutely no jewellery at all, ever!  However when proposed to it all had to change...and if you could see this ring on her finger you would know there could be no other!  A dark green Octagonal 4.11 ct Sapphire supported by two light green oval cut Sapphires weighing 4.86cts in gorgeous 18ct Rose Gold. Totally a one off."),

 array("turquoise_pendant","When I was shown an unusual snake brooch with tassel's and asked how to resurrect a wearable piece, I immediately saw the potential of the lovely Turquoise and diamond studded dome.  Taken out of the brooch and backed in 9ct gold and worn as a pendant has given this piece longevity..."),

 array("coloured_stones","A completely unique pendant set with 19 different coloured Tourmalines The lovely mix of soft hued stones works well, however this piece can be made with any number of colours or mix of coloured stones and could be made as a pendant, ring, earrings or bracelet."),

 array("baguette","An extremely wearable and modern dark blue Sapphire and Diamond Baguette 18ct yellow gold ring. Smooth to touch with a very comfortable graduated band makes it the perfect ring to enjoy everyday."),

 array("diamond_shoulder","A bright green .75ct Emerald with triangular diamond shoulders in a rub over setting. This style of setting is very good for protecting the Emerald."),

 array("blue_sapphire","A special ring made with blue sapphires and diamonds in 18ct yellow gold to remember a promise made by my friend to her mother. Her mother wanted to know what she was going to spend a gift of some money on and she said a ring made with blue stones as they are your favourite colour."),

 array("diamond_solitaire","This is the most touching story of a couple who bought their engagement ring in 1949, 60 years later he wanted to buy his lovely wife a Diamond ring...The brief was to make .74pts diamond into a ring which sat perfectly with her wide gold wedding band."),

 array("victorian","A .75ct diamond taken from a Victorian engagement setting and made into a contemporary ring in 18ct gold to be worn in a modern way."),

 array("horse_shoe_pendant","The horse shoe shaped Diamond brooch came into my family in the late 1800's, I inherited it at 18 years of age, and as brooch wearing is not so in fashion and I found that it rarely had an outing. I purchased an antique chain and had it set mid-centre and viola a new diamond pendant for me to enjoy. Have a think if you have any old brooches collecting dust?"),

 array("two_solitaire","I met this client on a sailing holiday...she was talking about two solitaire diamond rings she had inherited and never wore and I suggested a simple double stone pendant in 18ct white gold, which she now wears everyday...recycle diamonds..."),

 array("multi_diamond","A stunning platinum diamond ring made with a total of 1.6cts of Diamonds. A fantastic ring for a special occasion."),

 array("blue_topaz","Fantastic Blue Topaz brilliant cut stones rub set in 18ct gold, great for wearing every day and can be made in any colour using a variety of stones."),

 array("solitaire","An impressive 2 ct solitaire Diamond set in platinum to show the best of sure a wonderful stone. This stone has a certificate from CIA detailing the exact grading of the stone, useful for insurance purposes."),

 array("art_deco","A wonderful emerald cut 12 x 8 mm blue Sapphire weighing 6.5cts with Diamond baguette shoulders set in platinum. My client really wanted on engagement ring in the art deco style which! think the rectangular stones hove achieved."),

 array("eternity_band","The most amazing full Diamond eternity band, set in platinum with a total of 6.4cts of Diamonds. The special story with this one is that my client lost the ring after one year, so I have made it twice! This style of ring can also be made with square or round stones and in a half or third show of stones for the more cost conscious."),

 array("cur_diamond","Fantastic brilliant cur Diamond earrings totalling lct set in 18ct yellow gold with white gold claws. Earrings can also be made with a rub over setting using your stones, or I can source any size to your budget."),

 array("asscher","Truly beautiful Asscher cut (octagonal) Diamond earrings totalling 2 cts, set in platinum. These stones are CIA certified as D colour and VVS1 quality. Really special stones.")

);

// function to create lots of jewelBox divs according to number in the array
// set the position i.e. jewelLeft or jewelRight according to the numerical order being odd or even
function boxFactory($box){
    $count = count($box); // no. of elements in the array
    $position = "";
    for ($i=0; $i < $count; $i++) { 
        if ($i % 2 == 0) { // is it odd or even
            $position = "left";
        } else {
            $position = "right";
        }
        // call the jewelBox function defined earlier
        // pass in the array elements as args
        jewelBox($position,$box[$i][0],$box[$i][1]);
    }
};

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sassalina - Sarah Freeman makes bespoke jewellery pieces in London</title>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"/> -->
<meta name="description" content="Bespoke jewellery design and remodelling"/>
<meta name="keywords" content="sassalina, sarah freeman, jewellery, jewellery design, remodelling, redesign of jewellery, precious stones, semi-precious stones, diamond ring, engagment ring, strung gems, london, balham, gemologist" />
<link href="http://sassalina.com/site/sasslina.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #ecf8f8;
}
.credits {
	width: 800px;
	margin: auto;
	font-family: "Century Gothic", Verdana, Arial, Helvetica, "sans-serif Verdana", Arial, Helvetica, sans-serif;
	font-size: 9px;
	color: #666666;
	padding-top: 7px;
}
.wrapper {height:auto;padding-bottom:40px;}
.wrapper p {
	font-family: "Century Gothic", Verdana, Arial, Helvetica, sans-serif;
	font-size: 10px;
	color: #666666;
	margin-left:44px;
}
.wrapper p.heading{clear:left;margin-top:30px;font-size:11px;}
.wrapper p.intro{width:415px;}
.wrapper p.intro:nth-of-type(3){margin-bottom:30px;}
.style2 {font-size: 11px}

/*jewel boxes*/
.jewelLeft, .jewelRight {position:relative;min-height:350px;}

.jewelLeft p, .jewelRight p {position:absolute;width:390px;padding-bottom:80px;margin:0;text-align:justify;line-height:1.7em;}

.jewelLeft img, .jewelRight img{padding-top:30px;padding-bottom:40px;}

/*box with jewel on the left*/

.jewelLeft p{
  
    left:465px;
    top:84px;
    
}
.jewelLeft img {margin-left:45px;}
.jewelLeft hr, .jewelRight hr {
    border-top:none;
    border-left:none;
    border-right:none;
    color:#666666;
    width:809px;
}

/*box with jewel on the right*/
.jewelRight p {left:44px;top:84px;}
.jewelRight img {margin-left:530px;}
-->
</style>
<script src="../Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-29067463-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<p class="credits">&nbsp;</p>

<div class="wrapper">
  <div>
    <div align="center"><img src="http://sassalina.com/site/logo.gif" width="296" height="125" class="logo" /></div>
  </div>
  <div class="menu">
    <ul class="tabs">
    <li><a href="http://sassalina.com/site/index.html">Home</a></li>
    <li><a href="../about.html">About</a></li>
    <li><a href="#"class="current style7">Bespoke</a></li>
    <li><a href="../remodelling.html">Redesign</a></li>
    <li><a href="../strunggems.html">Strung Gems</a></li>
    <li><a href="../menonly.html">Men Only</a></li>
    <li><a href="../testimonials.html">Testimonials</a></li>
    <li><a href="../contact.html">Contact</a></li> 
  </ul>

  </div> <!-- end of .menu -->
<p class="heading"><strong>Bespoke</strong></p>
<p class="intro">Every client's requirements are unique. Some have a very precise idea of the piece they want to have made, Others need to start at the beginning and first consider how and when it is to be worn. Often this will dictate which stones we use.</p>
<p class="intro">We then discuss a budget and I will choose a selection of stones for you to peruse. Depending on how rare the type of stone, it may be one of a kind, or you may have several stones to select from. Remember each gem has its own characteristics and there will be one which seems to be just made for you. We then spend as long as you need designing how the stones will be set to reflect your personal style and budget.</p>



<?php boxFactory($box); ?>



</div><!-- end .wrapper -->
<div class="credits">
  <div align="center">&copy; Sassalina 2009 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a href="mailto:sarah@sassalina.com" class="style1">sarah@sassalina.com</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ph: +44(0)7866 516 281&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Web design by <a href="http://www.martnerandmowat.com" target="_blank" class="style1">Martner &amp; Mowat</a></div>
</div>
</body>
</html>
