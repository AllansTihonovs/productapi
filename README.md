## Installation

Require `allans/productsapi` using composer.

## Routes

API urls:
Specifisks produkts ar atribūtiem:
http://*/getProductWithAttributes?product_id=1

Tikai atribūti specifiskam produktam:
http://*/getProductAttributes?product_id=1

Visi produkti:
http://*/getProducts

Produkti HTML tabulā no eloquent buildera:
http://*/getProductsViewEloquent

Produkti HTML tabulā no RAW SQL:
http://*/getProductsViewSQL