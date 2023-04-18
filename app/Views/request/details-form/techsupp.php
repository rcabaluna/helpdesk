<div class="form-row">
    <div class="form-group col-md-6">
        <label for="dtedate">Date of the event</label>
        <input type="date" name="xdate" id="dtedate" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
        <label for="tmetime">Time of the event</label>
        <input type="time" name="xtime" id="tmetime" class="form-control" required>
    </div>
    <div class="form-group col-md-12">
        <label for="txtdescription">Title/Description of the Event</label>
        <div id="editor" class="form-control"></div>
    </div>
</div> 

<script>
    new Quill('#editor', {
        theme: 'snow'
    });
</script>