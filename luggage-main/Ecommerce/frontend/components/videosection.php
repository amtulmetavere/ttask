<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Video Section</title>
  <style>
    .video-section {
      /* max-width: 800px;
      margin: 40px auto; */
      position: relative;
    }

    .video-thumbnail {
      position: relative;
      cursor: pointer;
    }

    .video-thumbnail img {
      width: 100%;
      display: block;
      /* border-radius: 8px; */
    }

    .play-button {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 60px;
      height: 60px;
      background-color: rgba(0, 0, 0, 0.6);
      /* border-radius: 50%; */
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .play-button::before {
      content: "";
      border-style: solid;
      border-width: 10px 0 10px 16px;
      border-color: transparent transparent transparent white;
      margin-left: 4px;
    }

    video {
      width: 100%;
      display: none;
      border-radius: 8px;
    }
  </style>
</head>
<body>

<div class="video-section">
  <!-- Replace below fields dynamically if needed -->
  <div class="video-thumbnail" onclick="playVideo(this)">
    <img src="https://alburhanluggage.com/cdn/shop/files/video-poster.jpg?v=1709100148&width=1800" alt="Video Thumbnail" />
    <div class="play-button"></div>
  </div>

  <video controls poster="thumbnail.jpg">
    <source src="//alburhanluggage.com/cdn/shop/videos/c/vp/e7d451a0f522477f9f72b28e69d5405d/e7d451a0f522477f9f72b28e69d5405d.HD-1080p-4.8Mbps-26003827.mp4?v=0" type="video/mp4" />
    Your browser does not support the video tag.
  </video>
</div>

<script>
  function playVideo(container) {
    const section = container.closest('.video-section');
    const video = section.querySelector('video');
    container.style.display = 'none';
    video.style.display = 'block';
    video.play();
  }
</script>

</body>
</html>
