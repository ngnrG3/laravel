<h1>Códigos postales</h1>

<p>Este es un desarrollo para poder consumir una api, a la cual se le envia por método get un código postal, y la api devuelve la siguiente información:</p>

<table>
    <tr>
        <td>zip_code</td>
        <td>string</td>
    </tr>
    <tr>
        <td>locality</td>
        <td>string</td>
    </tr>
    <tr>
        <td>federal_entity</td>
        <td>Object</td>
    </tr>
    <tr>
        <td></td>
        <td>key</td>
        <td>string</td>
    </tr>
    <tr>
        <td></td>
        <td>name</td>
        <td>string</td>
    </tr>
    <tr>
        <td></td>
        <td>code</td>
        <td>string</td>
    </tr>
    <tr>
        <td>settlements</td>
        <td>Array</td>
    </tr>
    <tr>
        <td></td>
        <td>key</td>
        <td>string</td>
    </tr>
    <tr>
        <td></td>
        <td>name</td>
        <td>string</td>
    </tr>
    <tr>
        <td></td>
        <td>zone_type</td>
        <td>string</td>
    </tr>
    <tr>
        <td></td>
        <td>settlement_type</td>
        <td>Object</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>name</td>
        <td>string</td>
    </tr>
    <tr>
        <td>municipality</td>
        <td>Object</td>
    </tr>
    <tr>
        <td></td>
        <td>key</td>
        <td>string</td>
    </tr>
    <tr>
        <td></td>
        <td>name</td>
        <td>string</td>
    </tr>
</table>
<p><em>Realice la normalización de la base de datos para poder tener la relación entre estado, municipio y asentamiento, esto ayuda a la actualización de datos de una manera más fácil y segura, tomando en cuenta que hay nombres de municipios y asentamientos que se repiten  
</em></p>
