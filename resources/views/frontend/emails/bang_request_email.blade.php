<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bang Request</title>
</head>
<body>
    Hi,

    <p>User Name:     {{$userData['first_name']}}   {{$userData['last_name']}}</p>
    <p>User Email:    {{$userData['user_email']}} </p>
    <p>Bang id:       {{$userData['bangId']}} </p>
    <p>Bang Type:     {{$userData['bang_type']}} </p>
    <p>Address:       {{$userData['address']}} </p>


    Thanks

</body>
</html>