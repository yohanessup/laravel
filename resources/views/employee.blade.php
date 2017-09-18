<!doctype html>
<html lang="en">
<head>
    <h1><u>GET DATA RESULT FROM DATABASE</u></h1>
</head>

<style>
    html {
        background-color:  	#F0FFFF;
    }
    body {
        background-color: #FFFFE0;
        width: 750px;
        margin: 0 auto;
        font-size: 14px;
        font-family: Calibri;
    }
</style>

<body>
<div>
    <div style="margin-bottom: 10px"> Database Name: 'employee'</div>
    <div style="margin-bottom: 10px"> Table Name: 'employees' (with 1000 Data Records)</div>
    <table style="width:100%;">
        <tr>
            <th><u>ID</u></th>
            <th><u>FIRST NAME</u></th>
            <th><u>LAST NAME</u></th>
            <th><u>EMAIL</u></th>
            <th><u>GENDER</u></th>
            <th><u>PHONE NUMBER</u></th>
        </tr>

        @foreach ($data as $row)
            <tr>
                <th>{{ $row['id']}} </th>
                <th>{{ $row['first_name'] }}</th>
                <th>{{ $row['last_name'] }}</th>
                <th>{{ $row['email'] }}</th>
                <th>{{ $row['gender'] }}</th>
                <th>{{ $row['phone_number'] }}</th>
            </tr>
        @endforeach

    </table>
</div>
</body>

</html>