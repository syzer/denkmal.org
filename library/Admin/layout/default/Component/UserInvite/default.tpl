<div class="toggleNext">{if $userInvite->getEmail()}{$userInvite->getEmail()|escape}{/if} by {$userInvite->getInviter()->getDisplayName()|escape}</div>
<div class="toggleNext-content">
  {form name='Admin_Form_UserInvite' userInvite=$userInvite}
  {formField name='email' label={translate 'E-Mail'}}
  {formField name='expires' label={translate 'Verfall'}}
  {formAction action='Save' label={translate 'Speichern'}}
  {/form}
</div>
