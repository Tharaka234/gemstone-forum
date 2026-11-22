<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Learn Gemology</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
  <!-- Optional Navigation Bar -->
  <?php include 'navbar.php';?>
  <!-- Header -->
  <header class="bg-white shadow p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold text-purple-700">📘 Learn Gemology</h1>
      
    </div>
  </header>

  <!-- Intro Section -->
  <section class="text-center py-12 bg-purple-50">
    <h2 class="text-3xl font-bold text-purple-800 mb-2">Discover the Science of Gemstones</h2>
    <p class="text-lg text-gray-700 max-w-2xl mx-auto">Explore gem properties, testing tools, treatments, and how to grade gemstones accurately.</p>
  </section>

  <!-- Topics Grid -->
  <section class="max-w-6xl mx-auto px-4 py-12 grid gap-6 md:grid-cols-3">

    
    <a href="gemstone_types.php" class="block hover:no-underline">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-purple-700 mb-2">💎 Gemstone Types</h3>
      <p class="text-sm text-gray-600">Learn about different gemstone families and how they’re formed.</p>
    </div>

    <a href="tools.php" class="block hover:no-underline">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-purple-700 mb-2">🔬 Tools & Equipment</h3>
      <p class="text-sm text-gray-600">Understand the tools used in gem testing, such as loupes, microscopes, and spectrometers.</p>
    </div>
    </a>

    <a href="treatments.php" class="block hover:no-underline">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-purple-700 mb-2">💡 Treatments</h3>
      <p class="text-sm text-gray-600">Explore common gemstone enhancements like heating, dyeing, and irradiation.</p>
    </div>
    </a>

    <a href="grading.php" class="block hover:no-underline">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-purple-700 mb-2">📏 Grading</h3>
      <p class="text-sm text-gray-600">Understand how color, clarity, cut, and carat weight influence gem value.</p>
    </div>
    </a>


    <a href="identification.php" class="block hover:no-underline">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-purple-700 mb-2">🧪 Identification</h3>
      <p class="text-sm text-gray-600">Identify gemstones using optical and physical characteristics.</p>
    </div>
   </a>

    <a href="books.php" class="block hover:no-underline">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <h3 class="text-xl font-semibold text-purple-700 mb-2">📚 Recommended Books</h3>
      <p class="text-sm text-gray-600">Get started with trusted gemology books and study material.</p>
    </div>
  </section>

  <!-- Footer -->
  <footer>
   <?php include 'footer.php';?>
  </footer>

</body>
</html>
