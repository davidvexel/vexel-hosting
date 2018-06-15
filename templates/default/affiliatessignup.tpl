{if $affiliatesystemenabled}

{include file="$template/pageheader.tpl" title=$LANG.affiliatesactivate}

<div class="alert-message block-message info">

    <h2>Get Paid for Referring Customers to Us</h2>

    <p>Activate your affiliate account and start earning money today...</p>

</div>

<ul>
<li>We pay commissions for every signup that comes via your custom signup link.</li>
<li>We track the visitors you refer to us using cookies, so users you refer don't have to purchase instantly for you to receive your commission.  Cookies last for up to 90 days following the initial visit.</li>
<li>If you would like to find out more, please contact us.</li>
</ul>

<br />

<form method="post" action="affiliates.php">
<input type="hidden" name="activate" value="true" />
<p align="center"><input type="submit" value="{$LANG.affiliatesactivate}" class="btn success" /></p>
</form>

{else}

{include file="$template/pageheader.tpl" title=$LANG.affiliatestitle}

<div class="alert-message warning">
    <p>{$LANG.affiliatesdisabled}</p>
</div>

{/if}

<br />
<br />
<br />