<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <!-- Cannot match `@foo.test` as it becomes `[dusk="foo.test"]` instead of `[dusk="foo"].test` -->
    <div class="test" dusk="foo">
        <h1>Foo</h1>
    </div>
    <!-- It is impossible to determine whether `.bar` in `@foo.bar` refers to the Dusk selector or the class name -->
    <div class="test bar" dusk="foo.bar">
        <h1>Bar</h1>
    </div>
</body>
</html>
