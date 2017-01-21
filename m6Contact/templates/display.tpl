{if $module_message && $module_message !=""}
	<div class="alert alert-warning">{$module_message}</div>
{/if}

{form_start action="sendEmail"}
	<div class="form-group">
		<label for="name">Name</label>
		<input type="text" class="form-control" required name="{$actionID}name" value="{$params.name}" />
	</div>
	<div class="form-group">
		<label for="subject">Subject</label>
		<input type="text" class="form-control" required name="{$actionID}subject" value="{$params.subject}" />
	</div>
	<div class="form-group">
		<label for="email">Email</label>
		<input type="email" class="form-control" required name="{$actionID}email" value="{$params.email}" />
	</div>
	<div class="form-group required">
		<label for="email">Website</label>
		<input type="text" class="form-control" name="{$actionID}website" value="" />
	</div>
	<div class="form-group">
		<label for="message">Message <em><small>(Please leave phone # if you desire a call)</small></em></label>
		<textarea class="form-control" name="{$actionID}message">{$params.message}</textarea>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-ar btn-primary">Submit</button>
	</div>
</form>


