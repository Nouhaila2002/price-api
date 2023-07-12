<!DOCTYPE html>
<html>
<head>
    <title>Table</title>
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

</head>
<body>
    <table>
        <thead>
            <tr>
                <th>URL</th>
                <th>Price (€)</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
            <tr>
                @foreach ($item as $url => $value)
                <td><a href="{{ $url }}" target="_blank">{{ $url }}</a> </td>
                <td>{{ $value }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
