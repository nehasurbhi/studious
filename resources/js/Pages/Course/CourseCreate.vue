<template>
    <div class=" mx-auto max-w-7xl  mt-3">
      <h2 class="text-2xl font-bold mb-6">Create a New Course</h2>
      
      <!-- Course Name Input -->
       <form  class="mx-auto p-4 bg-white shadow-md rounded-md">
      <div class="mb-4 ">
        <label for="courseName" class="block text-sm font-medium text-gray-700">Course Name</label>
        <input
          v-model="courseName"
          type="text"
          id="courseName"
          placeholder="Enter course name"
          class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
  
      <!-- Course Description Input -->
      <div class="mb-4">
        <label for="courseDescription" class="block text-sm font-medium text-gray-700">Course Description</label>
        <textarea
          v-model="courseDescription"
          id="courseDescription"
          placeholder="Enter course description"
          rows="2"
          class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        ></textarea>
      </div>
  
      <!-- Course Code Input -->
      <div class="mb-4">
        <label for="courseCode" class="block text-sm font-medium text-gray-700">Course Code</label>
        <input
          v-model="courseCode"
          type="text"
          id="courseCode"
          placeholder="Enter course code"
          class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"
        />
      </div>
    </form>
  
      <!-- Buttons -->
      <div class="flex justify-between mt-6">
        <button
          @click="submitForm" type="submit"
          class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500"
        >
          Submit
        </button>
        <button
          @click="goBack"
          class="bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
        >
          Back
        </button>
      </div>
    </div>
  </template>
  
  <script>
  import { Inertia } from '@inertiajs/inertia';
  export default {
    
    data() {
      return {
        courseName: '',
        courseDescription: '',
        courseCode: '',
      };
    },
    methods: {
      submitForm() {

        const form = {
        course_name: this.courseName,
        course_description: this.courseDescription,
        course_code: this.courseCode,
      };
        // Add your form submission logic here (e.g., Axios API call)
        Inertia.post('/courseStore', form,{
          onSuccess: () => {
           
          }
        });
        // console.log('Form Submitted:', {

        //   courseName: this.courseName,
        //   courseDescription: this.courseDescription,
        //   courseCode: this.courseCode,
        // });
      },
      goBack() {
        // Logic to navigate back to the previous page (you can use Vue Router)
        Inertia.visit('/course');
       
      },
    },
  };
  </script>
  
  <style scoped>
  /* You can add additional styles here if needed */
  </style>
  