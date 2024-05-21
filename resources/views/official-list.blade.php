<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Officials List PDF</title>
    <style>
          table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Officialist</h1>
    <hr>
    <table>
        <thead>
            <tr>
                <th>QR Code</th>
                <th>Position</th>
                <th>Name</th>
                <th>Description</th>
                <th>Email</th>
                <th>Phone Number</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($officials as $official)
                <tr>
                    <td><img src="data:image/png;base64,{{ base64_encode(QrCode::size(50)->generate($official->id)) }}" alt="QR Code"></td>
                    <td>{{ $official->position }}</td>
                    <td>{{ $official->name }}</td>
                    <td>{{ $official->description }}</td>
                    <td>{{ $official->email }}</td>
                    <td>{{ $official->phone_number }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
