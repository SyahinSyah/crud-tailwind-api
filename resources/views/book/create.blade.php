<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="/css/app.css" rel="stylesheet">
    </head>
</head>
<body>
    <div class="min-w-screen min-h-screen px-5 pb-10 pt-16 flex items-center justify-center bg-yellow-50">
        <div class="mx-auto rounded-lg p-8 bg-indigo-100">
            <form method="POST" action="/created">
                @csrf
                <div class="py-5 flex justify-between">
                    <label for="name">Name:  </label>
                    <input type="text" name="name" id="name" class="rounded" placeholder="Name of book">
                </div>
                @error('name')
                    <div class="text-red-900 text-xs">
                        {{$message}}
                    </div>
                @enderror
               <div class="py-5 flex justify-between">
                <label for="quantity">Quantity: </label>
                <input type="number" min="0" name="quantity" class="rounded" id="quantity" placeholder="How much book">
            </div>
            @error('quantity')
                    <div class="text-red-900 text-xs">
                        {{$message}}
                    </div>
            @enderror
               <div class="py-5 flex justify-between">
                <label for="description">Description :  </label>
                <input type="text" name="description" id="description" class="rounded" placeholder="Description">
            </div>
              @error('description')
                        <div class="text-red-900 text-xs">
                            {{$message}}
                        </div>
                 @enderror
               <div class="py-5 flex justify-center space-x-4">
                <button type="submit" class="bg-gray-200 border-gray-900 border rounded">Submit</button>
                <a href="/books" class="bg-red-100 border-gray-900 border rounded" >Cancel</a>
               </div>
            </form>
        </div>
    </div>
</body>
</html>