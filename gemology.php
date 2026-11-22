<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gemology Forum</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="bg-gray-100 text-gray-800">

  <!-- Navbar Include -->
  <?php include 'navbar.php'; ?>

  <!-- Hero Section -->
  <section class="bg-indigo-50 py-20 text-center">
    <div class="max-w-3xl mx-auto px-4">
      <h1 class="text-5xl font-extrabold text-indigo-800 mb-4">Explore the World of Gemology</h1>
      <p class="text-lg text-gray-700 leading-relaxed">
        Learn, identify, and connect with fellow gem enthusiasts.
        Dive into a vibrant community passionate about the beauty and science of gemstones.
      </p>
    </div>
  </section>

  <!-- Quick Links Section -->
  <section class="max-w-6xl mx-auto py-16 grid md:grid-cols-4 gap-6 px-4">
    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <a href="gem_identification.php" class="block text-indigo-700 no-underline hover:bg-indigo-50 rounded-lg p-4 transition">
        <h3 class="text-xl font-semibold mb-2">🔍 Identify a Gem</h3>
        <p class="text-sm text-gray-600">Post photos and get help identifying gemstones from experts and hobbyists.</p>
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <a href="learn_gemology.php" class="block text-indigo-700 no-underline hover:bg-indigo-50 rounded-lg p-4 transition">
        <h3 class="text-xl font-semibold mb-2">📚 Learn Gemology</h3>
        <p class="text-sm text-gray-600">Dive into guides on gem properties, tools, treatments, and grading systems.</p>
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <a href="forum.php" class="block text-indigo-700 no-underline hover:bg-indigo-50 rounded-lg p-4 transition">
        <h3 class="text-xl font-semibold mb-2">💬 Join the Forum</h3>
        <p class="text-sm text-gray-600">Discuss topics, get help, and share your gem collection with the community.</p>
      </a>
    </div>

    <div class="bg-white p-6 rounded-xl shadow hover:shadow-lg transition">
      <a href="cart.php" class="block text-indigo-700 no-underline hover:bg-indigo-50 rounded-lg p-4 transition">
        <h3 class="text-xl font-semibold mb-2">🛒 Marketplace</h3>
        <p class="text-sm text-gray-600">Safely buy, sell, and trade gemstones and gemological tools.</p>
      </a>
    </div>
  </section>

  <!-- Footer Include -->
  <footer>
    <?php include 'footer.php'; ?>
  </footer>

</body>
</html>

