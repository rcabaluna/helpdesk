<h2>STEP 3: <?=$requesttype['name']?> Form</h2>
<p class="m-b-30">Fill out the necessary information:</p>

<form id="frm-request-step-three">
    <?php
        switch ($requesttype['requestcode']) {
            case 'NAMETAG':
                echo view('request/details-form/nametag');
                break;
            case 'OTHERS':
                echo view('request/details-form/others');
                break;
            case 'ICTREP':
                    echo view('request/details-form/ictrep');
                    break;
            case 'TECHSUPP':
                echo view('request/details-form/techsupp');
                break;
            case 'EMLCREA':
                echo view('request/details-form/emlcrea');
                break;
            case 'EMLSIG':
                echo view('request/details-form/emlsig');
                break;
            case 'ICTSETUP':
                echo view('request/details-form/ictsetup');
                break;
            case 'CONRM':
                echo view('request/details-form/conrm');
                break;
            case 'GRPHDES':
                echo view('request/details-form/grphdes');
                break;
            case 'PVCID':
                echo view('request/details-form/pvcid');
                break;        
        }
    ?>   
    <div class="form-group text-right">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<script>
    $("#frm-request-step-three").submit(function (e) { 

        var description = '';
        var reqdetails = '';
        var strcontainer = '';
        var cntr = 1;

        switch (requesttype) {
            case "NAMETAG":
            case "EMLCREA":
            case "EMLSIG": 
            case "ICTSETUP":
            case "PVCID":
                reqdetails = $("#frm-request-step-three").serialize();
                break;
            case "OTHERS":
            case "GRPHDES":
                description = $(".ql-editor").html();            
                break;
            case "ICTREP":
            case "TECHSUPP": 
                reqdetails = $("#frm-request-step-three").serialize();
                description = $(".ql-editor").html();            
                break;
            case 'CONRM':
                $('input[name="confictrequested"]:checked').each(function() {
                    strcontainer += this.value;
                    if (cntr < $('input[name="confictrequested"]:checked').length) {
                        strcontainer += ", ";
                        cntr++;
                    }
                });
                reqdetails = "confictrequested="+strcontainer;
            break;
            default:
                break;
            
        }
        
        $.post(BASE_URL + "request/saveRequest", {
            reqsummary: reqsummary,
            reqdetails: reqdetails,
            description: description,
            requesttype:requesttype
        }, function(data) {
            console.log(data);
        })
        e.preventDefault();
        
    });
</script>