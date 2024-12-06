<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smooth Scroll</title>
  <style>
    html {
      scroll-behavior: smooth;
    }

    .list {
      display: flex;
      flex-direction: column;
      gap: 10px;
      margin: 20px;
    }

    .list label {
      cursor: pointer;
      padding: 10px;
      background-color: #f9f9f9;
      border: 1px solid #ddd;
      border-radius: 5px;
      display: flex;
      align-items: center;
    }

    section {
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      border: 1px solid #ddd;
      margin-top: 10px;
    }
  </style>
</head>
<body>
  <div class="list">
    <label data-target="#english-section">English Section</label>
    <label data-target="#commerce-section">Commerce Section</label>
    <label data-target="#cs-section">Computer Science Section</label>
  </div>

  <section id="english-section">
    <h1>English Section</h1>
  </section>
  <section id="commerce-section">
    <h1>Commerce Section</h1>
  </section>
  <section id="cs-section">
    <h1>Computer Science Section</h1>
  </section>

  <script>
    document.querySelectorAll('.list label').forEach((label) => {
      label.addEventListener('click', () => {
        const targetId = label.getAttribute('data-target');
        const targetElement = document.querySelector(targetId);
        if (targetElement) {
          targetElement.scrollIntoView({
            behavior: 'smooth',
            block: 'center',
          });
        }
      });
    });
  </script>
</body>
</html>
