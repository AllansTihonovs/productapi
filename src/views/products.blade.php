<!DOCTYPE html>
<html>
    <head>
        <title>Tests</title>
    </head>

    <body>
        <h2 style="text-align:center">
            Products from Eloquent builder
        </h2>
        <table>
            @foreach($productsWithAttributes as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->name }}</td>

                    @if(!is_callable($product->productAttributes))
                        @foreach($product->productAttributes as $attribute)
                            <td>{{ $attribute->attribute_key }}</td>
                        @endforeach
                    @endif
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