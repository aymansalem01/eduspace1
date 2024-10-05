document.addEventListener('DOMContentLoaded', function() {
    const videoItems = document.querySelectorAll('.video-box'); // Select all video items
    const videoPlayer = document.getElementById('video'); // Video player element

    // Iterate over each video item
    videoItems.forEach(item => {
        item.addEventListener('click', function() {
            const videoId = this.getAttribute('onclick').match(/'(.+)'/)[1]; // Extract video source from onclick
            playVideo(videoId); // Play the selected video
        });
    });

    // Function to load and play the selected video
    function playVideo(videoSource) {
        console.log("Video Source:", videoSource); // Log the video source
        videoPlayer.src = videoSource; // Set the new video source
        videoPlayer.load(); // Load the new video
        videoPlayer.play().catch(error => {
            console.error("Error playing video:", error);
        });
    }
});
