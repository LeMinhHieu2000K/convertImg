<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="Upload" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{csrf_token('')}}">
        <label for="files">Chọn ảnh:</label>
        <input type="file" id="files" name="files[]" multiple><br><br>
        <input type="submit">
      </form>
    
</body>
</html>