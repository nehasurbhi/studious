<template>
<div class="mx-auto mt-3 max-w-7xl">
    <h1 class="text-2xl font-bold mb-4">Course List</h1>
    
    <!-- Add New Course Button -->
    <button
      @click="addCourse"
      class="mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600"
    >
      Add New Course
    </button>

    <table class="w-full bg-white shadow-md rounded-lg overflow-hidden">
      <thead class="bg-gray-200">
        <tr>
          <th class="p-3 text-left">Course Name</th>
          <th class="p-3 text-left">Course Description</th>
          <th class="p-3 text-left">Course Code</th>
          <th class="p-3 text-left">Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr  class="border-b">
          <td class="p-3">MCA</td>
          <td class="p-3">Data Analysis and algorithm</td>
          <td class="p-3">2011</td>
          <td class="p-3">
            <button
              @click="showCourse(index)"
              class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 mr-2"
            >
              Show
            </button>
            <button
              @click="editCourse(index)"
              class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-600 mr-2"
            >
              Edit
            </button>
            <button
              @click="deleteCourse(index)"
              class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600"
            >
              Delete
            </button>
          </td>
        </tr>
        <!-- Check if course list is empty -->
        <tr v-if="courses.length === 0">
          <td colspan="4" class="text-center p-3">No courses available</td>
        </tr>
      </tbody>
    </table>
    </div>
    
</template>

<script>
import { ref } from 'vue';
import { Inertia } from '@inertiajs/inertia';
import axios from 'axios';
export default {
components:{
  axios,
  ref
},
data() {
    return {
      courses: [], // Array to hold the courses
    };
  },
  methods: {
    addCourse(){
      Inertia.visit('/courseAdd');
    },
    // Method to fetch all courses from the server
   
    // Method to add a new course
   
    // Method to delete a course
  
  },
  mounted() {
    
  },
}
</script>


<style>

</style>