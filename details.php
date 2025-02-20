<?php
$data = json_decode(file_get_contents('visits.json'), true);
$visit = array_values(array_filter($data['visits'], fn($v) => $v['id'] == $_GET['id']));
$visit = $visit[0] ?? null;

if (!$visit) {
    die("Error: Industrial visit details not found!");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($visit['title']); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <header class="banner">
        <h1><?php echo htmlspecialchars($visit['title']); ?></h1>
    </header>

    <div class="container">
        <!-- Top Banner Image -->
        <img src="upload/infra/visit-tupper.jpg" alt="Event Banner" class="banner-img">
        
        <!-- Event Details -->
        <!-- <div class="event-details">
            <p><strong>📅 Date & Time:</strong> <?php echo htmlspecialchars($visit['date']); ?> | 📍 <?php echo htmlspecialchars($visit['location']); ?></p>
        </div> -->

        <!-- Highlights -->
       

        <!-- Event Images -->
        <h3>Event Images:</h3>
        <div class="image-gallery">
            <?php foreach ($visit['images'] as $image): ?>
                <img src="<?php echo htmlspecialchars($image); ?>" alt="Event Image" class="event-img">
            <?php endforeach; ?>
        </div>

        <h3>Highlights of the Event:</h3>
        <p><?php echo nl2br(htmlspecialchars($visit['highlights'])); ?></p>
        <!-- Additional Details -->
        <h3>Course Participants:</h3>
        <p><?php echo htmlspecialchars($visit['course_participants']); ?></p>

        <h3>Event Coordinator:</h3>
        <p><?php echo htmlspecialchars($visit['coordinator']); ?></p>

        <h3>Contact Person:</h3>
        <p><?php echo htmlspecialchars($visit['contact_person']); ?></p>

        <h3>AIM of the Event:</h3>
        <p><?php echo htmlspecialchars($visit['aim']); ?></p>

        <h3>Overview</h3>
        <p><?php echo nl2br(htmlspecialchars($visit['description'])); ?></p>
    </div>
    
    <a href="index.php" class="back-button">Back to Home</a>
</body>
</html>

<style>
    .banner {
        background: #0d3c6e;
        color: white;
        text-align: center;
        padding: 15px 0;
        font-size: 18px;
        font-weight: bold;
    }
    .container {
        width: 80%;
        background: white;
        margin: 20px auto;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }
    .banner-img {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .event-details {
        text-align: center;
        font-size: 18px;
        color: #333;
        margin-bottom: 20px;
    }
    .image-gallery {
        display: flex;
        gap: 15px;
        flex-wrap: wrap;
        justify-content: center;
    }
    .event-img {
        width: 30%;
        height: auto;
        border-radius: 5px;
        box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
    }
    .back-button {
        display: block;
        text-align: center;
        margin: 20px auto;
        padding: 12px;
        width: 200px;
        background: #007bff;
        color: #fff;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
    }
    .back-button:hover {
        background: #0056b3;
    }
    @media (max-width: 768px) {
        .container {
            width: 95%;
        }
        .event-img {
            width: 90%;
        }
    }
</style>
