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

    <p>User Name:     <?php echo e($userData['first_name']); ?>   <?php echo e($userData['last_name']); ?></p>
    <p>User Email:    <?php echo e($userData['user_email']); ?> </p>
    <p>Bang id:       <?php echo e($userData['bangId']); ?> </p>
    <p>Bang Type:     <?php echo e($userData['bang_type']); ?> </p>
    <p>Address:       <?php echo e($userData['address']); ?> </p>


    Thanks

</body>
</html><?php /**PATH E:\xampp\htdocs\MVP\resources\views/frontend/emails/bang_request_email.blade.php ENDPATH**/ ?>