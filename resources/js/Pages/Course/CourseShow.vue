<template>
    <div class="w-full mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-5 container mx-auto">
      <!-- Course Details -->
      <h2 class="text-2xl font-semibold mb-4">Course Name</h2>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Course Description:</label>
        <p class="mt-1 text-gray-600">Course Description</p>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Course Code:</label>
        <p class="mt-1 text-gray-600">Course Code</p>
      </div>

      <!-- Buttons -->
      <div class="flex space-x-2 mt-6">
        <button
          @click="editCourse"
          class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
          Edit
        </button>
        <button
          @click="goBack"
          class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50"
        >
          Back
        </button>
      </div>
    </div>
  </div>
</template>

<script>

</script>

<style>

</style>