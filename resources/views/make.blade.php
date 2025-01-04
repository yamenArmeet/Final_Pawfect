<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    {{-- -- this for helter -- --}}
    <form action="{{ route('add.shelter') }}" method="post">
        @csrf
        <div>
            <label for="name">name</label>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="email">email</label>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="phone">phone</label>
            <input type="text" name="phone" id="phone">
        </div>

        <button type="submit"> submit </button>

    </form>
</body>

</html>
