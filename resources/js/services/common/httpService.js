import axios from 'axios';

export class HttpService {
    constructor() {
        this.axios = axios.create({
            baseURL: '/api/v1/'
        });
    }

    get(url, params) {
        return this.axios.get(url, params);
    }

    post(url, data) {
        return this.axios.post(url, data);
    }

    put(url, data) {
        return this.axios.put(url, data);
    }

    delete(url, params) {
        return this.axios.delete(url, params);
    }
}

export default new HttpService();
