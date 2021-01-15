<!DOCTYPE html>
<html>
    <head>
        <title>Tests</title>
    </head>

    <body>
        <h2 style="text-align:center">
            Products from RAW SQL
        </h2>
        <table>
            @foreach($productsWithAttributes as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>
                    @foreach($product->attribute_key as $key)
                        @if(!empty($key))
                            <td>{{ $key }}</td>
                        @endif
                    @endforeach
                </tr>
            @endforeach
        </table>
    </body>

    <style>
        table {
            border-collapse: collapse;
        }

        td {
            padding: 5px;
        }

        table, th, td {
            border: 1px solid black;
        }
    </style>
</html>