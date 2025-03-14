<template>
    <div class="container mx-auto p-8 flex">
        <div class="max-w-md w-full mx-auto">
            <div class="bg-white rounded-lg overflow-hidden shadow-2xl">
                <div class="p-8">
                    <div class="mb-5">
                        <label for="password" class="block mb-2 text-xl">Password</label>
                        <input type="password" name="password" v-model="password" class="block w-full p-3 rounded bg-gray-200 border border-transparent focus:outline-none">
                        <small class="text-red-600" v-if="error">
                            {{  error }}
                        </small>
                    </div>
                    <button class="w-full p-3 mt-4 bg-indigo-600 text-white rounded shadow" @click="login">Login</button>
                </div>
            </div>
        </div>
    </div>
</template>
<script setup>
    import axios from 'axios';
    import { ref } from 'vue';
    const password = ref(null);
    const error = ref(null);

    const login = async() => {
        try {
            await axios.post(`/login`, { password: password.value});
            window.location.href = "/";
        } catch (e) {
            error.value = e.response?.data?.message;
        }
    }
</script>