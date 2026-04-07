import axios from 'axios';

// Buat instance axios dengan base URL ke API Laravel kita
const apiClient = axios.create({
    baseURL: '/api',
    headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json'
    }
});

export default {
    /**
     * Get home page data (hero text, etc)
     */
    getHomeData() {
        return apiClient.get('/home');
    },
    
    /**
     * Get latest news
     */
    getNews() {
        return apiClient.get('/news');
    },

    /**
     * Get all categories/services
     */
    getCategories() {
        return apiClient.get('/categories');
    },
    
    /**
     * Get galleries for slider/partner sections
     */
    getGalleries() {
        return apiClient.get('/galleries');
    }
}
