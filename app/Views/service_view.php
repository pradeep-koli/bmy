<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h6><i class="fa-solid fa-volume-up me-2"></i>Services</h6>
        
        <!-- List -->
        <ul class="list-group list-group-borderless mt-2 mb-0">
            <?php if (!empty($services)): ?>
                <?php foreach ($services as $service): ?>
                    <li class="list-group-item pb-0">
                        <i class="fa-solid fa-check-circle text-success me-2"></i>
                        <?= esc($service['service_name']); ?>
                    </li>
                <?php endforeach; ?>
            <?php else: ?>
                <li class="list-group-item pb-0">No services found</li>
            <?php endif; ?>
        </ul>

        <a href="<?= base_url() ?>/service/addService" class="btn btn-primary mt-4">Add New Service</a>
    </div>
</body>
</html>
