<div class="modal fade" id="schedule-modal" tabindex="-1" role="dialog" aria-labelledby="schedule-modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Select a user to appoint</h4>
      </div>
      <div class="modal-body">
        <div class="row form-group">
          <div class="col-md-6">
            <label>User</label>
            <select name="user_id" class="form-control">
              <?php foreach($users as $user): ?>
                <option value="<?php echo $user->id; ?>">
                  <?php echo "{$user->username} ({$user->first_name} {$user->last_name})"; ?>
                </option>
              <?php endforeach; ?>
            </select>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary pull-left" id="schedule-modal-create-btn">Create Schedule</button>
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->