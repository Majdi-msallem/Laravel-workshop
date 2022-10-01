<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss'])
    @vite(['resources/js/app.js'])

    <title>Document</title>
</head>
<body>
<form>
    <div class="form-group">
        <label for="exampleInputEmail"> Email Adress</label>
        <input type="email" class="form-control" id="exampleInputEmail"
               aria-describedby="emailHelp" placeholder="Enter Email">
        <small id="emailHelp" class="form-text text-muted">
            We'll  never share your email with anyone else.
        </small>
    </div>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-Label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>
</html>
