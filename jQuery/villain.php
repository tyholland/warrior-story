<?php
include('head.php');
?>

<div id="chapter">
<form>
<select name="hero" class="firstMenu">
<option>Heroes</option>
<option selected="selected">Villains</option>
</select>
</form>
</div>

<div id="section">
<form>
<select name="vp1" class="secondMenu">
<option selected="selected">Page 1</option>
<option>Page 2</option>
</select>
</form>
</div>

<div id="char" align="left">
Click the image to enlarge the picture
<br><br>
<table>
<tr><td >
		<a href="#" class="imgLink">
			<img src="../Images/felix2.jpg" height="100px" width="100px" />
		</a>
		<img src="../Images/felix.jpg" class="imgPop jsHide" />
	</td>
<td>
<b class="desc">Name:</b> Felix
<br>
<b class="desc">Description:</b> A minion of King Zephion. He is the second strongest of the minions. He is the most calm headed one. Likes to act like he's the boss when King Zephion isn't around.
</td></tr>
<tr><td >
		<a href="#" class="imgLink">
			<img src="../Images/zephion2.jpg" height="100px" width="100px" />
		</a>
		<img src="../Images/zephion.jpg" class="imgPop jsHide" />
	</td>
<td>
<b class="desc">Name:</b> King Zephion
<br>
<b class="desc">Description:</b> The king of the demons. He is set on taking over the planet Earth and becoming the supreme ruler. He is the strongest of the demons and he controls them, making them do as he pleases.
</td></tr>
<tr><td >
		<a href="#" class="imgLink">
			<img src="../Images/metelica2.jpg" height="100px" width="100px" />
		</a>
		<img src="../Images/metelica.jpg" class="imgPop jsHide" /></td>
<td>
<b class="desc">Name:</b> Metelica
<br>
<b class="desc">Description:</b> The craziest of the minions.. His power level puts him at the fourth place in ranking. He uses all kinds of gadgets as weapons, the sky is the limit with this demon.
</td></tr>
<tr><td >
		<a href="#" class="imgLink">
			<img src="../Images/rex2.jpg" height="100px" width="100px" />
		</a>
		<img src="../Images/rex.jpg" class="imgPop jsHide" /></td>
<td>
<b class="desc">Name:</b> Rex
<br>
<b class="desc">Description:</b> Not particularly the strongest of the minions, but one of the craftiest. He like the technician and mad-scientist of the minions. He is the second to last in power. 
</td></tr>
</table>
</div>

<?php
include('end.php');
?>