
<div class="footer">
    
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-datetimepicker/2.5.4/build/jquery.datetimepicker.full.min.js"></script>

<script type="text/javascript">
    $(function(){
       
       $.datetimepicker.setLocale('zh-TW');
       
       $(".datenowpicker").datetimepicker({
            timepicker: false,
            format:'Y/m/d',
            minDate: 0
       }); 
       
       $(".timepicker").datetimepicker({
            datepicker: false,
            format:'H:i',
       }); 
        
    });
</script>