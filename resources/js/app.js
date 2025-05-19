// JavaScript for 3D interactive effects on the portfolio website

// Function to add 3D tilt effect on an element based on mouse movement
// element: DOM element to apply the effect
// maxTilt: maximum tilt angle in degrees
function add3DTiltEffect(element, maxTilt = 15) {
  // Listen for mouse movement over the element
  element.addEventListener('mousemove', (event) => {
    // Get element dimensions and position
    const rect = element.getBoundingClientRect();
    // Calculate mouse position relative to element center
    const x = event.clientX - rect.left - rect.width / 2;
    const y = event.clientY - rect.top - rect.height / 2;
    // Calculate tilt angles proportional to mouse position
    const tiltX = (y / (rect.height / 2)) * maxTilt;
    const tiltY = (x / (rect.width / 2)) * maxTilt;
    // Apply CSS transform for 3D tilt
    element.style.transform = `rotateX(${-tiltX}deg) rotateY(${tiltY}deg) translateZ(20px)`;
  });

  // Reset transform when mouse leaves the element
  element.addEventListener('mouseleave', () => {
    element.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0)';
  });
}

// Function to add hover depth effect on a list of elements
// elements: NodeList or array of DOM elements
function addHoverDepthEffect(elements) {
  elements.forEach((el) => {
    el.addEventListener('mouseenter', () => {
      el.style.transform = 'translateZ(30px) scale(1.1)';
      el.style.boxShadow = '10px 10px 20px rgba(255, 218, 114, 0.8), -8px -8px 15px rgba(255, 242, 159, 0.7)';
    });
    el.addEventListener('mouseleave', () => {
      el.style.transform = '';
      el.style.boxShadow = '';
    });
  });
}

// Initialize 3D effects when DOM content is loaded
document.addEventListener('DOMContentLoaded', () => {
  // Select hero photo and intro text container
  const heroPhoto = document.querySelector('.hero .photo');
  const heroIntro = document.querySelector('.hero .intro');

  if (heroPhoto) {
    // Add 3D tilt effect to hero photo
    add3DTiltEffect(heroPhoto, 20);
  }

  if (heroIntro) {
    // Add 3D tilt effect to hero intro text
    add3DTiltEffect(heroIntro, 15);
  }

  // Add hover depth effect to project cards
  const projectCards = document.querySelectorAll('.project-card');
  if (projectCards.length > 0) {
    addHoverDepthEffect(projectCards);
  }

  // Add hover depth effect to skill items
  const skillItems = document.querySelectorAll('.skill');
  if (skillItems.length > 0) {
    addHoverDepthEffect(skillItems);
  }
});
