<h2>STEP 3: <?=$requesttype['name']?> Form</h2>
<p class="m-b-30">Fill out the necessary information:</p>

<form id="frm-request-step-three">
    <?php
        switch ($requesttype['requestcode']) {
            case 'NAMETAG':
                echo view('request/details-form/nametag');
                break;
            
            default:
                # code...
                break;
        }
    ?>   
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<script>
    $("#frm-request-step-three").submit(function (e) { 

        console.log($("#filephotoupload").val());
        
        $.post(BASE_URL + "request/saveRequest", {
            reqsummary: reqsummary,
            reqdetails: $("#frm-request-step-three").serialize()
        }, function(data) {
            console.log(data);
        })

        e.preventDefault();
        
    });
</script>