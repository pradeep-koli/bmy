<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Add Services</h2>
        <form method="post" action="<?= base_url() ?>/service/addService">
            <?= csrf_field() ?>
            <div class="form-group">
                <label for="services">Enter Services (comma separated)</label>
                <textarea class="form-control" name="service_name" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit Services</button>
        </form>
    </div>
</body>
</html>
