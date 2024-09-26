<template>
     <div class="max-w-7xl mx-auto p-4">
    <div class="bg-white shadow-md rounded-lg p-6 container mx-auto">
      <!-- Page Title -->
      <h2 class="text-2xl font-semibold mb-6">Update Course</h2>

      <!-- Form Fields -->
      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Course Name</label>
        <input
          type="text"
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Enter course name"
        />
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Course Description</label>
        <textarea
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Enter course description"
        ></textarea>
      </div>

      <div class="mb-4">
        <label class="block text-sm font-medium text-gray-700">Course Code</label>
        <input
          type="text"
          class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
          placeholder="Enter course code"
        />
      </div>

      <!-- Buttons -->
      <div class="flex space-x-2 mt-6">
        <button
          @click="updateCourse"
          class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50"
        >
          Update
        </button>
        <button
          @click="cancelUpdate"
          class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-opacity-50"
        >
          Cancel
        </button>
      </div>
    </div>
  </div>
</template>

<script>

</script>

<style>

</style>