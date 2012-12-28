<hr />

<div class="import-schedule">
	<h3>Schedule Import</h3>
	<ul class="schedule-options">
		<li><label><input type="radio" name="bmuci_schedule" value="now"<?php if($schedule == 'now') echo ' checked="checked"'; ?> /> Import Now!</label></li>
		<li><label><input type="radio" name="bmuci_schedule" value="incremental"<?php if($schedule == 'incremental') echo ' checked="checked"'; ?> /> Import Now, but in increments of</label> <input type="text" name="bmuci_increment" value="<?php echo $this->increment; ?>"/></li>
		<li><label><input type="radio" name="bmuci_schedule" value="manual"<?php if($schedule == 'manual') echo ' checked="checked"'; ?> /> Save my settings and I'll manually run the import. (handy for cron tasks already scheduled)</label></li>
		<li><label><input type="radio" name="bmuci_schedule" value="datetime"<?php if($schedule == 'datetime') echo ' checked="checked"'; ?> /> Specific Date/Time</label>
			<label class="datetime_input">Enter Date/Time:
				<input type="text" name="schedule_datetime" />
				<span class="cron-note">Please note, you'll need <a href="http://wp.tutsplus.com/articles/insights-into-wp-cron-an-introduction-to-scheduling-tasks-in-wordpress/" rel="nofollow">WP CRON</a> enabled for this to work.</span>
			</label></li>
	</ul>
</div>