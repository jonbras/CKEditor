<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CKEditor</title>
</head>
<body>
    <h1>CK Editor 4</h1>

    <form method="post" action="{{ url('submitCk') }}">
        {{ csrf_field() }}
        <textarea class="form-control" id="summary-ckeditor" name="summary-ckeditor"></textarea>

        <br>
        <input type="submit" name="submit" value="Submit" />
    </form>

    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor', {
        filebrowserUploadUrl: "{{route('uploadCk', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
        });
    </script>
</body>
</html>
