<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token Meta Added -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Laravel 5.8 Ajax Form Submit with Validation - W3Adda</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style>
        .error{ color:red; }
    </style>
</head>

<body>

<div class="container">
    <h2 style="margin-top: 10px;">Laravel 5.8 Ajax Form Submit with Validation - W3Adda</h2>
    <br>
    <br>

    <form id="contact_us" method="post" action="javascript:void(0)">
        <div class="alert alert-success d-none" id="msg_div">
            <span id="res_message"></span>
        </div>
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Please enter name">

        </div>
        <div class="form-group">
            <label for="email">Email Id</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">

        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" name="phone" class="form-control" id="phone" placeholder="Please enter mobile number" maxlength="10">

        </div>
        <div class="form-group">
            <button type="submit" id="send_form" class="btn btn-success">Submit</button>
        </div>
    </form>

</div>

</body>
</html>
<script>
    //-----------------
    $(document).ready(function(){
        $('#send_form').click(function(e){
            e.preventDefault();
            /*Ajax Request Header setup*/
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#send_form').html('Sending..');

            /* Submit form data using ajax*/
            $.ajax({
                url: "{{ route('event.create') }}",
                method: 'post',
                data: $('#contact_us').serialize(),
                success: function(response){
                    //------------------------
                    $('#send_form').html('Submit');
                    $('#res_message').show();
                    $('#res_message').html(response.msg);
                    $('#msg_div').removeClass('d-none');

                    document.getElementById("contact_us").reset();
                    setTimeout(function(){
                        $('#res_message').hide();
                        $('#msg_div').hide();
                    },10000);
                    //--------------------------
                }});
        });
    });
    //-----------------
</script>
