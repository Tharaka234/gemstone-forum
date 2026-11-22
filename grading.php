<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>📏 Gemstone Grading</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 text-gray-800 min-h-screen flex flex-col">
  
  <!-- Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Main Content -->
  <main class="flex-grow">
    <div class="max-w-5xl mx-auto px-6 py-10">
      <!-- Header -->
      <div class="text-center mb-10">
        <h1 class="text-4xl font-bold text-purple-700">📏 Gemstone Grading</h1>
        <p class="mt-4 text-lg text-gray-600">
          Understand how gemstones are evaluated for quality, rarity, and value using standardized grading systems.
        </p>
      </div>

      <!-- Grading Factors -->
      <div class="bg-white p-6 rounded-xl shadow mb-10">
        <h2 class="text-2xl font-semibold text-purple-600 mb-4">Key Grading Factors</h2>
        <ul class="list-disc pl-6 space-y-2 text-gray-700">
          <li><strong>Color:</strong> Hue, tone, and saturation of the gem.</li>
          <li><strong>Clarity:</strong> Visibility of inclusions or flaws inside the stone.</li>
          <li><strong>Cut:</strong> Quality of the cut affects brilliance and overall appearance.</li>
          <li><strong>Carat Weight:</strong> The size of the gemstone.</li>
          <li><strong>Transparency:</strong> How much light passes through the gem.</li>
        </ul>
      </div>

      <!-- Grading Chart -->
      <div class="bg-white p-6 rounded-xl shadow mb-10">
        <h2 class="text-2xl font-semibold text-purple-600 mb-4">Example Grading Chart</h2>
        <p class="mb-4">Here is a simplified chart used to grade colored gemstones:</p>
        <table class="w-full text-left border border-gray-200">
          <thead>
            <tr class="bg-purple-100 text-purple-700">
              <th class="px-4 py-2 border">Grade</th>
              <th class="px-4 py-2 border">Color</th>
              <th class="px-4 py-2 border">Clarity</th>
              <th class="px-4 py-2 border">Description</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="px-4 py-2 border">AAA</td>
              <td class="px-4 py-2 border">Vivid</td>
              <td class="px-4 py-2 border">Eye-clean</td>
              <td class="px-4 py-2 border">Top quality gemstone with excellent brilliance</td>
            </tr>
            <tr class="bg-gray-50">
              <td class="px-4 py-2 border">AA</td>
              <td class="px-4 py-2 border">Good</td>
              <td class="px-4 py-2 border">Slight inclusions</td>
              <td class="px-4 py-2 border">High quality, good color and clarity</td>
            </tr>
            <tr>
              <td class="px-4 py-2 border">A</td>
              <td class="px-4 py-2 border">Fair</td>
              <td class="px-4 py-2 border">Visible inclusions</td>
              <td class="px-4 py-2 border">Commercial grade, affordable</td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Image Section -->
      <div class="mt-8 text-center">
        <img src="images/Grading.webp" alt="Gemstone grading illustration" class="mx-auto w-full md:w-2/3 rounded-xl shadow-lg">
        <p class="mt-2 text-sm text-gray-500">Illustration of gemstone grading criteria (color, clarity, cut, carat).</p>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>
</html>
