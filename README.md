# Auto-Updating Portfolios (Kinda)

![On Site](https://raw.githubusercontent.com/savwiley/autoPortfolios-Colors/main/example.png)

Want to keep track of your portfolios? Tired of editing and re-uploading images? Tired of completely forgetting to edit/re-upload the image and getting exhausted with portfolios in general? Well, the fix is here in a very complicated fashion!

We can make this work, don't worry. You got this.

*Please note, all examples will allude to the image above, just so you have a visual.*

## Setting up eTCG

Go into your TCG Settings. We're going to add a few Additional Fields. Each portfolio type will need two fields, making a total of four.

### For Palette Portfolios 

Name your first field ***pPortfolio***. In this field, you'll include the colors of the portfolios you've already completed in lowercase and separated by commas. 

*For example: red, yellow, green, blue, brown, gray*

Name your second field ***pPortfolioNames***. In this field, list all of the decks you've included in this portfolio, separated by commas. Include them all, whether you've completed them or not, in the order of color (from red to gray). 

*For example: Colony, Fox Magic, Uranus, Affection, Quality, Faction, Quality, Throttle*

### For Monocrhome Portfolios

Name your first field ***mPortfolio***. The first thing you're going to add into this field is the color of your portfolio. This will be followed by spelled out numbers of each completed deck. These numbers will be the order that you're about to list your decks in. Everything must be lowercase and separated by commas.

*For example: yellow, one, two, three, four*

Name your second field ***mPortfolioNames***. Just like before, this field will list every deck in your portfolio, separated by commas, whether you've completed them or not. Importantly, the order you put them in here will correspond with the numbers you insert above. So if you complete the first one, you'll add "one" to the field above. The fifth one, you add "five" and so on.

*For example: No Heart, Wakawaka, Rising, Uranus, Zanarkand, Art Is A Bang, Automail, Raidant*

## Setting up your site

All you have to do is go to the files above. I've separated the palette code and monochrome code into two files, to help with confusion. Just copy that code and paste it into your *colors.php* (or whatever you've named the site file) anywhere that you want this to appear.

And that should be it! Please let me know if you have any problems. Thanks!

... And yeah, I just realized I misspelled Radiant.
