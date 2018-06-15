<script type="text/javascript" src="includes/jscript/statesdropdown.js"></script>
{literal}<script language="javascript">
function useExistingCC() {
    jQuery(".newccinfo").hide();
}
function enterNewCC() {
    jQuery(".newccinfo").show();
}
</script>{/literal}
<form method="post" action="creditcard.php">
  <input type="hidden" name="action" value="submit">
  <input type="hidden" name="invoiceid" value="{$invoiceid}">
  <h2>{$LANG.creditcardyourinfo}</h2>
  {if $errormessage}
  <div class="errorbox">{$errormessage}</div>
  <br />
  {/if}
  <table width="100%" cellspacing="0" cellpadding="0" class="frame">
    <tr>
      <td><table width="100%" border="0" cellpadding="10" cellspacing="0">
          <tr>
            <td width=120 class="fieldarea">{$LANG.clientareafirstname}</td>
            <td><input type="text" name="firstname" size=30 value="{$firstname}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientarealastname}</td>
            <td><input type="text" name="lastname" size=30 value="{$lastname}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareaaddress1}</td>
            <td><input type="text" name="address1" size=40 value="{$address1}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareaaddress2}</td>
            <td><input type="text" name="address2" size=30 value="{$address2}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareacity}</td>
            <td><input type="text" name="city" size=30 value="{$city}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareastate}</td>
            <td><input type="text" name="state" size=25 value="{$state}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareapostcode}</td>
            <td><input type="text" name="postcode" size=10 value="{$postcode}" /></td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareacountry}</td>
            <td>{$countriesdropdown}</td>
          </tr>
          <tr>
            <td class="fieldarea">{$LANG.clientareaphonenumber}</td>
            <td><input type="text" name="phonenumber" size="20" value="{$phonenumber}" /></td>
          </tr>
      </table></td>
    </tr>
  </table>
  <h2>{$LANG.creditcarddetails}</h2>
  <p>
    <input type="radio" name="ccinfo" value="useexisting" id="useexisting" onclick="useExistingCC()"{if $cardnum} checked{else} disabled{/if} />
    <label for="useexisting">{$LANG.creditcarduseexisting}{if $cardnum} ({$cardnum}){/if}</label><br />
    <input type="radio" name="ccinfo" value="new" id="new" onclick="enterNewCC()"{if !$cardnum || $ccinfo eq "new"} checked{/if} />
    <label for="new">{$LANG.creditcardenternewcard}</label></p>
    <table width="100%" cellspacing="0" cellpadding="0" class="frame">
      <tr>
        <td><table width="100%" cellpadding="10" cellspacing="0" border="0">
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td width="120" class="fieldarea">{$LANG.creditcardcardtype}</td>
              <td><select name="cctype">
{foreach key=num item=cardtype from=$acceptedcctypes}
                    <option{if $cctype eq $cardtype} selected{/if}>{$cardtype}</option>
{/foreach}
              </select></td>
            </tr>
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td class="fieldarea">{$LANG.creditcardcardnumber}</td>
              <td><input type="text" name="ccnumber" size="30" value="{$ccnumber}" autocomplete="off" /></td>
            </tr>
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td class="fieldarea">{$LANG.creditcardcardexpires}</td>
              <td><select name="ccexpirymonth" id="ccexpirymonth">{foreach from=$months item=month}<option>{$month}</option>{/foreach}</select> / <select name="ccexpiryyear">{foreach from=$years item=year}<option>{$year}</option>{/foreach}</select></td>
            </tr>
            {if $showccissuestart}
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td class="fieldarea">{$LANG.creditcardcardstart}</td>
              <td><input type="text" name="ccstartmonth" size="2" maxlength="2" value="{$ccstartmonth}" />
                /
                <input type="text" name="ccstartyear" size="2" maxlength="2" value="{$ccstartyear}" />
                (MM/YY)</td>
            </tr>
            <tr class="newccinfo"{if $cardnum && $ccinfo neq "new"} style="display:none;"{/if}>
              <td class="fieldarea">{$LANG.creditcardcardissuenum}</td>
              <td><input type="text" name="ccissuenum" size="5" maxlength="3" value="{$ccissuenum}" /></td>
            </tr>
            {/if}
            <tr>
              <td width="120" class="fieldarea">{$LANG.creditcardcvvnumber}</td>
              <td><input type="text" name="cccvv" size="5" value="{$cccvv}" autocomplete="off" />
                <a href="#" onclick="window.open('images/ccv.gif','','width=280,height=200,scrollbars=no,top=100,left=100');return false">{$LANG.creditcardcvvwhere}</a></td>
            </tr>
            {if $shownostore}
            <tr>
              <td class="fieldarea"><input type="checkbox" name="nostore" id="nostore" /></td>
              <td><label for="nostore">{$LANG.creditcardnostore}</label></td>
            </tr>
            {/if}
          </table></td>
      </tr>
    </table>
  <p align="center">
    <input type="submit" value="{$LANG.ordercontinuebutton}" onclick="this.value='{$LANG.pleasewait}'" />
  </p>
  <p align="center"><img src="images/padlock.gif" class="absmiddle" alt="Padlock" border="0" /> {$LANG.creditcardsecuritynotice}</p>
</form>