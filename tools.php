<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tools & Equipment - Gemology</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">
 
<?php include 'navbar.php'; ?>

  <!-- Header -->
  <header class="bg-white shadow p-4">
    <div class="max-w-6xl mx-auto flex justify-between items-center">
      <h1 class="text-xl font-bold text-purple-700">🔬 Tools & Equipment</h1>
    </div>
  </header>

  <!-- Introduction -->
  <section class="max-w-6xl mx-auto px-4 py-12 grid gap-6 md:grid-cols-2 lg:grid-cols-3">

  <a href="loupe.php" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition hover:bg-purple-50">
    <h3 class="text-xl font-semibold text-purple-700 mb-2">🔍 Loupe</h3>
    <p class="text-sm text-gray-600">A 10x magnification tool for examining inclusions and surface features in gems.</p>
  </a>
  
  <a href="microscope.php" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition hover:bg-purple-50">
    <h3 class="text-xl font-semibold text-purple-700 mb-2">🔬 Microscope</h3>
    <p class="text-sm text-gray-600">Provides high-magnification viewing for detailed internal structures and growth patterns.</p>
  </a>

 <a href="light_sources.php" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition hover:bg-purple-50">
    <h3 class="text-xl font-semibold text-purple-700 mb-2">💡 Light Sources</h3>
    <p class="text-sm text-gray-600">Used to observe gems under different lighting conditions to evaluate color and clarity.</p>
  </a>

  <a href="refractometer.php" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition hover:bg-purple-50">
    <h3 class="text-xl font-semibold text-purple-700 mb-2">📏 Refractometer</h3>
    <p class="text-sm text-gray-600">Measures the refractive index of gemstones for identification and verification.</p>
  </a>

  <a href="spectroscope.php" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition hover:bg-purple-50">
    <h3 class="text-xl font-semibold text-purple-700 mb-2">🌈 Spectroscope</h3>
    <p class="text-sm text-gray-600">Analyzes how a gem absorbs light to identify its composition and treatments.</p>
  </a>

  <a href="polariscope.php" class="block bg-white p-6 rounded-xl shadow hover:shadow-lg transition hover:bg-purple-50">
    <h3 class="text-xl font-semibold text-purple-700 mb-2">🧪 Polariscope</h3>
    <p class="text-sm text-gray-600">Determines optical properties and distinguishes synthetic from natural gems.</p>
  </a>

</section>


  <!-- Footer -->
  <footer>
     <?php include 'footer.php'; ?> 
  </footer>

</body>
</html>
