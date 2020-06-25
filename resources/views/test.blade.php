<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.4.2/chosen.jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <title>Document</title>
</head>
<body>

<select class="js-example-basic-single">
    <option value="AL">Alabama</option>
    <option value="WY">Wyoming</option>
</select>

<script type="text/javascript">
    $(document).ready(function() {
        $(".js-example-basic-single").select2();
    });
</script>


<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>

<script src="{{ URL::asset('assets\js\vendor.min.js') }}"></script>

<script src="{{ URL::asset('assets\libs\datatables\jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\dataTables.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('assets\libs\datatables\dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\jszip\jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\pdfmake\pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\pdfmake\vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\buttons.print.min.js') }}"></script>

<script src="{{ URL::asset('assets\libs\datatables\dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\responsive.bootstrap4.min.js') }}"></script>

<script src="{{ URL::asset('assets\libs\datatables\dataTables.keyTable.min.js') }}"></script>
<script src="{{ URL::asset('assets\libs\datatables\dataTables.select.min.js') }}"></script>

<script src="{{ URL::asset('assets\js\pages\datatables.init.js') }}"></script>

<script src="{{ URL::asset('assets\js\app.min.js') }}"></script>
</body>
</html>
