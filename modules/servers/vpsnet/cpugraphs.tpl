<p class="heading2">{$LANG.vpsnetcpugraphs}</p>

<p><b>{$LANG.vpsnethourly}</b></p>

<p align="center"><img src="modules/servers/vpsnet/showgraph.php?serviceid={$serviceid}&graph=cpu&period=hourly"></p>

<p><b>{$LANG.vpsnetdaily}</b></p>

<p align="center"><img src="modules/servers/vpsnet/showgraph.php?serviceid={$serviceid}&graph=cpu&period=daily"></p>

<p><b>{$LANG.vpsnetweekly}</b></p>

<p align="center"><img src="modules/servers/vpsnet/showgraph.php?serviceid={$serviceid}&graph=cpu&period=weekly"></p>

<p><b>{$LANG.vpsnetmonthly}</b></p>

<p align="center"><img src="modules/servers/vpsnet/showgraph.php?serviceid={$serviceid}&graph=cpu&period=monthly"></p>

<br /><br />

<form method="post" action="clientarea.php?action=productdetails">
<input type="hidden" name="id" value="{$serviceid}" />
<p align="center"><input type="submit" value="{$LANG.clientareabacklink}" class="button" /></p>
</form>