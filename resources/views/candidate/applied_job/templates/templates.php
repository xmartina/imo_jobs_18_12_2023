<script id="scheduleSlotBookHtmlTemplate" type="text/x-jsrender">
    <div class="slot-box rounded shadow mb-5 dark-background">
                        <div class="row p-5">
                            <div class="col-sm-12 mb-2">
                                <span class="fw-bold fs-5">{{:schedule_date}} - {{:schedule_time}}</span>
                            </div>
                            <div class="col-sm-12 mb-2">
                                <span class="fw-bold fs-5">{{:notes}}</span>
                            </div>
                            <div class="col-sm-12 mb-0">
                                <div class="form-check form-check-custom form-check-solid is-valid form-check-sm">
                                    <input type="radio" name="slot_book" data-schedule="{{:schedule_id}}" id="{{:index}}" class="form-check-input slot-book me-3" value="<?php echo \App\Models\JobApplicationSchedule::STATUS_SEND ?>">
                                    <label class="custom-control-label fw-bold fs-5" for="{{:index}}"><?php echo __('messages.job_stage.slot_preference') ?></label>
                                </div>
                            </div>
                        </div>
                    </div>

</script>
<script id="chooseSlotHistoryHtmlTemplate" type="text/x-jsrender">
<div class="p-5 rounded shadow mb-5 dark-background">
    <div class="d-flex justify-content-between">
          <span class="fw-bold fs-5">{{:companyName}}</span>
          <span class="fw-bold fs-5">{{:schedule_created_at}}</span>
     </div>
     <span class="fw-bold fs-5">{{:notes}}</span>
     </div>

</script>

<script id="selectedSlotBookHtmlTemplate" type="text/x-jsrender">
    <div class="slot-box rounded shadow mb-5 bg-success">
                        <div class="row p-5">
                            <div class="col-sm-12">
                                <span class="fw-bold fs-5">{{:schedule_date}} - {{:schedule_time}}</span>
                            </div>
                            <div class="col-sm-12">
                                <span class="fw-bold fs-5">{{:notes}}</span>
                            </div>
                        </div>
                    </div>

</script>
