<!-- hi! I'm joe. welcome to the source code of this silly thing -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- let's leech bandwidth from google. no, really they asked for it. -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<title>Random color cells</title>
<script type="text/javascript">
/* ganked the guts of this from a few places */
function randomWebColor() {
	var number_of_colors = 0xffffff;
	var num = Math.round(Math.random() * number_of_colors);
	return ('#0' + num.toString(16)).replace(/^#0([0-9a-f]{6})$/i, '#$1');
}
function foregroundColorFromWebColor(color){
	// #RRGGBB
	// 0123456
	var bg = {
		R : parseInt(color.substr(1,2),16),
		G : parseInt(color.substr(3,2),16),
		B : parseInt(color.substr(5,2),16)
	};
	var nThreshold = 105;
	var bgDelta = ((bg.R * 0.299) + (bg.G * 0.587) + (bg.B * 0.114));
	var foreColor = (255 - bgDelta < nThreshold) ? '#000000' : '#ffffff';
	return foreColor;
}
/* got these wordlists via google-ing and wikipedia-ing, you know, randomly */
var adjectives = ['aback','abaft','abandoned','abashed','aberrant','abhorrent','abiding','abject','ablaze','abnormal','aboard','aboriginal','abortive','abounding','abrasive','abrupt','absent','absorbed','absorbing','abstracted','absurd','abusive','acceptable','accessible','accidental','accurate','acoustic','acrid','actually','ad','hoc','adamant','adaptable','addicted','adhesive','adjoining','adorable','afraid','agonizing','ahead','alcoholic','alert','alike','alive','alleged','alluring','aloof','ambiguous','ambitious','amuck','ancient','animated','apathetic','aquatic','aromatic','aspiring','assorted','astonishing','auspicious','available','average','aware','axiomatic', 'bad','barbarous','bashful','bawdy','beautiful','befitting','belligerent','berserk','better','big','billowy','bizarre','black','boiling','boorish','boring','boundless','brash','brawny','breezy','brief','bright','broad','broken','bumpy','burly', 'cagey','callous','capable','capricious','ceaseless','changeable','cheerful','childlike','chilly','chivalrous','chubby','chunky','clammy','classy','cloistered','cloudy','clumsy','coherent','cold','colossal','combative','comfortable','cooing','cool','cooperative','courageous','cowardly','crabby','craven','crazy','credible','creepy','crooked','cuddly','cultured','curly','curved','cynical', 'daffy','daily','damaged','damaging','damp','dapper','dashing','dazzling','deadpan','debonair','decisive','decorous','deep','deeply','defective','delightful','demonic','deranged','deserted','detailed','determined','devilish','didactic','diligent','direful','dirty','disagreeable','discreet','disillusioned','dispensable','divergent','dizzy','domineering','draconian','dramatic','drunk','dry','dull','dusty','dynamic','dysfunctional', 'eager','early','earsplitting','earthy','eatable','economic','educated','efficacious','efficient','elated','elderly','elfin','elite','eminent','empty','enchanting','encouraging','endurable','energetic','entertaining','enthusiastic','equable','erect','erratic','ethereal','evanescent','evasive','evil','excellent','excited','exclusive','exotic','expensive','exuberant','exultant', 'fabulous','faded','fallacious','fanatical','fancy','fantastic','fascinated','fast','fat','faulty','fearless','feigned','fertile','festive','filthy','finicky','flagrant','flashy','flawless','flippant','flowery','foamy','foregoing','forgetful','fortunate','frail','fretful','friendly','functional','funny','furtive','futuristic', 'gabby','gainful','gamy','gaping','garrulous','gaudy','gentle','giant','giddy','gigantic','glamorous','gleaming','glib','glorious','glossy','godly','good','goofy','gorgeous','graceful','grandiose','gratis','great','greedy','green','groovy','grotesque','grouchy','gruesome','grumpy','guarded','guiltless','gullible','gusty','guttural', 'habitual','half','hallowed','halting','handsome','handsomely','hapless','happy','harmonious','heady','healthy','heartbreaking','heavenly','heavy','hellish','helpful','hesitant','high','highfalutin','hilarious','historical','holistic','hollow','honorable','horrible','hospitable','huge','hulking','humdrum','humorous','hungry','hurried','hurt','hypnotic','hysterical', 'icky','idiotic','ignorant','illegal','illustrious','imaginary','immense','imminent','impartial','imperfect','imported','incandescent','incompetent','inconclusive','industrious','innate','instinctive','internal','invincible','irate','itchy', 'jaded','jagged','jazzy','jealous','jittery','jobless','jolly','joyous','judicious','jumbled','jumpy','juvenile', 'kaput','kind','kindhearted','knotty','knowing','knowledgeable','known', 'labored','lackadaisical','lacking','lamentable','languid','large','late','laughable','lavish','lazy','lean','learned','legal','lethal','level','lewd','light','likeable','literate','little','lively','long','longing','lopsided','loutish','lovely','loving','low','lowly','lucky','ludicrous','lush','luxuriant','lying','lyrical', 'macabre','macho','maddening','madly','magenta','magical','magnificent','majestic','makeshift','malicious','mammoth','maniacal','many','marked','massive','materialistic','mature','measly','meek','melodic','merciful','mere','mighty','mindless','miniature','minor','miscreant','moaning','modern','moldy','momentous','muddled','mundane','murky','mushy','mysterious', 'naive','nappy','narrow','nasty','nauseating','nebulous','needless','needy','neighborly','nervous','new','nice','nifty','noiseless','noisy','nonchalant','nondescript','nonstop','nostalgic','nosy','noxious','null','numberless','numerous','nutritious', 'oafish','obedient','obeisant','obscene','obsequious','observant','obsolete','obtainable','oceanic','odd','offbeat','old','omniscient','onerous','optimal','orange','ordinary','organic','ossified','oval','overconfident','overjoyed','overrated','overt','overwrought', 'painful','painstaking','panoramic','parched','parsimonious','pastoral','pathetic','peaceful','penitent','perfect','periodic','permissible','perpetual','petite','phobic','picayune','piquant','placid','plant','plant','plausible','pleasant','plucky','pointless','political','possessive','precious','premium','pretty','prickly','productive','profuse','protective','proud','psychedelic','psychotic','puffy','pumped','puny','purple', 'quack','quaint','quarrelsome','questionable','quick','quickest','quiet','quixotic','quizzical', 'rabid','racial','ragged','rainy','rambunctious','rampant','rare','raspy','ratty','rebel','receptive','recondite','red','redundant','reflective','relieved','reminiscent','resolute','resonant','rhetorical','righteous','rightful','ritzy','roasted','robust','romantic','roomy','round','royal','ruddy','rural','rustic','ruthless', 'sable','sad','sassy','satisfying','savoy','scandalous','scarce','scary','scientific','scintillating','scrawny','secretive','sedate','seemly','selective','shallow','shocking','short','shrill','silly','sincere','skillful','skinny','sloppy','slow','small','smelly','sneaky','snobbish','snotty','soggy','somber','sordid','spectacular','spicy','spiffy','spiritual','splendid','spooky','spurious','squalid','square','squeamish','staking','standing','statuesque','steadfast','stereotyped','stimulating','stingy','strange','subdued','subsequent','successful','succinct','sulky','supreme','swanky','sweltering','symptomatic','synonymous', 'taboo','tacit','tacky','talented','tall','tame','tan','tangible','tangy','tart','tasteful','tawdry','tearful','telling','temporary','tender','tenuous','tested','testy','therapeutic','thinkable','threatening','tight','tightfisted','tiny','tiresome','toothsome','torpid','tough','towering','tranquil','trashy','tricky','trite','truculent','typical', 'ubiquitous','ugliest','ugly','ultra','unable','unaccountable','unadvised','unarmed','unbecoming','unbiased','uncovered','understood','undesirable','unequaled','uneven','unsightly','unsuitable','unusual','upbeat','uppity','upset','uptight','used','utopian','utter','uttermost', 'vacuous','vagabond','vague','various','vast','vengeful','venomous','verdant','versed','victorious','vigorous','vivacious','voiceless','volatile','voracious','vulgar', 'wacky','waggish','wakeful','wanting','warlike','warm','wary','wasteful','wasteful','watchful','watery','weak','wealthy','weary','wee','wet','whimsical','whispering','wholesale','wicked','wide','willing','wiry','wise','wistful','woebegone','womanly','wonderful','wooden','woozy','workable','worried','worthless','wrathful','wretched','wry', 'x-rated', 'yellow','yielding','young','youthful','yummy', 'zany','zealous','zippy','zonked'];
var nouns = ['times', 'persons', 'years', 'ways', 'days', 'things', 'men', 'worlds', 'lives', 'hands', 'parts', 'children', 'eyes', 'women', 'places', 'works', 'weeks', 'cases', 'points', 'governments', 'companies', 'numbers', 'groups', 'problems', 'facts'];
var verbs = ['are','have','do','eat','sleep','drink','put','keep','run','walk','say','get','make','go','know','take','see','come','think','look','want','give','use','find','tell','ask','work','seem','feel','try','leave','call'];
var collectives = ['a badling of ducks','a bale of turtles','a band of jays','a bank of monitors','a bank of swans','a bask of crocodiles','a bazaar of guillemots','a bed of clams','a bed of oysters','a bed of snakes','a bellowing of bullfinches','a bevy of larks','a bevy of quail','a bevy of swans','a bevy of turtles','a bind of salmon','a blaze of dragons','a bouquet of flowers','a bouquet of pheasants','a brood of hens','a building of rooks','a bunch of grapes','a cast of falcons','a cast of hawks','a charm of finches','a charm of goldfinches','a charm of hummingbirds','a chirm of goldfinches','a clamour of rooks','a clattering of choughs','a clattering of jackdaws','a cloud of gnats','a cloud of grasshoppers','a cloud of sea fowl','a cluster of grapes','a cluster of spiders','a clutch of chicks','a coil of wigeon','a colony of ants','a colony of frogs','a colony of gulls','a colony of penguins','a company of parrots','a congregation of alligators','a congregation of crocodiles','a congregation of plovers','a congress of eagles','a conventicle of magpies','a convocation of eagles','a copse of trees','a covert of coots','a covey of birds','a covey of grouse','a covey of partridges','a covey of pheasants','a covey of ptarmigans','a covey of quail','a creche of penguins','a creep of tortoises','a culture of bacteria','a den of snakes','a den of vipers','a descent of woodpeckers','a desert of lapwings','a dissimulation of birds','a diving of teal','a doading of sheldrakes','a dole of doves','a dopping of ducks','a dose of crabs','a drum of goldfinches','a dule of turtles','a fall of woodcocks','a fever of stingrays','a flamboyance of flamingoes','a fleet of mudhen','a flight of butterflies','a flight of cormorants','a flight of doves','a flight of dragons','a flight of goshawks','a flight of swallows','a fling of dunlins','a fling of sandpipers','a float of crocodiles','a flock of birds 	','a flock of geese','a flock of seagulls','a flush of ducks','a fluther of jellyfish','a flutter of butterflies','a fry of eel','a gaggle of geese','a gaggle of swans','a gargle of swans','a glean of herrings','a grind of blackfish','a grove of trees','a hand of bananas','a herd of cranes','a herd of curlews','a herd of swans','a herd of wrens','a hill of ruffs','a hive of bees','a horde of crows','a host of sparrows','a hover of crows','a hover of trouts','a huddle of penguins','a kettle of hawks','a kit of pigeons','a knob of toads','a knob of waterfowl','a knot of frogs','a knot of toads','a knot of worms','a lap of cod','a lease of tame hawks','a lek of grouse','a loft of pigeons','a loveliness of ladybirds','a lump of toads','a mess of iguanas','a mews of capons','a mite of mites','a mob of crows','a murder of crows','a murmuration of starlings','a muster of crows','a muster of peacocks','a muster of storks','a mutation of thrushes','a nest of crocodiles','a nest of snakes','a nest of toads','a nest of turtles','a nest of vipers','a nide of geese','a nide of pheasants','a nye of pheasants','a pack of galahs','a pack of grouse','a paddling of ducks','a pandemonium of parrots','a parcel of crows','a parcel of penguins','a parliament of crows','a parliament of owls','a parliament of rooks','a party of jays','a patch of flowers','a peep of chickens','a phalanx of storks','a pile of leaves','a pit of snakes','a piteousness of doves','a pitying of doves','a pitying of turtledoves','a plague of locusts','a plague of pigeons','a plump of ducks','a plump of geese','a plump of waterfowl','a pod of whales','a prattle of parrots','a pride of peacocks','a quarrel of sparrows','a quiver of cobras','a raffle of turkeys','a raft of auks','a raft of coots','a raft of ducks','a rafter of turkeys','a rainbow of butterflies','a rasp of guinea fowl','a rhumba of rattlesnakes','a richness of martins','a risk of lobsters','a rout of snail','a school of fish','a scold of jays','a scourge of mosquitoes','a screech of gulls','a shiver of sharks','a shoal of bass','a siege of bitterns','a siege of herons','a skein of geese','a slither of snakes','a smack of jellyfish','a sord of ducks','a sord of mallards','a spring of teal','a stand of flamingoes','a stand of trees','a stare of owls','a sute of mallards','a swarm of ants','a swarm of bees','a swarm of eel','a swarm of flies','a taint of tilapia','a team of ducks','a thicket of trees','a tidings of magpies','a train of jackdaws','a trembing of finches','a trimming of finches','a trip of dotterel','a troubling of goldfinches','a troubling of goldfish','a troup of shrimp','a turn of turtles','a twack of ducks','a ubiquity of sparrows','a wake of buzzards','a walk of snipe','a watch of nightingales','a wedge of geese','a wedge of swans','a weyr of dragons','a whiteness of swans','a wing of dragons','a wisp of snipe','an army of ants','an army of frogs','an exaltation of larks','an exalting of larks','an exultation of skylarks','an eyrar of swans','an intrusion of cockroaches','an ostentation of peacocks','an unkindness of ravens'];
// var emphasis = ['xx-small','x-small','small','medium','large','x-large','xx-large'];
var emphasis = ['20px','22px','24px','26px','28px','30px','32px','34px','36px','38px','40px','42px','44px','46px'];
/* wish pulling a random item from an array was built-in */
function getRandom(arr) {
	return arr[Math.floor(Math.random()*arr.length)];
}
function adjustHeight() {
	var h = $(window).height() / 2;
	$('td').css('height',h+'px');
}
function randTd(context) {
	var term = $(context).attr('id').split('-')[1];
	var words = eval(term); /* yes, eval is evil */
	var backgroundColor = randomWebColor();
	var foregroundColor = foregroundColorFromWebColor(backgroundColor);
	var textShadowColor = foregroundColorFromWebColor(foregroundColor);
	$(context).text(getRandom(words) + ' ').css({
		'backgroundColor': backgroundColor,
		'color': foregroundColor,
		'textShadow': '1px 1px 0 '+textShadowColor,
		'opacity': 0.5,
		'fontSize': getRandom(emphasis)
	}).animate({
		'opacity': 1.0,
		'fontSize': getRandom(emphasis)
	}, 'fast');
}
var save = false;
$(document).ready(function(){
	// $(document).height).resize()
	var row = $('td').bind('mouseover click',function(){
		if ($('div#save a:first').text() === 'on') {
			var that = this;
			randTd(that);
		}
	});
	adjustHeight();
	$(window).resize(function(){
		adjustHeight();
	});
	$(window).bind('resize load', function(){
		$('div#save').css({
			top: ($('body').innerHeight()-$('div#save').height())/2,
			left: ($('body').innerWidth()-$('div#save').width())/2,
		});

	})
	
	$('div#save a:first').bind('click', function(){
		var current = $(this).text();
		var current = (current === 'on') ? 'on' : 'off';
		var opposite = (current === 'on') ? 'off' : 'on';
		$(this).text(opposite);
		return false;
	}).toggle(function(){
				$(this).parent('div').css({opacity: 0.7});
	}, function(){
		$(this).parent('div').css({opacity: 1.0});
	});
	$('div#save a.tweet').bind('click', function(){
		var tweet = $.trim($('td').text()) + '. http://sn.im/r.cell';
		tweet = tweet.substr(0,1).toUpperCase() + tweet.substr(1);
		var tweetUrl = 'http://twitter.com/home/?status=' + encodeURIComponent(tweet);
		window.open(tweetUrl);
		return false;
	});
	// load initial set of words.
	$('td').trigger('click');
	
});
/* thanks for reading my source! if you enjoyed it, drop me a line at joe@artlung.com or reply on http://twitter.com/ to @artlung */
</script>
<style type="text/css">
body { margin: 0; font-size: x-small; font-family: sans-serif;}
td { text-align: center;}
#save {
	background-color: #ccc;
	position: absolute;
	top: 44%;
	width: 140px;
	height: 50px;
	left: 46%;
	border-radius: 10px;
	-moz-border-radius: 10px;
	color: #666;
	font-size: 30px;
	line-height: 30px;
	vertical-align: middle;
	overflow: hidden;
	text-align: center;
	text-shadow: 1px 1px 0 #eee;
}
#save a{
	color: #666;
	text-decoration: none;
	outline: none;
}
#save a.tweet {
	font-size: x-small;
}
</style>
</head>
<body>
	<!-- kicking it with tables. for fun! height won't validate, sorry w3c. -->
	<table cellspacing="0" cellpadding="0" border="0" width="100%" height="100%">
	<tr>
		<td width="50%" id="word-adjectives">click</td>
		<td width="50%" id="word-nouns">clicky</td>
	</tr>
	<tr>
		<td id="word-verbs">click</td>
		<td id="word-collectives">click</td>
	</tr>
	</table>
	<div id="save">
		<a href="#">on</a><br />
		<a href="#" class="tweet">tweet this</a>
	</div>
</body>
</html>