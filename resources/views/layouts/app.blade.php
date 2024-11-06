<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Gallery</title>

    

    @include('layouts.styles')

</head>
<body>

    <!-- Navbar -->
    @include('layouts.nav')

    <!-- Hero Section -->
    @include('sections.hero')

    <!-- About Section -->
    @include('sections.about')

    <!-- Skills Section -->
    @include('sections.skill')

    <!-- Projects Section -->
    @include('sections.project')

    <!-- Contact Section -->
    @include('sections.contact')

    <!-- Footer -->
    @include('layouts.footer')

    @include('layouts.scripts')
</body>
</html>
