// bar.js

// Function to create circular progress bar with different color
function createProgressBar(containerId, percentage, color) {
    var container = document.getElementById(containerId);
    var circle = document.createElement('div');
    circle.className = 'progress-bar-circle';
    container.appendChild(circle);
  
    var bar = new ProgressBar.Circle(circle, {
      color: color, // Set the color
      strokeWidth: 10,
      trailWidth: 10,
      easing: 'easeInOut',
      duration: 1400,
      text: {
        value: '0%', // Initial text value
        style: {
          // Text styling
          color: '#333',
          position: 'absolute',
          left: '50%',
          top: '50%',
          padding: 0,
          margin: 0,
          fontSize: '20px',
          transform: {
            prefix: true,
            value: 'translate(-50%, -50%)'
          }
        }
      },
      from: { color: '#aaa', width: 10 },
      to: { color: '#333', width: 10 },
      step: function(state, circle) {
        // Update text inside the circle with current percentage
        circle.setText(Math.round(circle.value() * 100) + '%');
      }
    });
    bar.animate(percentage);
  }
  
  // Initialize progress bars with different colors
  window.onload = function() {
    // Sensor 1 (Green)
    createProgressBar('sensor1', 0.26, '#523B3B'); // Example percentage (75%)
  
    // Sensor 2 (Blue)
    createProgressBar('sensor2', 0.04, '#523B3B'); // Example percentage (50%)
  
    // Sensor on Cylinder (Orange)
    createProgressBar('sensorOnCylinder', 0.05, '#42AFAF'); // Example percentage (60%)
  };
  