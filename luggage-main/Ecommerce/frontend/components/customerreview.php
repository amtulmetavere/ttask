<html>
  <head>
    <style>
      .customerreview-section {
        padding: 40px 0;
        width: 100%;
        background-color: #f9f9f9;
      }

      .reviewbody h2 {
        font-size: max(0.6875rem, clamp(1.25rem, 1.067rem + 0.78vw, 28px));
        margin-bottom: 30px;
        line-height: 39.2px;
        letter-spacing: 5.04px;
        font-weight: 300;
        text-transform: uppercase;
        text-align: center;
        max-width: 600px;
        margin-inline: auto;
      }

      .customerreview-container {
        max-width: 1400px;
        margin: 0 auto;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
        justify-content: center;
      }

      .customerreview-item {
        width: 100%;
        max-width: 320px;
      }

      .customerreview-item .video-section {
        position: relative;
        width: 100%;
        aspect-ratio: 16 / 30;
        overflow: hidden;
        background-color: #000;

      }

      .customerreview-item .video-thumbnail {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        cursor: pointer;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 2;
      }

      .customerreview-item .video-thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
  
      }

      .customerreview-item .play-button {
        position: absolute;
        z-index: 3;
        cursor: pointer;
      }

      .customerreview-item video {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        object-fit: cover;
        z-index: 1;
        border-radius: 8px;
        display: none;
      }

      .customerreview-item .video-section.playing .video-thumbnail {
        display: none;
      }

      .customerreview-item .video-section.playing video {
        display: block;
      }
      .customerreview-item .play-button{
background: none;
      }
    </style>
  </head>
  <body>
    <section class="customerreview-section">
      <div class="reviewbody">
        <h2>View some of Our Store Visit Videos</h2>
        <div class="customerreview-container">
          <!-- Repeat as needed -->
          <div class="customerreview-item">
            <div class="video-section">
              <div class="video-thumbnail" onclick="playVideo(this)">
                <img src="https://alburhanluggage.com/cdn/shop/files/preview_images/3689c8622cdb4210b6c25720692ce18d.thumbnail.0000000000_400x.jpg?v=1708934824" alt="Video Thumbnail" />
                <svg part="play-button" fill="none" width="48" height="48" viewBox="0 0 48 48" class="play-button">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0s24 10.745 24 24Zm-18 0-9-6.6v13.2l9-6.6Z" fill="#efefef"></path>
                </svg>
              </div>
              <video controls poster="">
                <source src="//alburhanluggage.com/cdn/shop/videos/c/vp/3689c8622cdb4210b6c25720692ce18d/3689c8622cdb4210b6c25720692ce18d.HD-1080p-2.5Mbps-25095831.mp4?v=0" type="video/mp4" />
              </video>
            </div>
          </div>
          <!-- Copy/paste this block for other videos -->
          <div class="customerreview-item">
            <div class="video-section">
              <div class="video-thumbnail" onclick="playVideo(this)">
                <img src="https://alburhanluggage.com/cdn/shop/files/preview_images/3689c8622cdb4210b6c25720692ce18d.thumbnail.0000000000_400x.jpg?v=1708934824" alt="Video Thumbnail" />
                <svg part="play-button" fill="none" width="48" height="48" viewBox="0 0 48 48" class="play-button">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0s24 10.745 24 24Zm-18 0-9-6.6v13.2l9-6.6Z" fill="#efefef"></path>
                </svg>
              </div>
              <video controls poster="">
                <source src="//alburhanluggage.com/cdn/shop/videos/c/vp/3689c8622cdb4210b6c25720692ce18d/3689c8622cdb4210b6c25720692ce18d.HD-1080p-2.5Mbps-25095831.mp4?v=0" type="video/mp4" />
              </video>
            </div>
          </div>
          <div class="customerreview-item">
            <div class="video-section">
              <div class="video-thumbnail" onclick="playVideo(this)">
                <img src="https://alburhanluggage.com/cdn/shop/files/preview_images/3689c8622cdb4210b6c25720692ce18d.thumbnail.0000000000_400x.jpg?v=1708934824" alt="Video Thumbnail" />
                <svg part="play-button" fill="none" width="48" height="48" viewBox="0 0 48 48" class="play-button">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0s24 10.745 24 24Zm-18 0-9-6.6v13.2l9-6.6Z" fill="#efefef"></path>
                </svg>
              </div>
              <video controls poster="">
                <source src="//alburhanluggage.com/cdn/shop/videos/c/vp/3689c8622cdb4210b6c25720692ce18d/3689c8622cdb4210b6c25720692ce18d.HD-1080p-2.5Mbps-25095831.mp4?v=0" type="video/mp4" />
              </video>
            </div>
          </div>
          <div class="customerreview-item">
            <div class="video-section">
              <div class="video-thumbnail" onclick="playVideo(this)">
                <img src="https://alburhanluggage.com/cdn/shop/files/preview_images/3689c8622cdb4210b6c25720692ce18d.thumbnail.0000000000_400x.jpg?v=1708934824" alt="Video Thumbnail" />
                <svg part="play-button" fill="none" width="48" height="48" viewBox="0 0 48 48" class="play-button">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M48 24c0 13.255-10.745 24-24 24S0 37.255 0 24 10.745 0 24 0s24 10.745 24 24Zm-18 0-9-6.6v13.2l9-6.6Z" fill="#efefef"></path>
                </svg>
              </div>
              <video controls poster="">
                <source src="//alburhanluggage.com/cdn/shop/videos/c/vp/3689c8622cdb4210b6c25720692ce18d/3689c8622cdb4210b6c25720692ce18d.HD-1080p-2.5Mbps-25095831.mp4?v=0" type="video/mp4" />
              </video>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script>
      function playVideo(thumbnail) {
        const section = thumbnail.closest('.video-section');
        section.classList.add('playing');
        const video = section.querySelector('video');
        video.play();
      }
    </script>
  </body>
</html>
