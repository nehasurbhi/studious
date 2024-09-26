<template>
<div class="p-4">
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
        <tr v-for="(course, index) in courses" :key="index" class="border-b">
          <td class="p-3">{{ course.course_name }}</td>
          <td class="p-3">{{ course.course_description }}</td>
          <td class="p-3">{{ course.course_code }}</td>
          <td class="p-3">
            <button
              @click="editCourse(index)"
              class="bg-yellow-500 text-white px-3 py-1 rounded hover:bg-yellow-600 mr-2"
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
    // Method to fetch all courses from the server
    async fetchCourses() {
      try {
        const response = await axios.get('/api/courses');
        this.courses = response.data;
      } catch (error) {
        console.error('Error fetching courses:', error);
      }
    },
    // Method to add a new course
    async addNewCourse() {
      const newCourse = {
        course_name: 'New Course',
        course_description: 'Description of the new course.',
        course_code: 'NEW001'
      };

      try {
        const response = await axios.post('/api/courses', newCourse);
        this.courses.push(response.data);
      } catch (error) {
        console.error('Error adding course:', error);
      }
    },

    // Method to edit an existing course
    async editCourse(courseId) {
      const courseToUpdate = this.courses.find(course => course.id === courseId);
      if (!courseToUpdate) return;

      const updatedCourse = {
        ...courseToUpdate,
        course_name: courseToUpdate.course_name + ' (Updated)'
      };

      try {
        const response = await axios.put(`/api/courses/${courseId}`, updatedCourse);
        const index = this.courses.findIndex(course => course.id === courseId);
        this.courses.splice(index, 1, response.data);
      } catch (error) {
        console.error('Error updating course:', error);
      }
    },

    // Method to delete a course
    async deleteCourse(courseId) {
      try {
        await axios.delete(`/api/courses/${courseId}`);
        this.courses = this.courses.filter(course => course.id !== courseId);
      } catch (error) {
        console.error('Error deleting course:', error);
      }
    }
  },
  mounted() {
    this.fetchCourses();
  },
}
</script>


<style>

</style>