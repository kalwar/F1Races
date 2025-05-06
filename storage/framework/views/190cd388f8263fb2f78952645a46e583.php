<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>F1 2025 Races</title>
  <style>
  body {
    background-color: #f0f2f5;
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 50px 20px;
    margin: 0;
    font-family: Arial, sans-serif;
  }

  h1 {
    color: #333;
    font-size: 2.5rem;
    margin-bottom: 2rem;
    text-align: center;
  }

  .race-card {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    margin-bottom: 1.5rem;
    transition: transform 0.3s ease;
    display: flex;
    flex-direction: column;
  }

  .race-card:hover {
    transform: scale(1.02);
  }

  .text-section {
    padding: 1.5rem;
    flex: 1;
  }

  .text-section h2 a {
    color: #dc2626;
    text-decoration: none;
    font-size: 1.5rem;
    font-weight: bold;
  }

  .text-section h2 a:hover {
    text-decoration: underline;
  }

  .text-section p {
    color: #4b5563;
    margin: 0.5rem 0;
    font-size: 1rem;
  }

  .text-section strong {
    font-weight: bold;
  }

  .image-section {
    width: 100%;
  }

  .image-section img {
    object-fit: cover;
    width: 100%;
    height: 200px;
  }

  @media (min-width: 768px) {
    .race-card {
      flex-direction: row;
    }

    .text-section {
      padding: 2rem;
    }

    .image-section {
      width: 33.33%;
    }
  }
  </style>
</head>

<body>
  <!-- Header with dynamic year from API -->
  <h1>
    F1 Races in <?php echo e($races[0]['season'] ?? '2025'); ?>

  </h1>

  <!-- Check if races are available -->
  <?php if(empty($races)): ?>
  <p style="font-size: 1.125rem; color: #4b5563;">No race data available.</p>
  <?php else: ?>
  <!-- Container for race cards -->
  <div style="width: 100%; max-width: 64rem; margin: 0 auto;">
    <?php $__currentLoopData = $races; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $race): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <!-- Race card -->
    <div class="race-card">
      <!-- Text section -->
      <div class="text-section">
        <h2>
          <a href="https://en.wikipedia.org/wiki/<?php echo e(str_replace(' ', '_', $race['raceName'])); ?>" target="_blank">
            <?php echo e($race['raceName']); ?>

          </a>
        </h2>
        <p><strong>Circuit:</strong> <?php echo e($race['Circuit']['circuitName']); ?></p>
        <p><strong>Location:</strong> <?php echo e($race['Circuit']['Location']['locality']); ?>,
          <?php echo e($race['Circuit']['Location']['country']); ?></p>
        <p><strong>Date:</strong> <?php echo e($race['date']); ?></p>
      </div>
      <!-- Image section -->
      <div class="image-section">
        <img
          src="https://media.gq-magazine.co.uk/photos/5e662a63b4e1880008727a40/16:9/w_2560%2Cc_limit/20200309-F1-Round-Up-01.jpg"
          alt="<?php echo e($race['raceName']); ?> Image">
      </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>
  <?php endif; ?>
</body>

</html><?php /**PATH /Users/sk/Herd/f1races/resources/views/races.blade.php ENDPATH**/ ?>